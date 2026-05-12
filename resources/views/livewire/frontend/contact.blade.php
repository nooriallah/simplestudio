<section class="contact_us">

    {{-- top svg bg   --}}

    {{-- <svg class="absolute top-0 right-0 " width="1920" height="440" viewBox="0 0 1920 440" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect width="1920" height="440" fill="url(#paint0_linear_296_237)"/>
        <defs>
        <linearGradient id="paint0_linear_296_237" x1="960" y1="0" x2="960" y2="440" gradientUnits="userSpaceOnUse">
        <stop stop-color="#F5F5F7"/>
        <stop offset="1" stop-color="#F5F5F7" stop-opacity="0"/>
        </linearGradient>
        </defs>
        </svg> --}}


    <div class="container">

        <div class="flex justify-between gap-12 mb-[160px]">

            <div class="w-1/2">
                <h1 class="text-h1 text-secondary-500">Let's Create</h1>
                <p class="text-p2 mb-14 max-w-[480px]">We'd love to get to know you better and explore what we can design and build together.
                </p>


                <form class="flex flex-col gap-7" wire:submit.prevent="submit">
                    <div class="flex gap-6">
                        <x-layouts::front.form-field label="Name" name="name" type="text" placeholder="Your Name" />
                        <x-layouts::front.form-field label="Email" name="email" type="email" placeholder="Your Email" />
                    </div>
                    <div class="flex gap-6">
                        <x-layouts::front.form-field label="Phone" name="phone" type="text" placeholder="Your Phone" />
                        <x-layouts::front.form-field label="Select a solution" name="services" type="select" placeholder="Select a solution">
                            <option value="">Select Services</option>
                            <option value="web_design">Web Design</option>
                            <option value="mobile_app">Mobile App Development</option>
                            <option value="ui_ux">UI/UX Design</option>
                            <option value="branding">Branding</option>
                            <option value="digital_marketing">Digital Marketing</option>
                        </x-layouts::front.form-field>
                    </div>
                    <div class="flex gap-6 flex-end">
                        <x-layouts::front.form-field label="Message" name="message" type="textarea" placeholder="Your Message" />
                        <button type="submit" class="bg-primary-500 text-white">Submit</button>
                    </div>
                </form>


                {{-- Socialmedia icons and contact address --}}
                <div class="mt-20 space-y-5">
                    <div class="flex items-center gap-x-5">
                        <a href="#"><img src="{{ asset('frontend/images/socialmedia/dribble.png') }}" alt=""></a>
                        <a href="#"><img src="{{ asset('frontend/images/socialmedia/behance.png') }}" alt=""></a>
                        <a href="#"><img src="{{ asset('frontend/images/socialmedia/instagram.png') }}" alt=""></a>
                        <a href="#"><img src="{{ asset('frontend/images/socialmedia/linkedin.png') }}" alt=""></a>
                        <a href="#"><img src="{{ asset('frontend/images/socialmedia/x.png') }}" alt=""></a>
                        <a href="#"><img src="{{ asset('frontend/images/socialmedia/facebook.png') }}" alt=""></a>
                    </div>

                    <p class=" max-w-[290px]">4th apt, 1st floor, Hedayat darwish plaza, Karte char, Mukhaberat street, Kabul.</p>

                </div>


            </div>
            <div class="w-1/2 max-w-[750px] flex justify-end">
                <img src="{{ asset('frontend/images/contact/contact.jpg') }}" class="w-full h-auto" alt="">
            </div>
        </div>

    </div>

</section>
