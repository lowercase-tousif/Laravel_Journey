<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$product['name']}}</title>
</head>

<body>
    @include('partials.header')
    <h1>{{$product['name']}}</h1>

    @includeWhen($product['on_sale'], 'partials.sale-banner')

    @if ($product['type'] == 'book')
        @include('partials.book-details', ['details' => $product['details']])
    @elseif($product['type'] == 'gadget')
        @include('partials.gadget-details', ['details' => $product['details']])
    @endif

    {{-- Other Details --}}
    <p>Price: {{$product['price']}}</p>

    {{-- Stock Calculation --}}

    @php
        $stockValue = $product['price'] * $product['stock'];
    @endphp

    <h3>Total stockValue: {{$stockValue}} BDT</h3>


    <button>Buy now</button>

    {{-- Special note --}}
    @includeIf('partials.special-note')

    @include('partials.footer')
</body>

</html>