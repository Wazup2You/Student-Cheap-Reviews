<x-layout>
    @include('reviews._header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if ($reviews->count())
            <x-reviews-grid :reviews="$reviews" />
        @else
            <p class="text-center">No reviews yet. Please check later.</p>
        @endif
    </main>
</x-layout>
