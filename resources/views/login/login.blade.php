@extends('login.main')
@section('login')
<div class="container">
    <div class="row">
      <div class="col-md-6">
        <img src="{{asset('assets/fe/images/undraw_remotely_2j6y.svg')}}" alt="Image" class="img-fluid">
      </div>
      <div class="col-md-6 contents">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="mb-4">
            <h3>Sign In</h3>
            <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p>
          </div>
          <form action="#" method="post">
            <div class="form-group first">
              <label for="username">Username</label>
              <input type="text" class="form-control" id="username">

            </div>
            <div class="form-group last mb-4">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password">
              
            </div>
            
            <div class="d-flex mb-5 align-items-center">
              <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                <input type="checkbox" checked="checked"/>
                <div class="control__indicator"></div>
              </label>
              <span class="ml-auto"><a href="/register" class="forgot-pass">Daftar Akun Disini!</a></span> 
            </div>
            <input type="submit" value="Log In" class="btn btn-block btn-primary">
          </form>
          </div>
        </div>
        
      </div>
      
    </div>
  </div>
@endsection