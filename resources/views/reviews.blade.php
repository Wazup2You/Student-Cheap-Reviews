<x-layout>
        @foreach ($reviews as $review)
            <article>
                <h1>
                    <a href="/reviews/{{ $review->slug }}">
                        {!! $review->title !!}
                    </a>
                </h1>

                <p>
                    By <a href="/authors/{{ $review->author->username }}">{{ $review->author->name }}</a> in <a href="/categories/{{ $review->category->slug }}">{{ $review->category->name }}</a>
                </p>

                <div>
                    {{ $review->excerpt }}
                </div>
            </article>
        @endforeach
</x-layout>
