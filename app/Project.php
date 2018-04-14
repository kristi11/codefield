<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use ChristianKuri\LaravelFavorite\Traits\Favoriteable;
use App\Favorite;

class Project extends Model
{

use Searchable;
use SoftDeletes;
use Favoriteable;

    protected $fillable = ['title','body','image','zip_file'];



    protected $dates = ['deleted_at'];

    // protected $table = 'projects';
    // protected $primary_key = 'id';

    public function user(){
    	return $this->belongsTo(User::class);
    }
    
    public function getRouteKeyName()   
		{
		return 'title';
		}

        public function favorites(){
        return $this->morphMany(Favorite::class,'favoriteable');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class)->withTimestamps();
    }

    // public function GetCategoryListAttribute()
    // {
    //     return $this->categories->select('id');
    // }
}
