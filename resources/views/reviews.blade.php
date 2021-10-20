<x-layout>
    @include('_reviews-header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if ($reviews->count())
            <x-reviews-grid :reviews="$reviews" />
        @else
            <p class="text-center">
                No reviews yet. Please check later.
            </p>
        @endif

{{--        <div class="lg:grid lg:grid-cols-3">--}}
{{--            <x-review-card />--}}
{{--            <x-review-card />--}}
{{--            <x-review-card />--}}
{{--        </div>--}}
    </main>

{{--        @foreach ($reviews as $review)--}}
{{--            <article>--}}
{{--                <h1>--}}
{{--                    <a href="/reviews/{{ $review->slug }}">--}}
{{--                        {!! $review->title !!}--}}
{{--                    </a>--}}
{{--                </h1>--}}

{{--                <p>--}}
{{--                    By <a href="/authors/{{ $review->author->username }}">{{ $review->author->name }}</a> in <a href="/categories/{{ $review->category->slug }}">{{ $review->category->name }}</a>--}}
{{--                </p>--}}

{{--                <div>--}}
{{--                    {{ $review->excerpt }}--}}
{{--                </div>--}}
{{--            </article>--}}
{{--        @endforeach--}}
</x-layout>
