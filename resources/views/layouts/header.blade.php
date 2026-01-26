<header class="h-[150px] flex items-center">
    <div class="container m-auto">
        <div
            class="header_wrapper flex justify-between items-center sm:flex-col md:flex-row text-secondary-500 hover:text-secondary-700 font-bold">

            <div class="header_lef_side flex items-center sm:flex-col md:flex-row md:gap-[50px] font-satoshi">

                <div class="logo">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('frontend/images/smipledarklogo.png') }}" class="mw-[60px]" alt=""
                            srcset="">
                    </a>
                </div>

                <div class="menu">
                    <ul class="flex sm:flex-col md:flex-row md:gap-[50px]">
                        <li><a href="{{ url('/projects') }}" class="menu-link">Projects</a></li>
                        <li><a href="{{ url('/services') }}" class="menu-link">Services</a></li>
                    </ul>
                </div>
            </div>

            <div class="header_right_side flex">
                <div class="menu">
                    <ul class="flex sm:flex-col md:flex-row items-center md:gap-[50px]">
                        <li><a href="{{ url('/about') }}" class="menu-link">About Us</a></li>
                        <li><a href="{{ url('/contact') }}" class="button menu-link text-white">Contact</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</header>
