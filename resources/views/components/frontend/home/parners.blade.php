@php
    $clientLogos = [
        ['image' => 'clients1.png', 'alt' => 'Client Logo 1'],
        ['image' => 'clients2.png', 'alt' => 'Client Logo 2'],
        ['image' => 'clients3.png', 'alt' => 'Client Logo 3'],
        ['image' => 'clients4.png', 'alt' => 'Client Logo 4'],
        ['image' => 'clients2.png', 'alt' => 'Client Logo 5'],
        ['image' => 'clients3.png', 'alt' => 'Client Logo 6'],
    ];
@endphp

<div class="clients__logos mt-[83px] mb-[100px]" aria-label="Trusted client logos">
    <div class="clients__logos_track">
        <div class="clients__logos_group">
            @foreach ($clientLogos as $logo)
                <a href="#" class="client_logo">
                    <img src="{{ asset('frontend/images/clients/' . $logo['image']) }}" alt="{{ $logo['alt'] }}">
                </a>
            @endforeach
        </div>

        <div class="clients__logos_group" aria-hidden="true">
            @foreach ($clientLogos as $logo)
                <a href="#" class="client_logo" tabindex="-1">
                    <img src="{{ asset('frontend/images/clients/' . $logo['image']) }}" alt="">
                </a>
            @endforeach
        </div>
    </div>
</div>
