<h3>Hotel: {{ $hotel->hotel_name }}, {{ $hotel->country->country_name }}</h3>
<a href="/yolcu/country/{{ $hotel->country->id }}">Back to Hotels</a>

<h4>Comments: ({{ $reviews->count() }})</h4>

<ul>
    @foreach ($reviews as $review)
        <li>{{ $review->text }}</li>
    @endforeach
</ul>

<form action="/yolcu/hotel/{{ $hotel->id }}/review" method="post">
    {{ csrf_field() }}

    <p><textarea name="review_text" rows="8" cols="80"></textarea></p>
    <p><input type="submit" value="Kaydet"></p>
</form>
