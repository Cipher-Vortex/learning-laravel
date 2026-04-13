 <x-layout >

       <p> {{ $greetings  }}</p>
       <p> {{ $person  }}</p>
       @dump($data)
       <ul>
        @foreach ($data as $number )
        <li>Number Array: {{ $number }}</li>
            
        @endforeach 
       </ul>
 
 </x-layout>