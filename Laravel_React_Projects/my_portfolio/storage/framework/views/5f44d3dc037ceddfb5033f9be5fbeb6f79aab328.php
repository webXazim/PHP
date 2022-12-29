<?php $attributes = $attributes->exceptProps(['trigger']); ?>
<?php foreach (array_filter((['trigger']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div onclick="toggler()" x-data="{ show: false }" @click.away="show = false" class="relative">
    
    <div @click="show = ! show">
        <?php echo e($trigger); ?>

    </div>
    <style>
        .cat-btn a {
            color: aqua;
            background: gray;
            border-radius: px;
        }
    </style>
    
    <div x-show="show" class="py-2 absolute cat-btn text-nowrap overflow-auto max-h-52" style="display: none">
        <?php echo e($slot); ?>

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
<?php /**PATH P:\webXazim\wxa\laravel\portfolio\my_portfolio\resources\views/components/dropdown.blade.php ENDPATH**/ ?>