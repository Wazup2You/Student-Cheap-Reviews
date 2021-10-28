<x-layout>
    <x-setting :heading="'Edit Review: ' . $review->title">
        <form method="POST" action="/admin/reviews/{{ $review->id }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <x-form.input name="title" :value="old('title', $review->title)" />
            <x-form.input name="slug" :value="old('slug', $review->slug)"/>

            <div class="flex mt-6">
                <div class="flex-1">
                    <x-form.input name="thumbnail" type="file" :value="old('thumbnail', $review->thumbnail)"/>
                </div>
            <img src="{{ asset('storage/' . $review->thumbnail) }}" alt="" class="rounded-xl ml-6" width="100">
            </div>

            <x-form.textarea name="excerpt">{{ old('excerpt', $review->excerpt) }}</x-form.textarea>
            <x-form.textarea name="body">{{ old('body', $review->body) }}</x-form.textarea>

            <x-form.field>
                <x-form.label name="category" />
                <select name="category_id" id="category_id">
                    @foreach (\App\Models\Category::all() as $category)
                        <option
                            value="{{ $category->id }}"
                            {{ old('category_id', $review->category_id) == $category->id ? 'selected' : '' }}
                        >{{ ucwords($category->name) }}</option>
                    @endforeach
                </select>
                <x-form.error name="category" />
            </x-form.field>

            <x-form.button>Update</x-form.button>
        </form>
    </x-setting>


</x-layout>
