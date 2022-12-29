<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Validation\Rule;

class AdminUserController extends Controller
{
    public function index()
    {
        return view('admin.users.index', [
            'users' => User::paginate(50)
        ]);
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store()
    {
        User::create(array_merge($this->validatePost(), [
            'user_id' => request()->user()->id,
            'thumbnail' => request()->file('thumbnail')->store('thumbnails')
        ]));

        return redirect('/blog');
    }

    public function edit(User $user)
    {
        return view('admin.users.edit', ['user' => $user]);
    }

    public function update(User $user)
    {
        $attributes = $this->validatePost($user);

        if ($attributes['thumbnail'] ?? false) {
            $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        }

        $user->update($attributes);

        return back()->with('success', 'User Updated!');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return back()->with('success', 'User Deleted!');
    }

    protected function validatePost(?User $user = null): array
    {
        $user ??= new User();

        return request()->validate([
            'name' => 'required',
            'id' => ['required', Rule::unique('users', 'id')->ignore($user)],
            'email' => 'required',

        ]);
    }
}
