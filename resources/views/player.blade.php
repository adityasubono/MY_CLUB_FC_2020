@extends('layouts/main')

@section('title', 'Club')

@section('container-fluid')

    <!-- Hero Section Begin -->
    @include('player.hero.hero_player')
    <!-- Hero Section End -->

    <!-- Info Club News Section Begin -->
    @include('player.create_player.create_player')
    <!-- Info Club Section End -->


@endsection
