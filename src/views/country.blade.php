<h3>Country : {{ $country->country_name }}</h3>
<a href="/yolcu">Back to Countries</a>

<h4>Hotels: ({{ $hotels->count() }})</h4>
<ul>
    @foreach ($hotels as $hotel)
        <li>
            <a href="/yolcu/hotel/{{ $hotel->id }}">
                {{ $hotel->hotel_name }}
            </a>
    </li>
    @endforeach
</ul>

<hr>

<h4>Comments: ({{ $reviews->count() }})</h4>

<ul>
    @foreach ($reviews as $review)
        <li>{{ $review->text }}</li>
    @endforeach
</ul>

<form action="/yolcu/country/{{ $country->id }}/review" method="post">
    {{ csrf_field() }}

    <p><textarea name="review_text" rows="8" cols="80"></textarea></p>
    <p><input type="submit" value="Kaydet"></p>
</form>
