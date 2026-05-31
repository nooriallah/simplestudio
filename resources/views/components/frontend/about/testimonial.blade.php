@props([
"image" => "",
"name" => "",
"position" => "",
"quote" => "",
"active" => false,
])

{{-- single card --}}
<div class="card bg-tertiary-50 p-8 rounded-2xl relative overflow-hidden {{ $active ? 'is-active' : '' }}" data-testimonial-card>
    <div class="top_info gap-3 mb-10">
        <img src="{{ asset('frontend/images/about/' . $image) }}" alt="{{ $name }}">
        <div class="testimonial_person">
            <p class="testimonial_name">{{ $name }}</p>
            <p class="testimonial_position">{{ $position }}</p>
        </div>
    </div>

    <div class="quote relative z-10 ">
        <p class="capitalize">“{{ $quote }}”</p>
    </div>

    <span class="testimonial_action" aria-hidden="true">
        <span class="testimonial_number">1</span>
        <x-icons.arrow-right class="testimonial_arrow" width="14" height="14" />
    </span>

    <img src="{{ asset('frontend/images/about/testipic.svg') }}" alt="" class="svg_pic absolute right-0 top-10">




</div>
