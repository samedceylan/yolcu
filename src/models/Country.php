<?php
namespace Tkaratug\Yolcu\Models;

use Illuminate\Database\Eloquent\Model;
use Tkaratug\Yolcu\Models\Review;
use Tkaratug\Yolcu\Models\Hotel;

class Country extends Model
{
    /**
     * Hotels in the country
     */
    public function hotels()
    {
        return $this->hasMany(Hotel::class);
    }

    /**
     * Reviews belongs to the country
     */
    public function reviews()
    {
        return $this->morphMany(Review::class, 'commentable');
    }

    /**
     * Add review to the country
     *
     * @param string $text
     */
    public function addReview($text)
    {
        $this->reviews()->create(compact('text'));
    }

}
