<x-card>
<form method="POST" action="/entry">
  @csrf
  <textarea name="data-entry" required></textarea>
  <button type="submit">Submit</button>
</form>

<hr>

<h3>Entries:</h3>
{{-- @dd($entries) --}}
<ul>
  @foreach ($entries as $entry)
    <li>
        {{ is_array($entry) ? json_encode($entry) : $entry }}
    </li>
@endforeach
</ul>
{{-- @dd($entries) --}}

</x-card>