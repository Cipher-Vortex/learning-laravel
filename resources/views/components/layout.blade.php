@props([
    'title' => 'MODO mines'
])

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ✅ Correct Tailwind CDN -->
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <!-- ✅ DaisyUI plugin -->
    <script>
        tailwind.config = {
            plugins: [daisyui],
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/daisyui@latest"></script>

    <title>{{ $title }}</title>
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