@auth
    <x-panel>
        <form class=" pt-5" method="POST" action="/posts/{{ $post->slug }}/comments">
            @csrf

            <header class="flex items-center">
                {{-- <img src="https://i.pravatar.cc/60?u={{ auth()->id() }}" alt="" width="40" height="40"
                    class="rounded-full"> --}}

                <h2 class="mb-4">Drop a Comment!</h2>
            </header>

            <div class="mt-6 m-auto">
                <textarea name="body" class="p-2 w-full text-md border bg-gray-900 outline-none rounded-md" rows="5"
                    placeholder="Quick, thing of something to say!" required></textarea>

                @error('body')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex justify-end">
                <x-form.button>Submit</x-form.button>
            </div>
        </form>
    </x-panel>
@else
    <p class="font-semibold text-center m-auto pt-5">
        <a href="/register" class="hover:underline">Register</a> or
        <a href="/login" class="hover:underline">log in</a> to leave a comment.
    </p>
@endauth
