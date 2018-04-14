<?php

namespace App;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use App\Favorite;
class Tag extends Model
{
	use Searchable;
	
    public function Galleries(){
    	return $this->belongsToMany('App\Gallery');
    }

     public function getRouteKeyName()   
		{
		return 'name';
		}
		public function favorites(){
	    return $this->morphMany(Favorite::class,'favoriteable');
    }
}
