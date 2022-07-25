@extends('home')
@section('content')

<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="register" method="POST">
              @csrf
              <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter User Name">
                @error('name')
                <span>{{$message}}</span>
                @enderror
                <br>
            </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                  @error('email')
                  <span>{{$message}}</span>
                  @enderror
                  <br>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  @error('password')
                  <span>{{$message}}</span>
                  @enderror
                  <br>
                </div>
                <button type="submit" class="btn btn-primary">Registration</button>
              </form>
        </div>
    </div>
</div>
@endsection
