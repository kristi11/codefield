<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Support\Facades\Redis;

use ChristianKuri\LaravelFavorite\Traits\Favoriteable;

use App\Favorite;

use App\User;

use Illuminate\Support\Facades\Auth;

class Gallery extends Model
{
	use SoftDeletes;
	use Favoriteable;
	
    protected $dates = ['deleted_at'];

    public function user(){
    	return $this->belongsTo(User::class);
    }
	public function tags(){
	    return $this->belongsToMany('App\Tag')->withTimestamps();
    }

    public function favorites(){
	    return $this->morphMany(Favorite::class,'favoriteable');
    }

     public function getRouteKeyName()   
		{
		return 'gallery_image';
		}
		 //  public function countviews()
			// {
			// 	Redis::incr("gallery.{$this->gallery_image}.views");
			// }
			//  
}
