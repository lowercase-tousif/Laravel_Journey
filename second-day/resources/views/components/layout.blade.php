<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Page </title>
</head>

<body>

    <x-nav-link href="/"> Home</x-nav-link>
    <x-nav-link href="/about"> About</x-nav-link>
    <x-nav-link href="/contact">Contact</x-nav-link>


    {{-- <?php echo $slot; ?> --}}
    {{ $slot }}
</body>

</html>
