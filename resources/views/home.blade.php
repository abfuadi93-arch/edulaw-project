@extends('layouts.app')

@section('title', 'Edulaw Project')

@section('content')
    <x-home.hero :slides="$heroSlides" />

    <x-home.programs />

    <x-home.insights />

    <x-home.publications />

    <x-home.multimedia />

    <x-home.cta />
@endsection
