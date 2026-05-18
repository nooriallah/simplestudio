<div class="container-fluid relative z-10 @if(Route::is('home'))  bg-tertiary-50 @endif pb-[100px]">

    <div class="container mx-auto">
        @if (Route::is('home'))
        <div class="py-[80px] content-center">
            <h2 class="text-h2 text-center">Latest Projects</h2>
            <p class="text-p3 text-center max-w-[410px] text-secondary-500">
                At Simple Design Studio, we explore ideas
                made visual. We are your creative visual
                partners.</p>
        </div>
        @endif

        {{-- Projects --}}
        <div class="project__container flex flex-col gap-8">

            @for ($i = 0; $i < count($projects); $i +=2) <div class="project__wrapper flex gap-8">
                {{-- First item (small) --}}
                <x-frontend.home.project-card project_class="small__project" titled_button="{{ $projects[$i]['title'] }}" small_desc="{{ $projects[$i]['description'] }}" backgroundimage="{{ $projects[$i]['backgroundimage'] }}" slug="{{ $projects[$i]['slug'] }}" />

                {{-- Second item (big) - only if exists --}}
                @if (isset($projects[$i + 1]))
                <x-frontend.home.project-card project_class="big__project" titled_button="{{ $projects[$i + 1]['title'] }}" small_desc="{{ $projects[$i + 1]['description'] }}" backgroundimage="{{ $projects[$i + 1]['backgroundimage'] }}" slug="{{ $projects[$i + 1]['slug'] }}" />
                @endif
        </div>
        @endfor

    </div>

    @if(Route::is("home"))
    <div class="read_more_button_container flex justify-center items-center mt-[73px]">
        <a href="#" class="button button-light">More Case
            Studies <x-icons.arrow-right variant="dark" /></a>
    </div>
    @endif

</div>

</div>
