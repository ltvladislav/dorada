@extends('layouts.app')

@section('title', 'Posts')

@section('content-title', 'Posts')

@section('content')

    <div class="container-main">
        <h1>Новини</h1>

        <div class="news-category">
            <div class="category-list">
                <a class="category-item"
                   data-category-id="0"
                   data-category-slug="">
                    Всі
                </a>

                @foreach($categories as $category)
                    <a class="category-item"
                       data-category-id="{{ $category->id }}"
                       data-category-slug="{{ $category->slug }}">
                        {{$category->name }}
                    </a>
                @endforeach
            </div>

            <div class="shown">

            </div>
        </div>

        <div class="news-wrapper" data-paginate="posts">
            @include('posts.includes.card-collection', ['posts' => $posts])
        </div>
        @include('includes.pagination')
    </div>

@endsection
