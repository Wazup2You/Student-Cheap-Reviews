<x-layout>

    <article>
        <h1>{{ $review->title }}</h1>

        <div>
            {!! $review->body !!}
        </div>
    </article>

    <a href="/">Go Back</a>

</x-layout>
