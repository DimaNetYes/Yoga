<x-index>
    <x-slot name='title'>
        my title
    </x-slot>

    <x-slot name='users'>
        @foreach ($users as $user)
            <div>
                <h2> {{ $user->name }}</h2>
                <div> {{ $user->email }}</div>
            </div>
        @endforeach
    </x-slot>

</x-index>