@props(['comment'])

<x-panel class="bg-gray-900">
    <div class="flex space-x-4 mb-3 pt-3">
        <div class="flex-shrink-0">

        </div>

        <div>
            <header class="mb-2">
                <h3 class="font-bold">{{ $comment->author->name }}</h3>

                <p class="text-xs">
                    Posted
                    <time>{{ $comment->created_at->format('F j, Y, g:i a') }}</time>
                </p>
            </header>

            <p>
                {{ $comment->body }}
            </p>
        </div>
    </div>
</x-panel>
