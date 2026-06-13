<section class="services pt-[50px] pb-[100px]">


    {{-- Header texts --}}
    <div class="flex flex-col items-center">
        <h2 class="text-secondary-default text-h2 mb-4">A complete one stop visual solutions</h2>
        <p class="text-p3 text-center max-w-[430px]">From strategy to digital execution, we craft designs that make your
            brand undeniable.</p>
    </div>


    {{-- Servies setion  --}} 

    <div class="container mx-auto mt-11">
        <div class="services_wrapper flex justify-center items-center gap-7">

            <x-frontend.home.homeservice-card :services="$services" />

        </div>
    </div>



</section>
