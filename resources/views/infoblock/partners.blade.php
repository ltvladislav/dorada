<div class="partners-wrap">
    <p class="block-title left">Наші партнери</p>
    <div class="partners-slider">
        @for($i = 0; $i<10; $i++)
            <div class="partner-slide-wrap">
                <a href="#" class="partner-item">
                    <img src="{{asset('/image/partner1.jpg')}}" alt="">
                </a>
            </div>
        @endfor

    </div>
</div>
