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
    <div class="container-fluid bg-secondary-500 text-white py-32">
        
        <div class="container">

            <h2 class="text-h2 text-white">Why Simple</h2>

            <ul>
                <li class="flex items-center justify-between">
                    <span>Expertise of our co-founders</span> <img src="{{ asset("frontend/images/faqicon.svg") }}" alt="">
                </li>
            </ul>


        </div>

    </div>


</section>
