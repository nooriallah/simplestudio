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

            @foreach (array_chunk($projects, 2) as $rowIndex => $projectRow)
                @php
                    $rowClasses = $rowIndex % 2 === 0
                        ? ['small__project', 'big__project']
                        : ['big__project', 'small__project'];
                @endphp

                <div class="project__wrapper flex gap-8">
                    @foreach ($projectRow as $projectIndex => $project)
                        <x-frontend.home.project-card
                            project_class="{{ $rowClasses[$projectIndex] }}"
                            titled_button="{{ $project['title'] }}"
                            small_desc="{{ $project['description'] }}"
                            backgroundimage="{{ $project['backgroundimage'] }}"
                            slug="{{ $project['slug'] }}"
                        />
                    @endforeach
                </div>
            @endforeach

    </div>

    @if(Route::is("home"))
    <div class="read_more_button_container flex justify-center items-center mt-[73px]">
        <a href="#" class="button button-light">More Case
            Studies <x-icons.arrow-right variant="dark" /></a>
    </div>
    @endif

</div>

</div>
