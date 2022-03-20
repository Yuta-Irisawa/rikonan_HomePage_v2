@extends('layout.app')
@include('layout.head')
@section('title', '青山学院大学理工軟式野球部/YouTube厳選')
@section('description', '青学りこなんの試合の様子がYouTubeにアップされております！新卒の先輩が活動時に撮っていたものです！是非ご覧ください！')
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/animation.css">
<link rel="stylesheet" href="css/movies.css">
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
<script src="js/jquery-3.5.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

@section('content')
    <h2>YouTube</h2>
    <div class="video">
        <iframe src="https://www.youtube.com/embed/FfBQdDMzM7Y" frameborder="0" allow="accelerometer;
         autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div class="video">
        <iframe src="https://www.youtube.com/embed/iqipJcNFAr4" frameborder="0" allow="accelerometer;
         autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div class="video">
        <iframe src="https://www.youtube.com/embed/0D8miCcN_OA" frameborder="0" allow="accelerometer;
         autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div class="video">
        <iframe src="https://www.youtube.com/embed/uGbcW_5RBe4" frameborder="0" allow="accelerometer;
         autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div class="video">
        <iframe src="https://www.youtube.com/embed/s3B4xUq0Dng" frameborder="0" allow="accelerometer;
         autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
@endsection
