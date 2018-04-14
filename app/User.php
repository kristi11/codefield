<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use ChristianKuri\LaravelFavorite\Traits\Favoriteability;
use Spatie\Permission\Traits\HasRoles;
use App\Gallery;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;
    use Favoriteability;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guard_name = 'web';
    
    protected $fillable = [
        'name', 'email', 'password', 'profile','provider_id','avatar','slug'
    ];

    protected $dates = ['deleted_at'];

    // protected $table = 'projects';
    // protected $primary_key = 'id';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function project(){
        $this->hasMany(Project::class);
    }

    public function gallery(){
        $this->hasMany(Gallery::class);
    }

    public function submitRequests(){
        $this->hasMany(SubmitRequest::class);
    }



    // public function banner_text(){
    //     $this->hasMany(Banner_text::class);
    // }
    // public function isAdmin()
    //     {
    //         return $this->admin ? true : false; // this looks for an admin column in your users table
    //     }
}
