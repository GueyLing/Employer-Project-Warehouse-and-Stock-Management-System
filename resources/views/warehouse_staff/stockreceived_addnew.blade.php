{{-- refer to takestock.blade.php --}}
@extends('layouts.app')
<link href="/css/main.css" rel="stylesheet">

@section('content')
@extends('layouts.warehousebase')
<div class="main_content">
    <div class="header"> 
    <div class="mycontent">
        <br>
        <h2>Add New Stock Received</h2>
        <br>
<form>
    <label>Doc No:</label><br>
    <input type="text" class="form-control w-75" name="docNo" placeholder="Doc No"><br>
    <label>Doc Date:</label><br>
    <input type="date" class="form-control w-75" name="docDate"><br>
    <label>Description:</label><br>
    <input type="text" class="form-control w-75" name="description" placeHolder="Description">

  <br>
  <table id="staff" class="table table-striped table-bordered">
    <tbody>
    <tr>
      <th>Code</th>
      <th>Name</th>
      <th>Qty/UOM</th>
      <th>Location</th>
      <th>Description</th>
      <th>Cost Price</th>
      <th width="8%">Action</th>
    </tr>
    <tr>
      <td><input type="text" class="form-control" placeHolder="Product Code"></td>
      <td><input type="text" class="form-control" placeHolder="Product Name"></td>
      <td><input type="number" min="0" class="form-control" placeHolder="Quantity"></td>
      <td><select name="Location" class="form-control">
        <option value="Location1">Location 1</option>
        <option value="Location2">Location 2</option>
        <option value="Location3">Location 3</option>
      </select></td>
      <td><input type="text" placeHolder="Remark" class="form-control"></td>
      <td><input type="number" min="0" placeHolder="Unit Cost" class="form-control"></td>
      <td><input type="button" id="delPOIbutton" class="button button7" value="-" onclick="deleteRow(this)" />
      <input type="button" class="button button8" id="addmorePOIbutton" style="float:right;" value="+" onclick="insRow()" /></td>
    </tr>
  </tbody>
  </table>
  <a><button type="submit" class="btn btn-success">Confirm</button></a>
  <a role="button" href="{{ action('App\Http\Controllers\WarehouseStaff\DashboardController@stockReceived') }}" class="btn btn-secondary">Back</a>
</form>
<br><br>
    </div>
</div>
<style>
    .button7 {
  background-color: red;
  color: white;
  border: none;
  width: 30px;
  height: 30px;
  border-radius: 4px;
}

.button8 {
  background-color: rgb(55, 105, 241);
  color: white;
  border: none;
  width: 30px;
  height: 30px;
  border-radius: 4px;
}
    </style>
  <script>function deleteRow(row) {
    var i = row.parentNode.parentNode.rowIndex;
    document.getElementById('staff').deleteRow(i);
  }
  
  
  function insRow() {
    console.log('hi');
    var x = document.getElementById('staff').getElementsByTagName('tbody')[0];
    var new_row = x.rows[1].cloneNode(true);
    var len = x.rows.length;
    
    x.appendChild(new_row);
  }</script>
</div>
@endsection

