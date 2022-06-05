@extends('layouts.app')
<link href="/css/main.css" rel="stylesheet">
@section('content')
@extends('layouts.warehousebase')
<div class="main_content">
    <div class="header"> 
    <div class="mycontent">
    <br>
    <h2>Stock Adjustment</h2>
    <br>
    <a href="{{ action('App\Http\Controllers\WarehouseStaff\DashboardController@addStockAdjustment') }}"><button type="button" class="btn btn-secondary">Add New</button></a>
    <br><br>
  <table id="staff" class="table table-striped table-bordered">
    <tr>
      <th>Date Added/Invoice Prefix</th>
      <th>Product Name/Code/Category</th> 
      <th>Location/Batch Date</th>
      <th>Quantity</th>
      <th>Stock Movement</th>
      <th>Status</th>
      <th>Action</th>
    </tr>
    <tr>
      <td>SA-BM0000002</td>
      <td>虫草
        Cordyceps
        [DCC01]</td>
      <td> Zheng Qiang Herbal Remedies Sdn Bhd (Warehouse BM) </td>
      <td>42.0000 kg</td>
      <td>42.0000 kg => 0.0000 kg</td>
      <td>Completed</td>
      <td><a href="#"><button type="button" class="btn btn-primary btn-icon fas fa-eye"></button></a></td>
      </tr><tr>
    <td>SA-BM0000001</td>
    <td>虫草
      Cordyceps
      [DCC01]</td>
    <td> Zheng Qiang Herbal Remedies Sdn Bhd (Warehouse BM) </td>
    <td>15.0000 kg</td>
    <td>30.0000 kg => 45.0000 kg</td>
    <td>Completed</td>
    <td><a href="#"><button type="button" class="btn btn-primary btn-icon fas fa-eye"></button></a></td>
  </tr>
  </table>
  <br>
</div>
</div>
</div>
@endsection