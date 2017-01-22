<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Book extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name_PT', 'description_PT', 'cover_url_PT','name_US', 'description_US', 'cover_url_US', 'category_id', 'author_id'
    ];

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function author(){
        return $this->belongsTo('App\Author');
    }

    public $timestamps = false;
}
