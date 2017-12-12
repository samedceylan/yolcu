<?php
namespace Tkaratug\Yolcu\Controllers;

use App\Http\Controllers\Controller;
use Tkaratug\Yolcu\Models\Hotel;
use Tkaratug\Yolcu\Models\Review;

class HotelController extends Controller
{
    /**
     * Hotel list
     *
     * @param int $hotel_id
     */
    public function index($hotel_id)
    {
        $hotel      = Hotel::find($hotel_id);
        $reviews    = $hotel->reviews;
        return view('yolcu::hotel', compact(['hotel','reviews']));
    }

    /**
     * Add review to the hotel
     *
     * @param int $hotel_id
     */
    public function addReview($hotel_id)
    {
        $hotel      = Hotel::find($hotel_id);
        $hotel->addReview(request('review_text'));

        return back();
    }
}
