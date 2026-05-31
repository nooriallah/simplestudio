 <div class="service_card flex justify-between gap-[212px] bg-white p-12 rounded-2xl mb-8 {{ $activeTab === $key ? 'expanded' : '' }}" wire:click="setActiveTab('{{ $key }}')">

     {{-- Left side --}}
     <div class="left_side flex-1 fl ex justify-center flex-col">

         <h2 class="service_title text-secondary-500 text-h2">{{ $service['title'] }}</h2>

         <p class="service_desc text-p1 mt-4">
             {{ $service['description'] }}
         </p>

         <ul class="service_features text-p1 font-guton flex flex-col gap-4 mt-8">
             @foreach ($service['features'] as $feature)
             <li>{{ $feature }}</li>
             @endforeach
         </ul>
         
         <x-button href="{{ route('project.show', ['slug' => $service['slug']]) }}" class="service_link mt-10 w-fit">Case Studies</x-button>
     </div>

     {{-- Right side --}}
     <div class="right_side flex-1 flex justify-end">
         <img src="{{ asset('frontend/images/services/' . $service['image'] . '.png') }}" class="service_image w-[620px]" alt="service image">
         <svg width="30" height="18" viewBox="0 0 30 18" fill="none" xmlns="http://www.w3.org/2000/svg">
             <path d="M30 2.71338L15 18L0 2.71338L2.6625 3.048e-08L15 12.5732L27.3375 3.12957e-07L30 2.71338Z" fill="#747782" />
         </svg>

     </div>

 </div>
