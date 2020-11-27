@extends('layouts.app')
@section('custom-css')
<link rel="stylesheet" href="{{asset('css/home.css')}}">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="{{asset('css/main-dashboard.css')}}">
<link rel="stylesheet" href="{{asset('css/client-details.css')}}">
@endsection
@section('content')
<div class="container" id="main-container">
  <div class="row justify-content-center align-items-center">
    <div class="card card-client">
      <div class="card-header card-header-client">
        <div class="profile_pic">
        <img src="{{asset('img/client.png')}}">
        </div>
      </div>
      <div class="card-body card-body-client">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <div class="d-flex justify-content-center flex-column">
          <div class="name_container">
            <div class="name">
              {{ucwords(strtolower($client->A_nombre . ' ' . $client->A_apellido))}}
            </div>
          </div>
          <div class="address">Kuala Lumpur, Malaysia</div>
        </div>
        <div class="follow">
          <div class="follow_btn">Follow</div>
        </div>
        <div class="info_container">
          <div class="info">
            <p>followers</p>
            <p>2.89M</p>								
          </div>
          <div class="info">
            <p>followings</p>
            <p>456</p>							
          </div>
          <div class="info">
            <p>posts</p>
            <p>3.56K</p>						
          </div>			
        </div>
      </div>
      <div class="card-footer card-footer-client">
        <div class="view_profile">
          View profile
        </div>
        <div class="message">
          Message
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('custom-js')
<script src="js/user-dashboard.js"></script>
@endsection