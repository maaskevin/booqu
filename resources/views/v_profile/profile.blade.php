@extends('v_layout.layout')

@section('title', 'Profile')
@section('css')
<link rel="stylesheet" href="{{ asset('css/v_profile/style.css') }}">
@section('content')
<di<div class="profile-container">
  <!-- Wallet Header -->
  <div class="wallet-bar-inside">
    <div class="wallet-left">
      <h2>My Wallet <i class="fas fa-wallet icon-muted"></i></h2>
      <div class="wallet-balance">
        IDR 1000.000 <i class="fas fa-eye-slash toggle-visibility"></i>
      </div>
    </div>
    <button class="topup-button"><i class="fas fa-plus"></i> Topup</button>
  </div>

  <!-- Profile Sidebar -->
  <div class="profile-sidebar">
    <h2>My Profile</h2>
    <div class="profile-img">
      <img src="https://via.placeholder.com/100" alt="Profile Photo">
    </div>
    <h3>John Doe</h3>
    <p class="email">johndoe@gmail.com</p>
    <button class="edit-button">Saldo</button>
  </div>

  <!-- Profile Form -->
  <div class="profile-form">
    <h2>Update Profile</h2>
    <p class="desc">Make sure your details are always correct and complete</p>
    <form>
      <label>Username</label>
      <input type="text" placeholder="New username" />

      <label>Email</label>
      <input type="email" placeholder="New email" />

      <div class="password-row">
        <div>
          <label>Password</label>
          <input type="password" placeholder="New password" />
        </div>
        <div>
          <label>Confirm Password</label>
          <input type="password" placeholder="Confirm New password" />
        </div>
      </div>

      <button class="edit-button form-button">Edit Profile</button>
    </form>
  </div>
</div>

@endsection
