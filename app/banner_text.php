<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner_text extends Model
{
	//protected $fillable = ['primary_text','name','secondary_text'];
    public function user(){
    	return $this->belongsTo(User::class);
    }
}
