<x-layout>
    <x-setting :heading="'Edit Post: ' . $user->name">
        <form method="POST" action="/user/admin/users/{{ $user->id }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <x-form.input name="name" :value="old('name', $user->name)" required />
            <x-form.input name="id" :value="old('id', $user->id)" required />

            <x-form.textarea name="email" required>{{ old('email', $user->email) }}</x-form.textarea>



            <x-form.button>Update</x-form.button>
        </form>
    </x-setting>
</x-layout>
