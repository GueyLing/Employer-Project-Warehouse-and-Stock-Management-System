<?php

namespace App\Http\Controllers\WarehouseStaff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Stock;
use App\Models\Stocktake;
use App\Models\Activitylog;

class DashboardController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
      }

    public function index() {
      return view('warehouse_staff.dashboard');
    }

    public function stockTake() {
      $stocks = Stocktake::all()->unique('doc_no');
      return view('warehouse_staff.takestock', [
        'stocks' => $stocks,
    ]);
    }

    public function addNewStockTake() {
      $stocks = Stock::distinct()->get(['location']);
      return view('warehouse_staff.addnewstocktake', [
        'stocks' => $stocks,
    ]);
    }

    public function selectLocation(Request $req){
      $stocks = Stock::distinct()->get(['location']);
      $locations = Stock::where('location', '=',$req->location)->get();
      return view('warehouse_staff.addnewstocktake', [
        'locations' => $locations,
        'stocks' => $stocks,
    ]);}

    public function store(Request $request){
      foreach($request->input('product_name') as $key => $value) 
      {
           $item = new Stocktake;
           $item ->location = $request->location;
           $item ->doc_no = $request->docno;
           $item ->doc_date = $request->docdate;
           $item ->description = $request->description;
           $item ->product_name = $request->get('product_name')[$key];
           $item ->code = $request->get('code')[$key];
           $item ->quantity_available = $request->get('quantity_available')[$key];
           $item ->new_quantity = $request->get('new_quantity')[$key];
           $item ->quantity_adjusted = $request->get('quantity_adjusted')[$key];
           $item ->remark = $request->get('remark')[$key];
           // mention other fields here
           $item ->save();

           if ($request->get('quantity_adjusted')[$key] != 0){
            $stock = Stock::where('code', '=', $request->get('code')[$key])->first();
            $stock->quantity=$request->get('new_quantity')[$key];
            $stock->save();

            $newactivity = new Activitylog;
            $newactivity ->location = $request->location;
            $newactivity ->product_name = $request->get('product_name')[$key];
            $newactivity ->code = $request->get('code')[$key];
            $newactivity ->quantity = $request->get('new_quantity')[$key];
            $newactivity ->variance = $request->get('quantity_adjusted')[$key];
            $newactivity ->activity="Stock Take";
            // mention other fields here
            $newactivity ->save();
           }       
      }  
      return redirect()->action('App\Http\Controllers\WarehouseStaff\DashboardController@stockTake');
    }

    public function showData($doc_no){
      $stocks = Stocktake::where('doc_no', '=', $doc_no)->get();
      return view('warehouse_staff.showstocktake',['stocks'=>$stocks]);
    }

    public function lowStockAlert(){
      $stocks = Stock::whereRaw('quantity < low_stock_alert')->get();
      return view('warehouse_staff.lowstockalert',['stocks'=>$stocks]);
    }

    public function stockReport(){
      $activities = Activitylog::all();
      return view('warehouse_staff.stockreport',['activities'=>$activities]);
    }
}
