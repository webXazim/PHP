@props(['trigger'])
<style>
    .cat-link a {
        color: aqua;
        text-decoration: none;
    }
</style>
<div x-data="{ show: false }" @click.away="show = false" class="relative">
    {{-- Trigger --}}
    <div @click="show = ! show">
        {{ $trigger }}
    </div>

    {{-- Links --}}
    <div x-show="show" class="cat-link py-2 absolute bg-gray-900 mt-2 rounded text-nowrap overflow-auto max-h-52"
        style="display: none">
        {{ $slot }}
    </div>
</div>
