<x-layout>

    <article>
        <h1>{{ $review->title }}</h1>

        <p>
            <a href="/categories/{{ $review->category->slug }}">{{ $review->category->name }}</a>
        </p>

        <div>
            {!! $review->body !!}
        </div>
    </article>

    <a href="/">Go Back</a>

</x-layout>
