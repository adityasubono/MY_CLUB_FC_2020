@extends('layouts/main')

@section('title', 'Club')

@section('container-fluid')

<!-- Hero Section Begin -->
@include('club.hero.hero_club')
<!-- Hero Section End -->

<!-- Info Club News Section Begin -->
@include('club.create_club.create_club')
<!-- Info Club Section End -->


@endsection
