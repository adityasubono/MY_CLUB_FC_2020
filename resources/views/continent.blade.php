@extends('layouts/main')

@section('title', 'Continent')

@section('container-fluid')


<!-- Hero Section Begin -->
@include('continent.hero_continent.hero_continent')
<!-- Hero Section End -->

<!-- Info Club News Section Begin -->
@include('continent.info_continent.continent')
<!-- Info Club Section End -->


@endsection
