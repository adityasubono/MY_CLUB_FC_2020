@extends('layouts/main')

@section('title', 'Result')

@section('container-fluid')

<!-- Hero Section Begin -->
@include('result.hero.hero_result')
<!-- Hero Section End -->

<!-- Info Club News Section Begin -->
@include('result.info_result.info_result')
<!-- Info Club Section End -->


@endsection
