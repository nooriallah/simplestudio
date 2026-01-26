<div class="container-fluid relative z-10 bg-tertiary-50 pb-[100px]">


    <div class="container mx-auto">
        <div class="py-[80px] content-center">
            <h2 class="text-h2 text-center">Latest Projects</h2>
            <p class="text-p3 text-center max-w-[410px] text-secondary-500">At Simple Design Studio, we explore ideas
                made visual. We are your creative visual
                partners.</p>
        </div>




        {{-- Projects --}}

        <div class="project__container flex flex-col gap-10">



            <div class="flex gap-10">
                <div
                    class="w-30 h-[700px] bg-[url({{ asset('frontend/images/projects/smallpic.png') }})] rounded-[24px] overflow-hidden">
                    <img src="{{ asset('frontend/images/projects/smallpic.png') }}" alt="" srcset="">
                </div>
                <div
                    class="w-auto h-[700px] bg-[url({{ asset('frontend/images/projects/bigpic.png') }})] rounded-[24px] overflow-hidden">
                    <img src="{{ asset('frontend/images/projects/bigpic.png') }}" alt="" srcset="">
                </div>
            </div>

            <div class="flex gap-10">
                <div
                    class="w-30 h-[700px] bg-[url({{ asset('frontend/images/projects/bigpic.png') }})] rounded-[24px] overflow-hidden">
                    <img src="{{ asset('frontend/images/projects/bigpic.png') }}" alt="" srcset="">
                </div>

                <div
                    class="w-70 h-[700px] bg-[url({{ asset('frontend/images/projects/smallpic.png') }})] rounded-[24px] overflow-hidden">
                    <img src="{{ asset('frontend/images/projects/smallpic.png') }}" alt="" srcset="">
                </div>
            </div>


        </div>

    </div>





</div>
