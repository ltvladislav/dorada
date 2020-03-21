@extends('layouts.app')

@php
    $title = setting('site.title-' . LaravelLocalization::getCurrentLocale());
    if (empty($title)) {
        $title = setting('site.title');
    }
@endphp

@section('title', $title)

@section('description', '')
@section('body_class', 'home-page')
@section('wrapper_class', '')


@section('before_content')
@stop

@section('content')

    [infoblock code="slajder-golovna"]

    [infoblock code="opis-golovna"]

    @include('infoblock.services')

    [infoblock code="nashi-partneri-golovna"]

    [infoblock code="servisi-golovna"]

    @include('posts.preview')

    [infoblock code="korisni-posilannya-golovna"]

@stop

@section('after_content')
@stop

@section('before_scripts')
@stop

@push('scripts')
@endpush
