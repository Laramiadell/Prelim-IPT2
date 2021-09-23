@extends('base')
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="font-weight: bold;">Online Book Club</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/home')}}">Home</a>
                </li>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/profile')}}">User Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/login')}}">Logout</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
@section('content')
<br><br>
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-3">
                <div class="card-header bg-primary text-black">
                    <h1>Welcome to Online Book Club</h1>
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p>“The more that you read, the more things you will know. The more that you learn, the more places you’ll go.”</p>
                        <footer class="blockquote-footer"> Dr.  Seus</footer>
                    </blockquote>
                </div>      
            </div>            
        </div>
    </div>
@endsection