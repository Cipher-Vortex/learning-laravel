<x-card>
    
    <hr>
    
    <h3>Edit Your idea</h3>
    @dd($idea)
    <form action="/ideas/edit/{{ $idea->id }}" method="POST">
      @csrf
      @method('PATCH')
      <textarea name="idea" required>{{ $idea->ideas }}</textarea>
      {{-- <textarea name="idea" >{{ $idea-> $ideas}}</textarea> --}}
      <button type="submit">Submit</button>
    </form>

{{-- <ul>
@foreach ($ideas as $idea)
    <li>
        {{ $idea}}
    </li>
@endforeach
</ul> --}}

</x-card>