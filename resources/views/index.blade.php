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

    @include('slider.main-slider')

    @include('infoblock.about')

    @include('infoblock.services')

    @include('infoblock.partners')

    @include('infoblock.services2')

    @include('posts.preview')


@stop

@section('after_content')
@stop

@section('before_scripts')
@stop

@push('scripts')
@endpush
