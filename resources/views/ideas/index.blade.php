<x-nav>
</x-nav>
<x-card>
    <h3>Ideas:</h3>
    <hr>

    <a href="/create/new">Create Idea</a>

    <hr>

    <ul>
        @foreach ($ideas as $idea)
            <li>
                {{ $idea->ideas }}

                <a href="{{ route('ideas.view', $idea->id) }}">
                    View {{ $idea->id }}
                </a>

                <form method="POST" action="{{ route('ideas.destroy', $idea->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete {{ $idea->id }}</button>
                </form>
            </li>
        @endforeach
    </ul>
</x-card>