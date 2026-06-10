@props([
"label",
"type" => "text",
"name",
"placeholder",
])

<div class="mb-3 col-12 col-md-5">
    @if($label)
    <label for="">{{ $label }}</label>
    @endif

    <input type="{{ $type }}" name="{{ $name }}" value='{{ old($name  ?? '') }}' placeholder="{{ $placeholder }}" class="form-control input-default">

</div>
