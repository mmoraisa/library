<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Category extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name_PT','name_US'
    ];

    public function books(){
        return $this->hasMany('App\Book');
    }

    public $timestamps = false;
}
