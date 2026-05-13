<section class="services_page bg-gray-50">
    {{-- Always remember that you are absolutely unique. Just like everyone else. - Margaret Mead --}}


    <div class="container flex items-center justify-center flex-col pt-[213px] pb-[73px]">
        <h1 class="text-h1 text-secondary-500 text-center">A Complete visual solution</h1>
        <p class="text-p2 text-center max-w-[535px]">Our deep design expertise helps brands grow through powerful visuals
            and impactful digital experiences.</p>
    </div>





    <div class="container mb-24">

        @foreach ($services as $key => $service)
        <x-frontend.services.service-card :service="$service" :activeTab="$activeTab" :key="$key" />
        @endforeach


    </div>


</section>
