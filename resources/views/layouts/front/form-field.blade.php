@props(['label', 'name', 'type', 'placeholder', 'value' => null])
 
<div class="flex flex-col flex-1">
    <label for="{{ $name }}" class="text-muted">{{ $label }}</label>
    @if ($type === 'textarea')
        <textarea name="{{ $name }}" id="{{ $name }}" placeholder="{{ $placeholder }}" value="{{ $value }}" class="w-full min-h-[100px]"></textarea>
    @elseif ($type === 'select')
        <select name="{{ $name }}" id="{{ $name }}" class="w-full">
            {{ $slot }}
        </select>
    @else
        <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" placeholder="{{ $placeholder }}" value="{{ $value }}" class="w-full" />
    @endif
    @error($name)
        <p class="text-red-500">{{ $message }}</p>
    @enderror
</div>

