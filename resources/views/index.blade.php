@extends('layouts.app')

@section('title', setting('site.title'))

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


@stop

@section('after_content')
@stop

@section('before_scripts')
@stop

@push('scripts')
@endpush
