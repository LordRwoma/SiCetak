@extends('layouts.dashboardadmin')

@section('title', 'Admin Login  - SiRoma')

@section('content')
  <div class="container-fluid py-3">
    <button class="back-btn ms-4">
      <span>&larr;</span> Kembali
    </button>
  </div>

  <div class="login-container container">
    <div class="row w-100 align-items-center justify-content-center">
      <!-- Robot Image -->
      <div class="col-md-6 text-center mb-4 mb-md-0">
        <div class="circle-bg">
          <img src="{{ asset('images/robot.png') }}" alt="Robot" class="robot-img">
        </div>
      </div>

      <!-- Login Card -->
      <div class="col-md-5">
        <div class="card-login">
          <div class="text-center mb-4">
            <img src="https://cdn-icons-png.flaticon.com/512/3064/3064197.png" alt="Lock" width="40">
            <h4 class="mt-3 fw-semibold text-primary">Login Admin</h4>
            <p class="text-muted mb-4">Login sebagai admin untuk mengelola toko</p>
          </div>

          <form action="dashboard.html" method="GET">
            <div class="mb-3">
              <label class="form-label text-primary small">Username</label>
              <input type="text" class="form-control rounded-4" placeholder="Masukkan username">
            </div>
            <div class="mb-4">
              <label class="form-label text-primary small">Password</label>
              <input type="password" class="form-control rounded-4" placeholder="Masukkan password">
            </div>
            <div class="text-center">
              <a href="{{ route('admin.admindashboard') }}" class="btn btn-login w-100">Login</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection