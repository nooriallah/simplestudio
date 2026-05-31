@props([
'bg_color' => 'bg-primary-default',
'text_color' => 'text-secondary-default',
'icon_color' => "dark" | "light",
'href' => null,
'icon' => true,
'type' =>'button'
])

@php
$classes = "button font-guton font-medium {{ $bg_color }} {{ $text_color }} inline-flex items-center gap-2 rounded-chroma-12 border-none cursor-pointer no-underline group motion-safe:transition-[background-color,color,opacity] motion-safe:duration-350 motion-safe:ease-in-out relative overflow-hidden px-chroma-16 py-chroma-12 bg-chroma-button-cta-primary text-chroma-button-cta-primary-text [&amp;_.button-bg-hover]:bg-chroma-button-cta-primary-hover focus:bg-chroma-button-cta-primary-focus focus:outline-chroma-button-cta-primary-focus-border [&amp;_span]:whitespace-nowrap desktop:max-[1260px]:[&amp;_span]:!text-chroma-navigation-display-2 [.session-active_&amp;]:hidden"
@endphp

@if ($href)
<a {{ $attributes->merge(['class'=> $classes]) }} role="link" href="{{ $href }}">
    <span class="btn-label text-chroma-button-1 relative z-1">{{ $slot }}</span>
    @if ($icon)
    <x-icons.arrow-right variant="{{ $icon_color }}" />
    @endif
</a>
@else
<button {{ $attributes->merge(['class'=> $classes]) }} type={{ $type }}>
    <span class="btn-label text-chroma-button-1 relative z-1">{{ $slot }}</span>
    @if ($icon)
    <x-icons.arrow-right variant="{{ $icon_color }}" />
    @endif
</button>
@endif
