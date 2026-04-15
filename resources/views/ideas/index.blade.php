<x-card>
<form method="POST" action="/createIdea">
  @csrf
  <textarea name="ideas" required></textarea>
  @error('ideas')
      
  <b>There was an error</b>
  @enderror
      
  <button type="submit">Submit</button>
</form>

<hr>

<h3>ideas:</h3>
<a href="/createIdea" >Create Idea</a>
<ul>
    @foreach ($ideas as $idea)
    <li>
        {{ $idea}} 
        <a href="{{ route('ideas.view',$idea->id) }}">View {{ $idea->id }}</a>
    </li>
    {{-- any one , both performs the same thing --}}
    <form method="POST" action="{{ route('ideas.destroy',$idea->id) }}">
    {{-- <form method="POST" action="{{ url('deleteidea/'.$idea->id) }}"> --}}
        @csrf
        @method('DELETE')
        <button type="submit">Delete {{ $idea->id }}</button>
    </form>
        @endforeach
    </ul>

</x-card>