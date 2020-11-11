@extends('layouts/main')

@section('title', 'Club')

@section('container-fluid')

    <!-- Hero Section Begin -->
    @include('match_info.hero.hero_match')
    <!-- Hero Section End -->

    <!-- Info Club News Section Begin -->
    @include('match_info.create_match.create_match')
    <!-- Info Club Section End -->


@endsection
