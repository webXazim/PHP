@props(['heading'])

<section class="py-5 max-w-6xl mx-auto">
    <h1 class="text-lg font-bold mb-8 pb-2 border-b">
        {{ $heading }}
    </h1>

    <div class="d-flex">
        <div class="d-block">
            <aside class="w-48 flex-shrink-0">
                <h4 class="font-semibold mb-4">Blog Links</h4>

                <ul>
                    <li>
                        <a href="/blog/admin/posts" class="{{ request()->is('admin/posts') ? 'text-blue-500' : '' }}">All
                            Posts</a>
                    </li>

                    <li>
                        <a href="/blog/admin/posts/create"
                            class="{{ request()->is('admin/posts/create') ? 'text-blue-500' : '' }}">Add New Post</a>
                    </li>
                </ul>
            </aside>
            <br />
            <aside class="w-48 flex-shrink-0">
                <h4 class="font-semibold mb-4">Project Links</h4>

                <ul>
                    <li>
                        <a href="/shop/admin/products"
                            class="{{ request()->is('admin/products') ? 'text-blue-500' : '' }}">All Projects</a>
                    </li>

                    <li>
                        <a href="/shop/admin/products/create"
                            class="{{ request()->is('admin/products/create') ? 'text-blue-500' : '' }}">Add New
                            Project</a>
                    </li>
                </ul>
            </aside>
            <br />
            <aside class="w-48 flex-shrink-0">
                <h4 class="font-semibold mb-4">User Management</h4>
                <ul>
                    <li>
                        <a href="/user/admin/users" class="{{ request()->is('admin/user') ? 'text-blue-500' : '' }}">All
                            Users</a>
                    </li>

                </ul>
            </aside>
        </div>
        <main class="flex-1">
            <x-panel>
                <h1>Index</h1>
                {{ $slot }}
            </x-panel>
        </main>
    </div>
</section>
