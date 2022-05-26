@extends('layouts.app')
<link href="/css/main.css" rel="stylesheet">

@section('content')
@extends('layouts.warehousebase')
<div class="main_content">
    <div class="header"> 
    <div class="mycontent">
        <br>        
        <h2>Add New Stock Take</h2>
        <br>
        <label for="description">Location:</label>
        {{ $stocks[0]->location }}<br>
        <label for="doc_no">Doc No:</label>
        {{ $stocks[0]->doc_no }}<br>
        <label for="doc_date">Doc Date:</label>
        {{ $stocks[0]->doc_date }}<br>
        <label for="description">Description:</label>
        {{ $stocks[0]->description }}<br>
    <br>
        <table id="staff" class="table table-striped table-bordered">
            <tr>
                <th>Product Name</th>
                <th>Code</th>
                <th>Quantity Available</th>
                <th>New Quantity on hand</th>
                <th>Quantity Adjusted</th>
                <th>Remark</th>
            </tr>
            @foreach ($stocks as $key => $item)
            <tr style="vertical-align: middle;">
                <td ><input type="text" class="form-control" name="product_name[]" value="{{ $item->product_name }}" readonly></td>
                <td ><input type="text" class="form-control" name="code[]" value="{{ $item->code }}" readonly></td>
                <td ><input type="text" class="form-control" name="quantity_available[]" value="{{ $item->quantity_available }}" readonly></td>
                <td><input type="text" class="form-control" name="new_quantity[]" value="{{ $item->new_quantity }}" readonly></td>
                <td><input type="text" class="form-control" name="quantity_adjusted[]" value="{{ $item->quantity_adjusted }}" readonly></td>
                <td><input type="text" class="form-control" name="remark[]" value="{{ $item->remark }}" readonly></td>
            </tr>
            @endforeach
        </table>  
        <a role="button" href="{{ action('App\Http\Controllers\WarehouseStaff\DashboardController@stockTake') }}" class="btn btn-secondary">Back</a>
    </div>
</div>
</div>
@endsection

