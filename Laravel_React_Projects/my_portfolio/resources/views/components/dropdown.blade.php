@props(['trigger'])

<div onclick="toggler()" x-data="{ show: false }" @click.away="show = false" class="relative">
    {{-- Trigger --}}
    <div @click="show = ! show">
        {{ $trigger }}
    </div>
    <style>
        .cat-btn a {
            color: aqua;
            background: gray;
            border-radius: px;
        }
    </style>
    {{-- Links --}}
    <div x-show="show" class="py-2 absolute cat-btn text-nowrap overflow-auto max-h-52" style="display: none">
        {{ $slot }}
    </div>

    <script>
        var a = 1;

        function toggler() {
            if (a) {
                var tri = document.getElementById("icon")
                tri.style.color = "red";
                tri.style.transform = "rotate(90deg)"
                tri.style.marginLeft = "4px";
                a = 0
            } else {
                var tri = document.getElementById("icon")
                tri.style.color = "white";
                tri.style.transform = "rotate(0deg)"
                tri.style.marginLeft = "3px";
                a = 1
            }
        }
    </script>
</div>
