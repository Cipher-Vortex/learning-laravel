<x-card>
    
    <h3>Viewing Idea:</h3>
{{-- @dd($idea) --}}
    <p>{{ $idea->id }}</p>
    <p>{{ $idea->ideas }}</p>
    <p>{{ $idea->created_at }}</p>
    <p>{{ $idea->updated_at }}</p>
      <a href="{{ route('ideas.edit',$idea->id) }}" type="submit">Edit</a>
    
    <hr>

<ul>


</x-card>