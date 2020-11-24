<h3 class="font-bold text-xl mb-4">Following</h3>

<ul>
{{--    @foreach(range(1, 8) as $index)--}}
{{--    @foreach(auth()->user()->follows as $user)--}}
    @forelse(auth()->user()->follows as $user)
        <li class="mb-4">
            <div {{--class="flex items-center text-sm"--}}>
{{--                <a href="{{ route('profile', $tweet->user) }}">--}}
                <a href="{{ route('profile', $user) }}" class="flex items-center text-sm">
                    <img
                        {{--                    src="https://i.pravatar.cc/40"--}}
                        src="{{ $user->avatar }}"
                        alt=""
                        class="rounded-full mr-2"
                        width="40"
                        height="40"
                    >
                    {{ $user->name }}
                </a>
            </div>
        </li>
    @empty
        <li>No friends yet!</li>
    @endforelse
</ul>
