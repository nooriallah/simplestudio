{{-- First single services --}}
@foreach ($services as $service)
<div class="single_service 
relative flex flex-col justify-center items-center 
p-7 rounded-3xl overflow-hidden cursor-pointer bg-tertiary-50 {{ $loop->iteration === 3 ? 'is-active' : '' }}" data-service-card>

    {{-- Cover hover --}}
    <div class="cover_overlay bg-tertiary-50 absolute z-10 w-full h-full"></div>



    <button class=" py-1 px-6 rounded bg-primary-default text-secondary-default">{{ $service['title'] }}</button>
    <p class="max-w-96 text-p3 py-5 text-center">
        {{ $service['description'] }}
    </p>

    <x-button href="{{ $service['caseStudyLink'] }}" bg_color="bg-secondary-default" text_color="text-white" icon_color="light">Learn more</x-button>

    <img class="min-w-[500px] rounded-2xl mt-[32px]" src="{{ asset('/frontend/images/services/' . $service['image']) }}" alt="" srcset="">



</div>
@endforeach
