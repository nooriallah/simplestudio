@if($showusers)
<div class="col-xl-12 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">All user</h4>
            <button class="btn btn-primary" type="button" wire:click="toggleAddUser">{{ $showusers ? 'Add User' : 'Show Users' }}</button>
        </div>
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-responsive-md">
                    <thead>
                        <tr>
                            <th><strong>Name</strong></th>
                            <th><strong>Email</strong></th>
                            <th><strong>Image</strong></th>
                            <th><strong>Role</strong></th>
                            <th><strong>Created at</strong></th>
                            <th><strong>Actions</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr wire:click="selectUser({{ $user->id }})" class="cursor-pointer">
                            <td>{{ $user->name }} {{ $user->lastname }} </td>
                            <td>{{ $user->email }}</td>
                            {{-- check if user has a profile picture show its image otherwise show usericon --}}
                            <td>
                                @if ($user->profile_picture)
                                <img src="{{ asset('/backend/images/users/' . $user->profile_picture) }}" alt="Profile Picture" class="rounded-circle" width="40" height="40">
                                @else
                                <img src="{{ asset('/backend/images/usericon.png') }}" alt="Default Profile Picture" class="rounded-circle" width="40" height="40">
                                @endif
                            </td>
                            <td>{{ $user->role }}</td>
                            <td>{{ $user->created_at->format('Y-m-d') }}</td>
                            <td>
                                <button class="btn btn-sm btn-primary" wire:click="selectUser({{ $user->id }})">Edit</button>
                                <button class="btn btn-sm btn-danger" wire:click="deleteUser({{ $user->id }})" wire:confirm="Are you sure you want to delete this user? This action cannot be undone.">X</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

@else
{{-- Add user --}}
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

@endif
