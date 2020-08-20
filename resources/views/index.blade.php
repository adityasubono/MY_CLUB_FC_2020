@extends('layouts/main')

@section('title', 'Home')

@section('container-fluid')

<!-- Hero Section Begin -->
@include('home.hero.hero_home')
<!-- Hero Section End -->

<!-- Trending News Section Begin -->
@include('home.trending.trending_home')
<!-- Trending News Section End -->

<!-- Match Section Begin -->
@include('home.macth.macth_home')
<!-- Match Section End -->

<!-- Soccer Section Begin -->
@include('home.soccer_feed.soccer_feed')
<!-- Soccer Section End -->

<!-- Latest Section Begin -->
@include('home.latest_news.home_latest_news')
<!-- Latest Section End -->

<!-- Video Section Begin -->
@include('home.video.home_video')
<!-- Video Section End -->

<!-- Popular News Section Begin -->
@include('home.populer_news.home_populer_news')
<!-- Popular News Section End -->



@endsection
