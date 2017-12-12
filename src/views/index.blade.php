<h3>Countries</h3>

<ul>
    @foreach ($countries as $country)
        <li><a href="/yolcu/country/{{ $country->id }}">{{ $country->country_name }}</a></li>
    @endforeach
</ul>
