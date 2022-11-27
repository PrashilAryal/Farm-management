@extends('layout.main')

@section('content')
<h1 class="pageHead">Animals</h1>
<div class="pt-5 mx-auto" style="width: 50%;">
    <table class="table table-striped table-hover">
        <tr>
            <th>Type</th>
            <th>Quantity</th>
            <th>Price (per KG)</th>
            <th>Action</th>
        </tr>
        @foreach($FarmList as $value)
        <tr class="tableData">
            <td>{{$value->type}}</td>
            <td>{{$value->quantity}}</td>
            <td>{{$value->price}}</td>
            <td>
                <a href="{{url('/edit/'.$value->id)}}"
                    style="color: green; border: 1px solid green; padding: 5px;;">Edit</a>
                <a href="{{url('/delete/'.$value->id)}}"
                    style="color: red; border: 1px solid red; padding: 5px;">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection