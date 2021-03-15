@extends('template/layout')

@section('title','contact')

@section('content')
<div class="container mt-5">
    <div class="row">
      <div class="col-lg-12 mt-5">
        <div class="container content text-center">
            <h1 >Get More Info</h1><br>
            <i class="far fa-envelope">  : samantelkom@gmail.com</i><br>
            <i class="fab fa-instagram"> : @samantelkom</i>
            </div>

    <center><br>
    <div class="card">
    <div class="card-body">
    <form>
    <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Bantuan</label><br>
            <textarea name="bantuan" id="bantuan" cols="100" rows="10"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    </div>
    </center>
    
    </div>
    </div>
    </div>
        
@endsection