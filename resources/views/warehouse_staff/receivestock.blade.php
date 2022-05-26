<style>
#stockreceived {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#stockreceived td, #stockreceived th {
  border: 1px solid #ddd;
  padding: 8px;
}

#stockreceived tr:nth-child(even){background-color: #f2f2f2;}

#stockreceived tr:hover {background-color: #ddd;}

#stockreceived th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>

@extends('layouts.app')
<link href="/css/main.css" rel="stylesheet">
@section('content')
@extends('layouts.base')
<div class="main_content">
    <div class="header"> 
    <div class="mycontent">
    <br>
    <h2>Purchasing Staff</h2>
    <br>
    <h1>Stock Received</h1>
    <table id="stockreceived">
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
        <td>SRC-BM0000001<br><small>13/05/2022</small></td>
        <td>Maria Anders</td>
        <td>Germany</td>
      </tr>
      <tr>
        <td>Berglunds snabbköp</td>
        <td>Christina Berglund</td>
        <td>Sweden</td>
      </tr>
      <tr>
        <td>Centro comercial Moctezuma</td>
        <td>Francisco Chang</td>
        <td>Mexico</td>
      </tr>
      <tr>
        <td>Ernst Handel</td>
        <td>Roland Mendel</td>
        <td>Austria</td>
      </tr>
      <tr>
        <td>Island Trading</td>
        <td>Helen Bennett</td>
        <td>UK</td>
      </tr>
      <tr>
        <td>Königlich Essen</td>
        <td>Philip Cramer</td>
        <td>Germany</td>
      </tr>
      <tr>
        <td>Laughing Bacchus Winecellars</td>
        <td>Yoshi Tannamuri</td>
        <td>Canada</td>
      </tr>
    </table>
    </div>
</div>
</div>
@endsection