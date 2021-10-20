@props(['reviews'])

<x-review-featured-card :review="$reviews[0]" />

@if ($reviews->count() > 1)
    <div class="lg:grid lg:grid-cols-6">
        @foreach($reviews->skip(1) as $review)
            <x-review-card
                :review="$review"
                class="{{ $loop->iteration < 3 ? 'col-span-3' : 'col-span-2' }}"
            />
        @endforeach
    </div>
@endif
