@extends('layout.auth')
@section('content')
<div class="container">
<div class="row">
    <div class="col-sm"><h1>Dashboard</h1></div>
    </div>
    <div class="row">
        <div class="col-sm">
    <div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Well done!</h4>
  <p>You Successfully Logged in...</p>
  <hr>
  <p class="mb-0">Thank you...</p>
</div>
</div> 
</div>
<div class="row">
    <div class="col-sm">
        <h6>Follow On</h6>
        <ul>
            <li><a href="https://github.com/vinobe21"><i class="fa fa-github-square" aria-hidden="true"></i></i> Github</a></li>
            <li><a href="https://twitter.com/VinothK95277500"><i class="fa fa-twitter-square" aria-hidden="true"></i> Twitter</a></li>
            <li><a href="https://codepen.io/vinobe21"><i class="fa fa-codepen" aria-hidden="true"></i> Codepen</a></li>
            <li><a href="https://www.instagram.com/vinoth_be/"><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</a></li>
        </ul>
    </div>
</div>
<div class="row">
    <div class="col-sm">
        <h6>Useful Links</h6>
        <ul>
            <li><a href="https://github.com/vinobe21/Laravel-E-commerce-">Laravel E-commerce website</a></li>
            <li><a href="https://github.com/vinobe21/HTML-CSS-ecommerce-layout">HTML-CSS-ecommerce layout</a></li>
            
        </ul>
    </div>
</div>
<div class="row">
    <div class="col-sm">
        <a type="button" class="btn btn-danger" href="{{route('Auth.logout')}}">logout</a></div>

</div>
</div>
@endsection