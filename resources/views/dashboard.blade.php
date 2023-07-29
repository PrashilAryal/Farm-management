@extends('layout.main')

@section('content')
<div class="dashboard">
    @auth
    <h1 id="adminName">{{auth()->user()->name}}</h1>
    @endauth
    <h2 class="pageHead d-flex justify-content-center">Dashboard</h2>
    <!-- <form action="{{route('logout')}}">
        @csrf
        <button class="button" type="submit">Logout</button>
    </form> -->
    <div class="container text-center">
        <div class="row g-2">
            <div class="col-6">
                <div class="p-5 border">Total Animals: 10,000</div>
            </div>
            <div class="col-6">
                <div class="p-5 border">Market Growth: 10%</div>
            </div>
            <div class="col-12">
                <div class="p-5 border">Revenue: $10,000,000</div>
            </div>
            <div class="col-12">
                <div class="p-5 border">Total Profit: $1,000,000</div>
            </div>
        </div>
    </div>
</div>
@endsection