
<div class="news-container">
    <p class="block-title left">{{ setting('posts.preview-title') }}</p>
    <div class="news-wrap">

        @include('posts.includes.card-collection', ['posts' => App\Models\Posts\Post::getPostsForMainPage()])
    </div>

    <a href="{{ url('posts') }}" class="more">Переглянути всі новини</a>

</div>


