<header>
    <div class="container">
        <a class="logo" href="#"><img src="{{asset('front/images/logo-white.png')}}" alt="Logo"></a>
        <div class="right-area">
            <a href="{{ route('cart') }}" class="btn btn-default btn-md">Keranjang</a>
            @if (Cart::instance('default')->count() > 0 )
                <span class="header-icons-noti">({{ Cart::instance('default')->count() }})</span>
            @endif
              
                {{-- @if (Cart::instance('default')->count() > 0 )
                    <span class="label label-warning">({{ Cart::instance('default')->count() }})</span>
                @endif --}}
                        {{-- <span class="label label-warning">0</span> --}}
        </div><!-- right-area -->
        <a class="menu-nav-icon" data-menu="#main-menu" href="#"><i class="ion-navicon"></i></a>
        <ul class="main-menu font-mountainsre" id="main-menu">
                <li><a href="{{ ('/') }}">HOME</a></li>
                <li><a href="03_menu.html">PRODUCTS</a></li>
                <li><a href="04_blog.html">NEWS</a></li>    
                <li><a href="05_contact.html">CONTACT</a></li>
                <li><a href="{{ ('login') }}">LOGIN</a></li>
        </ul>
    </div><!-- container -->
</header>