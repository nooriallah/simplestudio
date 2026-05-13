 <div 
 
 class="service_card flex justify-between gap-[212px] bg-white p-12 rounded-2xl mb-10 {{ $activeTab === $key ? 'expanded' : '' }}" 
 wire:click="setActiveTab('{{ $key }}')">

     {{-- Left side --}}
     <div class="left_side flex-1 fl ex justify-center flex-col">

         <h2 class="service_title text-secondary-500 text-h2">{{ $service['title'] }}</h2>

         <p class="service_desc text-p1 mt-4">
             {{ $service['description'] }}
         </p>

         <ul class="service_features text-p1 font-medium flex flex-col gap-4 mt-8">
             @foreach ($service['features'] as $feature)
             <li>{{ $feature }}</li>
             @endforeach
         </ul>

         <a href="{{ route('project.show', ['slug' => $service['slug']]) }}" class=" service_link button bg-primary-500 text-secondary-500 hover:text-white mt-10 w-fit">
             Case Studies
             <svg width="13" height="12" viewBox="0 0 13 12" fill="#fff" xmlns="http://www.w3.org/2000/svg">
                 <path d="M10.2038 4.91091L6.65172 1.35887C6.50368 1.21082 6.42796 1.02474 6.42458 
                    0.800624C6.42119 0.576684 6.49691 0.387218 6.65172 0.232223C6.80654 0.0774073 
                    6.99431 -7.52383e-07 7.21505 -7.24128e-07C7.4356 -6.95895e-07 7.62329 0.0774074 
                    7.7781 0.232224L12.5821 5.03624C12.7754 5.22954 12.8721 5.455 12.8721 5.71261C12.8721 
                    5.97022 12.7754 6.19567 12.5821 6.38897L7.7781 11.193C7.63024 11.3409 7.44424 11.4166 
                    7.22013 11.4201C6.99601 11.4235 6.80654 11.3478 6.65172 11.193C6.49691 11.038 6.4195 
                    10.8502 6.4195 10.6297C6.4195 10.4091 6.49691 10.2213 6.65172 10.0663L10.2038 6.5143L0.801494 
                    6.5143C0.573991 6.5143 0.383454 6.43752 0.229885 6.28395C0.0764942 6.13055 -0.000200272 5.94011 
                    -0.000200272 5.7126C-0.000200272 5.4851 0.0764942 5.29465 0.229885 5.14126C0.383454 4.98769 0.573991 
                    4.91091 0.801494 4.91091L10.2038 4.91091Z" fill="#090D17" />
             </svg>
         </a>
     </div>

     {{-- Right side --}}
     <div class="right_side flex-1 flex justify-end">
         <img src="{{ asset('frontend/images/services/' . $service['image'] . '.png') }}" class="service_image w-[620px]" alt="service image">
         <svg width="30" height="18" viewBox="0 0 30 18" fill="none" xmlns="http://www.w3.org/2000/svg">
             <path d="M30 2.71338L15 18L0 2.71338L2.6625 3.048e-08L15 12.5732L27.3375 3.12957e-07L30 2.71338Z" fill="#747782" />
         </svg>

     </div>

 </div>
