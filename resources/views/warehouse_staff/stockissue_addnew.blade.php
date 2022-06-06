@extends('layouts.app')
<link href="/css/main.css" rel="stylesheet">

@section('content')
@extends('layouts.warehousebase')
<div class="main_content">
    <div class="header"> 
    <div class="mycontent">
    <br>
    <h2>Add Stock Issue</h2>
    <br>
    <div class="container1">
        <form action="/action_page.php">
          <div class="row">
            <div class="col-25">
              <label for="invoice-prefix">Invoice Prefix</label>
            </div>
            <div class="col-75">
              <input type="text" class="form-control" id="invoice-prefix" name="Invoice Prefix" placeholder="Invoice Prefix">
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="date">Date</label>
            </div>
            <div class="col-75">
              <input type="text" class="form-control" id="date" name="date" placeholder="Date">
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="customer">Customer</label>
            </div>
            <div class="col-75">
              <input type="text" class="form-control" id="customer" name="customer" placeholder="Customer">
            </div>
          </div>
</div>
<br>
<table id="staff" class="table table-striped table-bordered">
    <tbody>
    <tr>
      <th>Code</th>
      <th>Name</th>
      <th>Qty/UOM</th>
      <th>Location</th>
      <th>Description</th>
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
 
      <td><input type="button" id="delPOIbutton" class="button button7" value="-" onclick="deleteRow(this)" />
      <input type="button" class="button button8" id="addmorePOIbutton" style="float:right;" value="+" onclick="insRow()" /></td>
    </tr>
  </tbody>
  </table>
  <a><button type="submit" class="btn btn-success">Confirm</button></a>
  <a role="button" href="{{ action('App\Http\Controllers\WarehouseStaff\DashboardController@stockIssue') }}" class="btn btn-secondary">Back</a>
</form>
</div>
<br><br>
<style>
    .container1 {
      border-radius: 5px;
      background-color: #f2f2f2;
      padding: 20px;
      margin-right: 50px;
    }
    
    .col-25 {
      float: left;
      width: 25%;
      margin-top: 6px;
    }
    
    .col-75 {
      float: left;
      width: 75%;
      margin-top: 6px;
    }

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
    <script>
        function deleteRow(row) {
    var x=document.getElementById('staff');
     var len = x.rows.length;
     if(len>2){
       var i=row.parentNode.parentNode.rowIndex;
       document.getElementById('staff').deleteRow(i);
     }
     else{
       alert("Can't delete the first row");
     }
}
      
      function insRow() {
        console.log('hi');
        var x = document.getElementById('staff').getElementsByTagName('tbody')[0];
        var new_row = x.rows[1].cloneNode(true);
        var len = x.rows.length;
        var inp = new_row.cells[0].getElementsByTagName('input')[0];
        inp.id += len;
        inp.value = '';
        var inp1 = new_row.cells[1].getElementsByTagName('input')[0];
        inp1.id += len;
        inp1.value = '';
        var inp2 = new_row.cells[2].getElementsByTagName('input')[0];
        inp2.id += len;
        inp2.value = '';
        var inp3 = new_row.cells[4].getElementsByTagName('input')[0];
        inp3.id += len;
        inp3.value = '';
        x.appendChild(new_row);
      }</script>
</div>
</div>
@endsection

