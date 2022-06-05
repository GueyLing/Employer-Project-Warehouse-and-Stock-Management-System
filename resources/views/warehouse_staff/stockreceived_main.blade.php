{{-- refer to takestock.blade.php --}}
@extends('layouts.app')
<link href="/css/main.css" rel="stylesheet">

@section('content')
@extends('layouts.warehousebase')
<div class="main_content">
    <div class="header"> 
    <div class="mycontent">
        <br>
        <h2>Stock Received</h2>
        <br>
        <a href="{{ action('App\Http\Controllers\WarehouseStaff\DashboardController@addNewStockReceived') }}"><button type="button" class="btn btn-secondary">Add New</button></a>
        <br><br>
        
        <table id="staff" class="table table-striped table-bordered">
          <tr>
            <th>Create Date / Doc No</th>
            <th>Product Name / Code / Category</th>
            <th>Location / Batch Date</th>
            <th>Quantity / UOM </th>
            <th>Stock Movement</th>
            <th>Status / Remark</th>
            <th>Action</th>
          </tr>
          <tr>
            <td>SRC-BM0000001<br><small><font color="#808080">13/05/2022</font></small><br><small><font color="#808080">Add by: INTI WAREHOUSE SYSTEM</font></small></td>
            <td>虫草<br>Cordyceps<br>[DCC01]<br><small><font color="#808080">Category: CHINESE HERBS</font></small></td>
            <td>Default Location<br><small><font color="#808080">Batch Date: 0000-00-00</font></small></td>
            <td>30.0000 kg</td>
            <td>0.0000 kg => 30.0000 kg</td>
            <td><span class="badge bg-success">Completed</span>
            <br><small><font color="#808080">Remark: Batch 20220513</font></small>
            <br><small><font color="#808080">Last Modified: 13/05/2022 09:22AM</font></small>
            <br><small><font color="#808080">Modify By: INTI WAREHOUSE SYSTEM</font></small></td>
            <td><a href="#"><button type="button" class="btn btn-primary btn-icon fas fa-eye"></button></a></td>
          </tr>
        </table>
    </div>
</div>
</div>
@endsection

