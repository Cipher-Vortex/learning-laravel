<x-card>
    
    <hr>
    
    <h3>Create your idea</h3>
    <form action="/ideas/create" method="POST">
      @csrf
      <textarea name="ideas" required></textarea>
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