
@extends('welcome')

@section('content') 

<head>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"  crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>   


    <div class="col-sm-6">
    <h1>edit  restarurant</h1>

    <form method="post" action="{{ url('update')}}">
        @csrf
        
  <div class="form-group">
    <label >Name</label>
   
    <input type="hidden" name="id"  value="{{$data->id}}"  >


    <input type="text" name="name" class="form-control" value="{{$data->name}}"  placeholder="Enter name">
  </div>
  <div class="form-group">
    <label >Email</label>
    <input type="text" name="email" class="form-control" value="{{$data->email}}"   placeholder="Enter email">
  </div>
  <div class="form-group">
    <label >Address</label>
    <input type="text" name="address" class="form-control" value="{{$data->address}}"  placeholder="Enter name">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

   
    </div>

 @stop
