@extends('layout.main')

@section('content')
<h1 class="pageHead">Edit Record!</h1>
<div class="d-flex justify-content-center">

    <form action="{{route('updateRecord')}}" method="post">
        @csrf
        <div class="input-group">
            <input type="text" name="type" class="form-control" value="{{$data->type}}">
            <input type="text" name="quantity" class="form-control" value="{{$data->quantity}}">
            <!-- <input type="text" name="manuDate" class="form-control" value="{{$data->manuDate}}"> -->
            <input type="text" name="price" class="form-control" value="{{$data->price}}">
            <!-- <input type="text" name="remarks" class="form-control" value="{{$data->remarks}}"> -->
            <input type="hidden" name="id" value="{{$data->id}}">
            <div class="input-group-append" style="margin-left: 5px;">
                <button type="submit" class="button">Update</button>
            </div>
        </div>
    </form>
</div>
@endsection