
<div class="news-card">
    <div class="news-image">
        <img src="{{ $post->getImage(true) }}" alt="">
    </div>
    <div class="new-card-content">
        <div class="new-additional-info">
            <div class="new-additional-item">
                <div class="news-info-icon">
                    <img src="{{ asset('/image/calendar.svg') }}" alt="">
                </div>
                <p>{{ $post->created_at->format('d.m.y') }}</p>
            </div>
        </div>
        <p class="new-name">{{ $post->getTranslatedAttribute('title') }}</p>

        <p class="new-description">{!! $post->getTranslatedAttribute('excerpt') !!}</p>
        <a href="{{ route('post', $post->slug) }}" class="more">Детальніше</a>
    </div>
</div>
