@props([
    'title' => 'MODO mines'
])

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ? $title : ''}}</title>
    <style>
       
    </style>
</head>
<body>
     <h1>Hello</h1>
     <nav>
         <a href="/">Home</a>
         <a href="/dummy">Dummy</a>
         <a href="/contact">Contact Us</a>
        </nav>
   {{ $slot }}
</body>
</html>