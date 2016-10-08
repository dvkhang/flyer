<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flyer extends Model
{
	protected $table = 'flyers';
	protected $fillable = [
		'street',
		'city',
		'zip',
		'country',
		'state',
		'price',
		'desciprion',
	];

    public function photos()
    {
    	return $this->hasMany('App\Photo');
    }
}
