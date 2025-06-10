<p>I am a header and i am a passed value {{$name}}</p>

<ul>
    @foreach ($fruits as $fruit)
        <li>{{$fruit}}</li>
    @endforeach
</ul>



@forelse($sports as $key => $sport)
    <li>{{$key}} -- {{$sport}}</li>

@empty
    <p style="color:red">No data found about sports</p>
@endforelse
