@props([
    'titled_button' => 'UIUX',
    'small_desc' => 'Place holder',
    'project_class' => 'small__project' | 'big__project',
    'backgroundimage' => '',
])

<div class="{{ $project_class }} relative flex items-end"
    style="background-image: url('{{ asset('frontend/images/projects/' . $backgroundimage) }}')">
    <div class="project_hidden_info flex items-center flex-md-row gap-10">
        <a href="#" class="titled_button button text-black">{{ $titled_button }}</a>
        <p class="text-white">{{ $small_desc }}</p>
    </div>
</div>
