
@extends('welcome')

@section('content') 

   
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"  crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

    <div>
    <h1>user login page</h1>

    <form method="post" action="login">
        @csrf
  
  <div class="form-group"  >
    <label  >Email</label>
    <input type="text"  name="email" class="form-control" value="{{old('email')}}"   placeholder="Enter email">
    @if($errors->has('email'))
               <div class="text-danger" class="error">{{ $errors->first('email') }}</div>
                 @endif
  </div>
  <div class="form-group">
    <label >Password</label>
    <input type="password" name="password" class="form-control" value="{{old('password')}}"  placeholder="Enter password">
    @if($errors->has('password'))
               <div class="text-danger" class="error">{{ $errors->first('password') }}</div>
                 @endif
  </div>
 

  <button type="submit" class="btn btn-primary">Submit</button>
</form>


    </div> 



  


 @stop