@php
    $isDarkPage = request()->routeIs("projects") || request()->routeIs("about");
@endphp
<footer class="relative {{ $isDarkPage ? 'bg-secondary-500 text-secondary-50' : 'bg-white text-secondary-500' }}">

    <img src="{{ asset('frontend/images/Layer_1.svg') }}" class="absolute top-0 left-0 z-10" />
    <div class="container-fluid py-[100px]">
        <div class="container mx-auto">
            <div class="footer_wrapper flex justify-end items-center">

                <div class="footer_right ">
                    <h2 class="text-h1 {{ $isDarkPage ? 'text-primary-500' : 'text-secondary-500' }}">Let`s Talk</h2>
                    <p>
                        <a href="mailto:info@smiple.com" class="{{ $isDarkPage ? 'text-secondary-50' : 'text-secondary-500' }}">info@smiple.com</a>
                    </p>
                    <p>
                        <a href="tel:+93 799 540 922"  class="{{ $isDarkPage ? 'text-secondary-50' : 'text-secondary-500' }}" >+93 799 540 922</a>
                    </p>

                    {{-- Menus and adress --}}
                    <div class="flex flex-sm-col flex-md-row justify-between mt-[85px]">
                        <ul class="flex flex-col gap-3">
                            <li><a href="#"
                                    class="border-b-[2px] border-b-secondary-500 menu-link {{ $isDarkPage ? 'text-secondary-50' : 'text-secondary-500' }}">Projects</a>
                            </li>
                            <li><a href="#"
                                    class="border-b-[2px] border-b-secondary-500 menu-link {{ $isDarkPage ? 'text-secondary-50' : 'text-secondary-500' }}">Services</a>
                            </li>
                            <li><a href="#"
                                    class="border-b-[2px] border-b-secondary-500 menu-link {{ $isDarkPage ? 'text-secondary-50' : 'text-secondary-500' }}">About
                                    Us</a></li>
                            <li><a href="#"
                                    class="border-b-[2px] border-b-secondary-500 menu-link {{ $isDarkPage ? 'text-secondary-50' : 'text-secondary-500' }}">Contact</a>
                            </li>

                        </ul>
                        <div class="addresses max-w-[300px]">
                            <h3 class="text-h4 {{ $isDarkPage ? 'text-secondary-50' : 'text-secondary-500' }} mb-5">Afghanistan</h3>
                            <p class="text-p1 {{ $isDarkPage ? 'text-secondary-50' : 'text-secondary-500' }} text-light">4th apt, 1st floor, Hedayat darwish plaza,
                                Karte char, Mukhaberat street, Kabul.</p>

                            <h3 class="text-h4 {{ $isDarkPage ? 'text-secondary-50' : 'text-secondary-500' }} mt-[35px] mb-5">Registered</h3>
                            <p class="text-p1 {{ $isDarkPage ? 'text-secondary-50' : 'text-secondary-500' }} text-light">ACBR-IP</p>

                        </div>
                    </div>


                    {{-- Socila media links   --}}
                    <div class="social_media mt-[100px] flex items-center align-middle gap-10">
                        <a href="#"><img src="{{ asset('frontend/images/socialmedia/dribble.png') }}"
                                alt="Dribble"></a>
                        <a href="#"><img src="{{ asset('frontend/images/socialmedia/behance.png') }}"
                                alt="Behance"></a>
                        <a href="#"><img src="{{ asset('frontend/images/socialmedia/instagram.png') }}"
                                alt="Instagram"></a>
                        <a href="#"><img src="{{ asset('frontend/images/socialmedia/linkedin.png') }}"
                                alt="Linkedin"></a>
                        <a href="#"><img src="{{ asset('frontend/images/socialmedia/x.png') }}"
                                alt="Twitter"></a>
                        <a href="#"><img src="{{ asset('frontend/images/socialmedia/facebook.png') }}"
                                alt="Facebook"></a>
                    </div>


                    {{-- Gray line separator --}}
                    <span class="w-full block mt-[50px] mb-[30px] border border-gray-100"></span>

                    <p class="{{ $isDarkPage ? 'text-secondary-50' : 'text-secondary-500' }}">© 2025 simple studio  I  Privacy policy  I  cookie policy</p>


                </div>

            </div>
        </div>
    </div>
</footer>
