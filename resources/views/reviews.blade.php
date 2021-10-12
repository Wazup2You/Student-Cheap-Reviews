<x-layout>
        @foreach ($reviews as $review)
            <article>
                <h1>
                    <a href="/reviews/{{ $review->slug }}">
                        {!! $review->title !!}
                    </a>
                </h1>

                <p>
                    <a href="/categories/{{ $review->category->slug }}">{{ $review->category->name }}</a>
                </p>

                <div>
                    {{ $review->excerpt }}
                </div>
            </article>
        @endforeach
</x-layout>
