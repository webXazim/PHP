<x-form.field>
    <style>
        .cbtn {
            background-color: lightgray
        }

        .cbtn:hover {
            background-color: gray;
        }
    </style>
    <button type="submit" class="cbtn text-gray-9 uppercase font-semibold text-xs py-2 px-10 rounded-2xl">
        {{ $slot }}
    </button>
</x-form.field>
