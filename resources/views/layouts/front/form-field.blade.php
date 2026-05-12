@props(['label', 'name', 'type', 'placeholder', 'value' => null])

<div class="flex flex-col {{ $class }}">
    <label for="{{ $name }}" class="text-muted">{{ $label }}</label>

    @if ($type === 'textarea')
        <textarea name="{{ $name }}" id="{{ $name }}" placeholder="{{ $placeholder }}" value="{{ $value }}" class="w-full"></textarea>
    @else
        <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" placeholder="{{ $placeholder }}" value="{{ $value }}" class="w-full" />
    @endif
    @error($name)
        <p class="text-red-500">{{ $message }}</p>
    @enderror
</div>

