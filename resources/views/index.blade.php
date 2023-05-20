@extends('layouts.base')
@section('title', 'Homepage')
@section('content')
    <div class="container">
        <h1>Welcome to Collectively</h1>
        <div class="mb-3">
            <label for="inputCustomers" class="form-label">Email address</label>
            <input type="text" class="form-control" id="inputCustomers" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="inputEmail" class="form-label">Email address</label>
            <input type="email" class="form-control" id="inputEmail" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
    </div>
@endsection
