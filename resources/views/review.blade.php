<x-layout>

    <article>
        <h1>{{ $review->title }}</h1>

        <p>
            By <a href="/authors/{{ $review->author->username }}">{{ $review->author->name }}</a> in <a href="/categories/{{ $review->category->slug }}">{{ $review->category->name }}</a>
        </p>

        <div>
            {!! $review->body !!}
        </div>
    </article>

    <a href="/">Go Back</a>

</x-layout>
