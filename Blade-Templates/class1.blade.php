<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
</head>

<body>
    @php
        $name = 'tousif tasrik';
    @endphp

    <h1>{{ 'Welcome to the tutorial of blade template' }}</h1>
    <p>{{ $name }}</p>
    {!! '<h1>Interesting</h1>' !!}

    {{-- Control Structure Syntax --}}

    {{--
      @if (condition)
      //statement
      @else if(condition)
      //statement
      @else
      //statement
      @endif
    --}}


    {{--
    @switch(condition)
        @case(1)
        first case...
        @break
        @case(2)
          second case...
        @break
        @default
          Default case...
        @break
    @endswitch
    --}}


    {{--
      @isset($records)
        // records is set and it is not null
      @endisset
    --}}

    {{--
      @empty($records)
        // $records is empty
      @endempty
    --}}

    {{-- Loops --}}

    {{--
      @for ($i = 0; $i < 10; $i++) 
        // The current value of the i: {{ i }} 
      @endfor 
--}} 

{{-- @foreach ($users as $user)
        <p>This is {{$user}}</p>
     @endforeach
--}}


        {{--

        @forelse($users as $user)
          <li>{{$user->name}}</li>
        @empty
          <p>No users</p>
        @endforelse
        
        --}}

        {{--
          @continue
          @break
        --}}

        @php
            $names = ['Tousif Tasrik', 'Anika', 'nondi', 'tushu'];
        @endphp

        @foreach ($names as $name)
            @if ($loop->first)
                <li style="color:red;">{{$loop->iteration}} {{ $name }}</li>
            @elseif($loop->last)
                <li style="color:green;">{{$loop->iteration}} {{ $name }}</li>
            @else
                <li>{{$loop->iteration}} {{ $name }}</li>
            @endif
        @endforeach

        <br>

        @foreach ($names as $name)
            @if($loop->even)
                <li style="color:dodgerblue">{{$name}}</li>
            @else
                <li style="color:lightslategray">{{$name}}</li>
            @endif
        @endforeach
</body>

</html>
