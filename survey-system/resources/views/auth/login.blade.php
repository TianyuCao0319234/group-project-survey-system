
@extends('layouts.app')
@section('content')
<!-- <!doctype html> -->

<!-- <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.1/assets/img/favicons/favicon.ico">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="new.css">
    
    

    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    
    <link href="signin.css" rel="stylesheet"> -->
  <!-- </head> -->

   <body class="text-center"> 
    <form class="form-signin">
      
        <img class="mb-4" src="Vector.svg" alt="" width="150" height="150" >
      <h1 class="h3 mb-3 font-weight-normal">User Login </h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2021-2022
      </p>
     

   
   
    </form>
</body>
    @endsection


