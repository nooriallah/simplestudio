@props([
"label",
"type" => "text",
"name",
"placeholder",
])
@php
    $model = $attributes->get('model', $name)
@endphp
<div class="mb-3 col-12 col-md-5">
    @if($label)
    {{-- check if it showed on the select profile then hide the file input and style this label for selecting file --}}
    @if($type === 'file')
    <label for="{{ $name }}" class="btn btn-primary">Select Profile Picture</label>
    @else
    <label for="{{ $name }}">{{ $label }}</label>
    @endif
    @endif

    @if($type === 'textarea')
    <textarea name="{{ $name }}" placeholder="{{ $placeholder }}" id="{{ $name }}" wire:model="{{ $model }}" value='{{ old($name ?? '') }}' class="form-control input-default">{{ old($name ?? '') }}</textarea>
    @elseif($type === 'select')
    <select name="{{ $name }}" id="{{ $name }}" wire:model="{{ $model }}" value='{{ old($name ?? '') }}' class="form-control input-default">
        {{ $slot }}
    </select>
    @elseif($type === 'file')
    <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" wire:model="{{ $model }}" value='{{ old($name ?? '') }}' class="hidden">
    @else
    <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" wire:model="{{ $model }}" value='{{ old($name ?? '') }}' placeholder="{{ $placeholder }}" class="form-control input-default">
    @endif

    @error($name)
    <span class="text-danger mt-1 block">{{ $message }}</span>
    @enderror
</div>
