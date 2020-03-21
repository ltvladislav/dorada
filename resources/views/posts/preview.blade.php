
@php
    $title = setting('posts.preview-title-' . LaravelLocalization::getCurrentLocale());
    if (empty($title)) {
        $title = setting('posts.preview-title');
    }
@endphp

<div class="news-container">
    <p class="block-title left">{{ $title }}</p>
    <div class="news-wrap">

        @include('posts.includes.card-collection', ['posts' => App\Models\Posts\Post::getPostsForMainPage()])
    </div>

    <a href="{{ url('posts') }}" class="more">Переглянути всі новини</a>

</div>


