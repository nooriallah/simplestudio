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
                                <img src="{{ asset('storage/backend/images/users/' . $user->profile_picture) }}" alt="Profile Picture" class="rounded-circle" width="40" height="40">
                                @else
                                <img src="{{ asset('storage/backend/images/usericon.png') }}" alt="Default Profile Picture" class="rounded-circle" width="40" height="40">
                                @endif
                            </td>
                            <td>{{ $user->role }}</td>
                            <td>{{ $user->created_at->format('Y-m-d') }}</td>
                            <td>
                                <button class="btn btn-sm btn-primary" wire:click="selectUser({{ $user->id }})">Edit</button>
                                <button 
                                class="btn btn-sm btn-danger" 
                                wire:click="deleteUser({{ $user->id }})"
                                wire:confirm="Are you sure you want to delete this user? This action cannot be undone."
                                >X</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
