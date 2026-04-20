<div class="container-fluid relative z-10 bg-tertiary-50 pb-[100px]">


    <div class="container mx-auto">
        <div class="py-[80px] content-center">
            <h2 class="text-h2 text-center">Latest Projects</h2>
            <p class="text-p3 text-center max-w-[410px] text-secondary-500">At Simple Design Studio, we explore ideas
                made visual. We are your creative visual
                partners.</p>
        </div>




        {{-- Projects --}}
        <div class="project__container flex flex-col gap-10">
            <div class="project__wrapper flex gap-10">

                <x-frontend.home.project-card project_class="small__project" titled_button="Seidenstrasse"
                    small_desc="Restaurant and culture house" />

                <x-frontend.home.project-card project_class="big__project" titled_button="Seidenstrasse"
                    small_desc="Restaurant and culture house" />
                    
            </div>
        </div>


        {{-- <div class="project__container flex flex-col gap-10">
            <div class="project__wrapper flex gap-10">

                <x-frontend.home.project-card project_class="small__project" titled_button="Seidenstrasse" small_desc="Restaurant and culture house"/>

            </div>
        </div> --}}


        <div class="read_more_button_container flex justify-center items-center mt-[73px]">
            <a href="#" class="button border border-tertiary-200 bg-white text-black hover:text-white">More Case
                Studies <span><svg width="11" height="10" viewBox="0 0 11 10" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M8.42035 4.05251L5.48919 1.12135C5.36702 0.999179 5.30454 0.845623 5.30175 0.66068C5.29895 0.475883 5.36143 0.319534 5.48919 0.191632C5.61694 0.063877 5.7719 -6.2087e-07 5.95405 -5.97554e-07C6.13605 -5.74257e-07 6.29093 0.0638771 6.41868 0.191632L10.383 4.15594C10.5425 4.31545 10.6223 4.50149 10.6223 4.71408C10.6223 4.92666 10.5425 5.1127 10.383 5.27221L6.41868 9.23652C6.29666 9.35854 6.14318 9.42102 5.95824 9.42396C5.77329 9.42675 5.61694 9.36427 5.48919 9.23652C5.36143 9.10862 5.29756 8.95366 5.29756 8.77166C5.29756 8.58966 5.36143 8.4347 5.48919 8.3068L8.42035 5.37564L0.661545 5.37564C0.473808 5.37564 0.316577 5.31227 0.189851 5.18555C0.0632715 5.05897 -1.71661e-05 4.90181 -1.71661e-05 4.71407C-1.71661e-05 4.52634 0.0632715 4.36918 0.189851 4.2426C0.316577 4.11587 0.473808 4.05251 0.661545 4.05251L8.42035 4.05251Z"
                            fill="#090D17" />
                    </svg>
                </span></a>
        </div>

    </div>





</div>
