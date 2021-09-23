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
<div class="container">
    <div class="main-body">
        <div class="row gutters-sm">
            <div class="col-md-12 mb-8">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="90" height="90" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                            </svg>
                        
                        </div>
                        <?php foreach ($users as $us): ?>
                        <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Full Name</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <?= $us->name?>
                        </div>
                        </div>
                        <hr>
                        <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Birth Date</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <?= $us->bdate ?>
                        </div>
                        </div>
                        <hr>
                        <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Gender</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <?= $us->gender ?>
                        </div>
                        </div>
                        <hr>
                        <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Email</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <?= $us->email?>
                        </div>
                        </div>
                        <hr>
                        <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Phone Number</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <?= $us->phone ?>
                        </div>
                        </div>
                        <hr>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop