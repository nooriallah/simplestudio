<section class="about_page">


    <div class="top_overlay absolute top-0 left-0 right-0"></div>

    <div class="container relative z-10">
        <h1 class="text-h1 max-w-[830px] mt-16">We transform identities through elevated visual solutions</h1>


        <img src="{{ asset('frontend/images/about/about.png') }}" class="w-fit w-full w-[1220px] mt-12" />


        {{-- Partners --}}
        <x-frontend.home.parners />



        <p class="text-p1 max-w-4xl mb-20">Simple Studio helps businesses grow through impactful visual storytelling and
            innovative design solutions. we solve visual challenges, strengthen brands, and build meaningful community
            connections. As a visual communication partner, Simple Studio focuses on creativity, strategy, and
            measurable impact.</p>



        {{-- Counter section --}}
        <div class="grid grid-cols-4 gap-4 p-6 mb-24">


            @foreach ($counters as $counter)
                <div x-data="{
                    current: 0,
                    target: {{ $counter['target'] }},
                    duration: 3000,
                    started: false,
                    startCounter() {
                        if (this.started) return;
                        this.started = true;
                
                        let startTimestamp = null;
                        const step = (timestamp) => {
                            if (!startTimestamp) startTimestamp = timestamp;
                            const progress = Math.min((timestamp - startTimestamp) / this.duration, 1);
                            this.current = Math.floor(progress * this.target);
                            if (progress < 1) {
                                window.requestAnimationFrame(step);
                            }
                        };
                        window.requestAnimationFrame(step);
                    }
                }" x-intersect.once="startCounter()" class="">
                    <h2 class="text-h2 font-bold">
                        <span class="text-secondary-500" x-text="current">0</span>+
                    </h2>
                    <p class="">{{ $counter['label'] }}</p>
                </div>
            @endforeach
        </div>




    </div>



    {{-- Why section --}}
    <div class="why_simple container-fluid bg-secondary-500 text-white py-32">

        <div class="container">

            <h2 class="text-h2 text-white mb-12">Why Simple</h2>

            <ul>

                @foreach ($features as $feature)
                    <li class="why_card">
                        <div class="title_portion flex items-center justify-between">
                            <span class="text-h3 mb-3">{{ $feature['title'] }}</span>
                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M35.625 21.172L25 32L14.375 21.172L16.2609 19.25L25 28.1561L33.7391 19.25L35.625 21.172Z"
                                    fill="#747782" />
                                <circle cx="25" cy="25" r="24.5" stroke="#D9D9D9" />
                            </svg>

                        </div>
                        <div class="desc_portion">
                            <p class="max-w-[520px] text-white">{{ $feature['desc'] }}</p>
                        </div>

                    </li>
                @endforeach


            </ul>


        </div>

    </div>



    {{-- Testimonial section --}}

    <div class="testimonials container-fluid py-20">

        <div class="container">

            <h2 class="text-h2 secondary-500 mb-6">What our clients says about us</h2>

            <div class="cards_wrapper flex gap-8">

                {{-- single card --}}
                <div class="card bg-tertiary-50 p-8 rounded-2xl relative z-0 overflow-hidden @container">
                    <div class="top_info flex gap-3 mb-10 @max-[194px]:flex-col">
                        <img src="{{ asset('frontend/images/about/clientpic.png') }}" alt="">
                        <p class="text-p4">Matiullah Rahmaty <br> CEO, Tamveel</p>
                    </div>

                    <div class="quote">
                        <p class="text-p1">“Simple functioned as part of our team, helping to crystalize our vision and
                            delivering incredible results in a record time.”</p>
                    </div>

                    <img src="{{ asset('frontend/images/about/testipic.svg') }}" alt=""
                        class="overlay_pic absolute right-0 bottom-0 z-10">



                    <svg class="absolute bottom-3 right-3" width="50" height="50" viewBox="0 0 50 50" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <circle cx="24.7508" cy="24.7508" r="24.1883" fill="white" stroke="#D1D5DB"
                            stroke-width="1.12504" />
                        <path d="M24.8856 18.915H21.6005V17.4525H26.4382V33.563H24.8856V18.915Z" fill="black" />
                    </svg>


                </div>

               


            </div>

        </div>

    </div>

</section>
