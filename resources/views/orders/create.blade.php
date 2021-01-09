@extends('layouts.global')

@section('title')

@endsection

@section('content')
@if(session('status'))
<div class="alert alert-success">
    {{session('status')}}
</div>
@endif
<div class="row">
    <div class="col-md-8">
        <form action="{{route('orders.store')}}" method="POST" enctype="multipart/form-data"
            class="shadow-sm p-3 bg-white">
            @csrf
            <label for="total_price">Total Price</label> <br>
            <input type="number" class="form-control" name="total_price" placeholder="Total Price" min=0>
            <br>
            <label for="invoice_number">Invoice Number</label>
            <input type="text" class="form-control" name="invoice_number" placeholder="Invoice Number">
            <br>

            <button class="btn btn-primary" value="Save">Save</button>
        </form>
    </div>
</div>
@endsection