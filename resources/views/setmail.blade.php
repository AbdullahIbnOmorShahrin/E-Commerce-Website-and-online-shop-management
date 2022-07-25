@extends('home')
@section('content')
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="/emailsend" method="post">
              @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('email')}}" placeholder="Enter email">
                  <span >
                    @error('email'){{$message}}@enderror
                  </span>

                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Subject</label>
                  <input type="text" name="subject" class="form-control" id="exampleInputPassword1" placeholder="Subject">
                  <span >
                    @error('subject'){{$message}}@enderror
                  </span>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Details</label>
                    <input type="text" name="Details" class="form-control" id="exampleInputPassword1" placeholder="Subject">
                    <span >
                      @error('subject'){{$message}}@enderror
                    </span>
                  </div>
                <button type="submit" class="btn btn-primary">Sent Mail</button>
              </form>
        </div>
    </div>
</div>
@endsection

