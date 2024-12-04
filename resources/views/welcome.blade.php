<head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="home">Home</a>
        <a class="nav-link active" aria-current="page" href="list">List</a>
        <a class="nav-link" href="registerlist">RegisterList</a>  
        <a class="nav-link" href="add">Add</a>
        <a class="nav-link" href="register">Register</a>
        <a class="nav-link" href="login">Login</a>
  


         <!-- @if(Session::get('user'))
          <a class="nav-item nav-link" href="#">Welcome,{{Session::get('user')}}</a>
         
         @else
         <a class="nav-item nav-link" href="#">Login</a>
         <a class="nav-item nav-link" href="register">Register</a>
          @endif  -->

        
      </div>
    </div>
  </div>
</nav>

</header>
@yield('content')
