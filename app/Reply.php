<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    /**
     * Don't auto-apply mass assignment protection.
     *
     * @var array
     */
    protected $guarded = [];
    
    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');  // Because we are using owner instead of user we have to specify the foreign key is user_id.
    }
}
