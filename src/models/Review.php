<?php
namespace Tkaratug\Yolcu\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['text'];

    /**
     * Review Polimorphic Relation with Countries and Hotels
     */
    public function commentable()
    {
        $this->morphTo();
    }

}
