@extends('layouts/main')

@section('title', 'Schedule')

@section('container-fluid')

<!-- Hero Section Begin -->
@include('schedule.hero.hero_schedule')
<!-- Hero Section End -->

<!-- Info Club News Section Begin -->
@include('schedule.info_schedule.info_schedule')
<!-- Info Club Section End -->


@endsection
