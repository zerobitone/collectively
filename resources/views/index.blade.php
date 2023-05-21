@extends('layouts.base')
@section('title', 'Homepage')
@section('content')
    <div class="container">
        <h1>Welcome to Collectively</h1>
        <form method="POST" action="{{route('index',[],false)}}">
            @csrf
            <div class="mb-3">
                <label for="inputUsername" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" id="inputUsername" placeholder="zerobit">
            </div>
            <div class="mb-3">
                <label for="inputEmail" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="inputEmail" placeholder="pst@zerobit.one">
            </div>
            <div class="mb-3">
                <label for="INPUTsUBTITLE" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="pst@zerobit.one">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
        </form>
    </div>
@endsection
