@props(['heading'])

<section class="py-8 max-w-4xl mx-auto">
    <h1 class="text-lg font-bold mb-8 pb-2 border-b">
        {{ $heading }}
    </h1>


    <div class="flex">
        @can('admin')
        <aside class="w-48 flex-shrink-0">
            <h4 class="font-semibold mb-4">Links</h4>
            <ul>
                <li>
                    <a href="/admin/reviews" class="{{ request()->is('admin/reviews') ? 'text-blue-500' : '' }}">All Reviews</a>
                </li>

                <li>
                    <a href="/admin/reviews/create" class="{{ request()->is('admin/reviews/create') ? 'text-blue-500' : '' }}">New Review</a>
                </li>
            </ul>
        </aside>
        @endcan
        <main class="flex-1">
            <x-panel>
                {{ $slot }}
            </x-panel>
        </main>
    </div>
</section>
