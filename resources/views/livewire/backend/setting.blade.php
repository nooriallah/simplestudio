<div class="col-xl-12 col-lg-12">
    <form class="card">
        <div class="card-header">
            <h4 class="card-title">Site main info</h4>
        </div>
        <div class="card-body">

            <div class="basic-form">
                <div class="flex justify-start items-start gap-x-5 flex-wrap">

                    <x-backend.field label="Website name" name="site_name" placeholder="Enter website name / title" />
                    <x-backend.field label="Website Email" name="site_email" type="email" placeholder="Enter website email address" />
                    <x-backend.field label="Website Phone number" name="site_phone" type="tel" placeholder="Enter website phone number" />
                    <x-backend.field label="Website Whatsapp number" name="site_whatsapp" type="tel" placeholder="Enter website Whatsapp number" />

                    <div class="mb-3 col-10 flex justify-end">
                        <button type="submit" class="button bg-blue-600 text-white btn-outlined">Update</button>
                    </div>

                </div>
            </div>


        </div>
        </fo>
</div>
