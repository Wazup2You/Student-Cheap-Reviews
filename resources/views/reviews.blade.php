<x-layout>
        @foreach ($reviews as $review)
            <article>
                <h1>
                    <a href="/reviews/{{ $review->slug }}">
                        {{ $review->title }}
                    </a>
                </h1>

                <div>
                    {{ $review->excerpt }}
                </div>
            </article>
        @endforeach
</x-layout>
