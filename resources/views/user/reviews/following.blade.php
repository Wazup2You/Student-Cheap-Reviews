<x-layout>
    <x-setting heading="Following list">
        <div class="bg-gray-200 rounded-lg py-4 px-6">
        <ul>
            @foreach(auth()->user()->follows as $user)
            <li>
                <div class="flex">
                    <img src="https://i.pravatar.cc/60?u={{ auth()->id() }}"
                         alt=""
                         width="40"
                         height="40"
                         class="rounded-full">
                    {{ $user->name }}
                </div>
            </li>
            @endforeach
        </ul>
        </div>
    </x-setting>
</x-layout>
