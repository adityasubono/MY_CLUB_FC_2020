@extends('layouts/main')

@section('title', 'Country')

@section('container-fluid')

<!-- Hero Section Begin -->
@include('country.hero.hero_country')
<!-- Hero Section End -->

<!-- Info Club News Section Begin -->
@include('country.info_country.country')
<!-- Info Club Section End -->


@endsection
