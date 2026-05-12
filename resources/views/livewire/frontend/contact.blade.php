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

        <div class="flex justify-between">

            <div class="col">
                <h1 class="text-h1 text-secondary-500">Let's Create</h1>
                <p class="text-p2 mb-14">We'd love to get to know you better and explore what we can design and build together.
                </p>


                <form>
                    <div class="flex border gap-5">
                        <div class="flex flex-col flex-1 border">
                            <label for="name" class="text-muted">Your Name</label>
                            <input type="text" name="name" id="name" placeholder="Your Name" class  />
                        </div>
                        <div class="flex flex-col border flex-1">
                            <label for="email">Your Name</label>
                            <input type="email" name="email" id="email" placeholder="Your Email" />
                        </div>
                    </div>
                    <div class="flex">
                        <div class="flex flex-col">
                            <label for="name">Your Name</label>
                            <input type="text" name="name" id="name" placeholder="Your Name" />
                        </div>
                        <div class="flex flex-col">
                            <label for="email">Your Name</label>
                            <input type="email" name="email" id="email" placeholder="Your Email" />
                        </div>
                    </div>

                    <div class="flex">
                        <div class="flex flex-col">
                            <label for="name">Your Name</label>
                            <textarea  name="name" id="name" placeholder="Your Name" ></textarea>
                        </div>
                        <div class="flex">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                        </div>
                </form>


            </div>
            <div class="col">
                <img src="{{ asset('frontend/images/contact/contact.jpg') }}" alt="">
            </div>
        </div>

    </div>

</section>
