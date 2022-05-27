<?php

namespace App\Http\Controllers\PurchasingStaff;

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
        $stocks = Stock::all();
        return view('purchasing_staff.dashboard', [
          'stocks' => $stocks,
      ]);
      }
      public function stockHistory(){
        $activities = Activitylog::all();
        return view('purchasing_staff.stockhistory',['activities'=>$activities]);
      }
      public function lowStockAlert(){
        $stocks = Stock::whereRaw('quantity < low_stock_alert')->get();
        return view('purchasing_staff.lowstockalert',['stocks'=>$stocks]);
      }
}
