<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Class 2 Blade Template</title>
</head>

<body>
    @php
        $fruits = ["mango", "apple", "litchi", "pineapple"];
        $sports = [];
        // $boolean = true
        $value = "Hello";
    @endphp

    {{-- @include('pages.header', ['name' => "Tousif Tasrik", "fruits" => $fruits]) --}}

    {{-- @includeWhen(empty($value), 'pages.header', ['name' => "Tousif Tasrik", "fruits" => $fruits]) --}}

    {{-- Include When will not work because the condition is false --}}

    @includeUnless(empty($value), 'pages.header', ['name' => "Tousif Tasrik", "fruits" => $fruits])
    {{-- Include When will work because the condition is true --}}

    <h1>Welcome to my webpage</h1>

    @include('pages.footer')

    @includeIf('pages.content')




    {{-- Will include if the content.blade.php exists --}}

    {{-- @includeWhen(condition Value, 'viewFile', ['status' => "Hello"])

    condition value : True, False;

    Shows the file if conditionValue is False;
    --}}

    {{--
    @includeUnless('condition value', 'viewFile', ['status' => "World"])

    condition Value: True, False

    Shows the file if conditionValue is False;
    --}}
</body>

</html>
