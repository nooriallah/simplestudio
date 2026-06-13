<div class="col-xl-12 col-lg-12">
    <form class="card" wire:submit="addUser" accept="multipart/form-data">
        @csrf
        <div class="card-header">
            <h4 class="card-title">Add user</h4>
            <button class="btn btn-primary" type="button" wire:click="toggleAddUser">{{ $showusers ? 'Add User' : 'Show Users' }}</button>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <div class="flex justify-start items-start gap-x-5 flex-wrap">

                    <x-backend.field label="Profile Picture" name="profile_picture" type="file" placeholder="Upload profile picture" />

                    <x-backend.field label="Name" name="name" placeholder="Enter the user name" />
                    <x-backend.field label="Lastname" name="lastname" placeholder="Enter the user lastname" />

                    <x-backend.field label="Role" name="role" type="select" placeholder="Select the user role">
                        <option value="{{ App\UserRole::SUBSCRIBER->value }}">{{ App\UserRole::SUBSCRIBER->name }}</option>
                        <option value="{{ App\UserRole::EDITOR->value }}">{{ App\UserRole::EDITOR->name }}</option>
                        <option value="{{ App\UserRole::ADMIN->value }}">{{ App\UserRole::ADMIN->name }}</option>
                    </x-backend.field>

                    <x-backend.field label="Email" name="email" type="email" placeholder="Enter the user email" />
                    <x-backend.field label="Password" name="password" type="password" placeholder="Enter the user password" />

                    <div class="mb-3 col-10 flex justify-end">
                        <button type="submit" class="button bg-blue-600 text-white btn-outlined">Add User</button>
                    </div>

                </div>
            </div>
        </div>
    </form>
</div>
