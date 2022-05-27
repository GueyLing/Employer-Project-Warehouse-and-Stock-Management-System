@extends('layouts.app')
<link href="/css/main.css" rel="stylesheet">

@section('content')
@extends('layouts.purchasingbase')
<div class="main_content">
    <div class="header"> 
    <div class="mycontent">
    <br>        
        
    <h2>Stock Summary</h2>
    <br>
    <table id="staff" class="table table-striped table-bordered">
        <tr>
            <th>Product Code</th>
            <th>Product Name</th>
            <th>Location</th>
            <th>Quantity</th>
        </tr>
        @foreach ($stocks as $key => $item)
        <tr style="vertical-align: middle;">
            <td >{{ $item->code }}</td>
            <td>{{ $item->product_name }}</td>
            <td>{{ $item->location }}</td>
            <td>{{ $item->quantity }}</td>
        </tr>
        @endforeach
    </table>  
    </div>
</div>
</div>
@endsection