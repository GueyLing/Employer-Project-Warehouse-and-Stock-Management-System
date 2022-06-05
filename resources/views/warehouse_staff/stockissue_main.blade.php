@extends('layouts.app')
<link href="/css/main.css" rel="stylesheet">

@section('content')
@extends('layouts.warehousebase')
<div class="main_content">
    <div class="header"> 
    <div class="mycontent">
    <br>
    <h2>Stock Issue</h2>
    <br>
    <a href="{{ action('App\Http\Controllers\WarehouseStaff\DashboardController@addStockIssue') }}"><button type="button" class="btn btn-secondary">Add New</button></a>
    <br><br>
    <table id="staff" class="table table-striped table-bordered">
        <tr>
          <th>Date Added / Invoice Prefix</th>
          <th>Customer</th>
          <th>Product Name / Code / Category</th>
          <th>Location / Batch Date</th>
          <th>Quantity</th>
          <th>Stock Movement</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
        <tr>
          <td>SI-BM0000001</td>
          <td>Maria Anders</td>
          <td>Cordyceps[DCC01]</td>
          <td>Zheng Qiang Herbal Remedies Sdn Bhd(Warehouse BM)</td>
          <td>3.00 kg</td>
          <td>45.00 kg -> 42.00 kg</td>
          <td>Completed</td>
          <td><a href="#"><button type="button" class="btn btn-primary btn-icon fas fa-eye"></button></a></td>
        </tr>
        <tr>
          <td>SI-BM0000002</td>
          <td>Helen Bennett</td>
          <td>Cordyceps[DCC02]</td>
          <td>Zheng Qiang Herbal Remedies Sdn Bhd(Warehouse BM)</td>
          <td>5.00 kg</td>
          <td>30.00 kg -> 25.00 kg</td>
          <td>Completed</td>
          <td><a href="#"><button type="button" class="btn btn-primary btn-icon fas fa-eye"></button></a></td>
        </tr>
        <tr>
          <td>SI-BM0000003</td>
          <td>Yoshi Tannamuri</td>
          <td>Cordyceps[SCC02]</td>
          <td>Zheng Qiang Herbal Remedies Sdn Bhd(Warehouse BM)</td>
          <td>50.00 kg</td>
          <td>70.00 kg -> 20.00 kg</td>
          <td>Completed</td>
          <td><a href="#"><button type="button" class="btn btn-primary btn-icon fas fa-eye"></button></a></td>
        </tr>
      </table>
    </div>
</div>
</div>
@endsection

