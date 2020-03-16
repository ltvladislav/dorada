<header>
    <div class="logo-wrap">
        <img src="{{ asset('/image/dorad.png') }}" alt="">
    </div>
    <div class="main-header">
        @include('includes.header-socials')

        <div class="header-nav">

            @include('includes.header-navigation')

            <div class="search-btn">
                <svg><use xlink:href="#search"></use></svg>
            </div>

            @include('includes.search')

        </div>
    </div>
</header>