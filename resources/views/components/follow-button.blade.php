@foreach(auth()->user()->follows as $user)
<form method="POST" action="/user/reviews/following/{{ $user->name }}">
    @csrf

    <button
        type="submit"
        class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-xs">
        {{ auth()->user()->following($user) ? 'Unfollow Me' : 'Follow Me' }}
    </button>
    @endforeach
</form>
