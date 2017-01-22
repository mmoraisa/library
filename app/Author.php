<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Author extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'birthday', 'bio_PT', 'bio_US'
    ];

    public function books(){
        return $this->hasMany('App\Book');
    }
}
