<?php

namespace App\Livewire\Backend;

use App\Models\User;
use App\UserRole;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Layout('layouts.app')]
class Users extends Component
{

    use WithFileUploads;

    public $name = '';
    public $lastname = '';
    public $email = '';
    public $password = '';
    public $profile_picture = null;
    public $role = UserRole::SUBSCRIBER->value;
    public $search = '';
    public $showusers = true;
    public $users = [];

    public function mount()
    {
        $this->users = User::all();
    }

    public function toggleAddUser()
    {
        $this->showusers = !$this->showusers;
    }


    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8'],
            'role' => ['required', Rule::in(array_column(UserRole::cases(), 'value'))],
            'profile_picture' => ['nullable', 'image', 'max:2048'],
        ];
    }

    public function addUser()
    {
        $validated = $this->validate();

        // Handle profile picture upload if provided and save it on public > backend > images > users folder
        if ($this->profile_picture) {
            // only store the name in the database and not the file path
            $filename = $this->profile_picture->getClientOriginalName();
            $this->profile_picture->storeAs('backend/images/users', $filename, "public");
            $validated['profile_picture'] = $filename;
        }

        User::create([
            'name' => $validated['name'],
            'lastname' => $validated['lastname'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'role' => $validated['role'],
            'profile_picture' => $validated['profile_picture'] ?? null,
        ]);

        $this->reset(['name', 'lastname', 'email', 'password', 'role', 'profile_picture']);
        session()->flash('success', 'User created successfully.');
    }



    public function render()
    {
        return view('livewire.backend.users');
    }
}
