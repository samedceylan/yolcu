<?php
namespace Tkaratug\Yolcu\Models;

use Illuminate\Database\Eloquent\Model;
use Tkaratug\Yolcu\Models\Review;
use Tkaratug\Yolcu\Models\Country;

class Hotel extends Model
{
    /**
     * Country of the hotel
     */
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    /**
     * Reviews belongs to the hotel
     */
    public function reviews()
    {
        return $this->morphMany(Review::class, 'commentable');
    }

    /**
     * Add review to the hotel
     *
     * @param string $text
     */
    public function addReview($text)
    {
        $this->reviews()->create(compact('text'));
    }

}
