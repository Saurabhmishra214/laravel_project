
@extends('welcome')

@section('content')



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa; /* Light background for the page */
        }
        .registration-form {
            max-width: 400px;
            margin: auto;
            padding: 20px;
            background-color: white; /* White background for the form */
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Soft shadow effect */
        }
    </style>
</head>
<body>

<marquee  class="text-secondary"  class="bg-dark"  scrollamount="18"  behavior="alternate"  scrolldelay="100"  ><h2>This is Add page </h2></marquee>

    <div class="registration-form">
        <h2 class="text-center">Register</h2>
        <form method="post" action="Register">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name"  value="{{ old('name') }}" placeholder="Enter your name" >
                <div class="invalid-feedback">Please enter your name.</div>
                @if($errors->has('name'))
                  <div class="text-danger" class="error">{{ $errors->first('name') }}</div>
              @endif
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="Enter your email" >
                <div class="invalid-feedback">Please enter a valid email address.</div>
                @if($errors->has('email'))
               <div class="text-danger" class="error">{{ $errors->first('email') }}</div>
                 @endif
            </div>
           
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" value="{{ old('password') }}" placeholder="Create a password" >
                <div class="invalid-feedback">Please enter a password.</div>
                @if($errors->has('password'))
               <div class="text-danger" class="error">{{ $errors->first('password') }}</div>
                 @endif
            </div>
            <div class="mb-3">
                <label for="confirmPassword" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="confirmPassword" name="password_confirmation" value="{{ old('password') }}" placeholder="Confirm your password" >
                <div class="invalid-feedback">Please confirm your password.</div>
                  @if($errors->has('password'))
               <div class="text-danger" class="error">{{ $errors->first('password') }}</div>
                 @endif
            </div>
            <button type="submit" class="btn btn-primary w-100">Register</button>
        </form>
        <p class="text-center mt-3">
            Already have an account? <a href="#">Login here</a>
        </p>
    </div>


</body>

 @stop
