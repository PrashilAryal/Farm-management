@extends('layout.main')

@section('content')
<h2 class="pageHead">Add animal data</h2>
<div id="addForm" class="d-flex justify-content-center">

    <form action="{{route('addRecord')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Type</label>
            <input type="text" class="form-control" name="type" placeholder="Enter type..." id="exampleInputEmail1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Quantity</label>
            <input type="text" class="form-control" name="quantity" placeholder="Enter quantity..."
                id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Price</label>
            <input type="text" class="form-control" name="price" placeholder="Enter price(per kg)..."
                id="exampleInputPassword1">
        </div>
        <div class="buttonContainer">
            <button type="submit" class="button">Add Record</button>
        </div>
    </form>
</div>
@endsection