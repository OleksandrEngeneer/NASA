@extends('layouts.master')

@section('content')
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="padding: 50px; width: 900px; height: 850px;">
    <p>List of Curiosity's head camera</p>
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" >
        <img src="{{$marsroverphoto[0]['img_src']}}" class="d-block w-100" alt="Rover photo" id="image">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true" id="leftImg"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true" id="rightImg"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="card" style="width: 800px; margin: 50px;">
    <img src="{{$bestphoto[0]['url']}}" class="card-img-top" alt="Best photo per day">
    <div class="card-body">
      <p class="card-text">
        {{$bestphoto[0]['explanation']}} 
        Discover the cosmos! Each day a different image or photograph of our fascinating universe is featured, along with a brief explanation written by a professional astronomer.</p>
    </div>
  </div>
  <div class="card" style="width: 800px; margin: 50px;">
    <img src="{{$epicphoto[0]['picture']}}" class="card-img-top" alt="{{$epicphoto[0]['caption']}}">
    <div class="card-body">
      <p class="card-text">
        The EPIC API provides information on the daily imagery collected by DSCOVR's Earth Polychromatic Imaging Camera (EPIC) instrument. 
        {{$epicphoto[0]['caption']}}
      </p>
    </div>
  </div>
  <script>
    var listOfImg = @json($marsroverphoto, JSON_PRETTY_PRINT);
    </script>
@endsection   