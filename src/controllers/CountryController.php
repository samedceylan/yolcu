<?php
namespace Tkaratug\Yolcu\Controllers;

use App\Http\Controllers\Controller;
use Tkaratug\Yolcu\Models\Country;
use Tkaratug\Yolcu\Models\Review;

class CountryController extends Controller
{
    /**
     * Country list
     */
    public function index()
    {
        $countries = Country::all();
        return view('yolcu::index', compact('countries'));
    }

    /**
     * Country details
     *
     * @param int $country_id
     */
    public function country($country_id)
    {
        $country = Country::find($country_id);
        $hotels  = $country->hotels;
        $reviews = $country->reviews;
        return view('yolcu::country', compact(['country','hotels','reviews']));
    }

    /**
     * Add review to the country
     *
     * @param int $country_id
     */
    public function addReview($country_id)
    {        
        $country = Country::find($country_id);
        $country->addReview(request('review_text'));

        return back();
    }
}
