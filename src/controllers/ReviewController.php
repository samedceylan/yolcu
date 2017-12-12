<?php

namespace Tkaratug\Yolcu\Controllers;

use App\Http\Controllers\Controller;
use Tkaratug\Yolcu\Models\Hotel;
use Tkaratug\Yolcu\Models\Review;

class ReviewController extends Controller{

    public function store($hotel_id)
    {
        $review = new Review();
        $review->text = request('review_text');
        $review->save();

        return back();
    }

}
