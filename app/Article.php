<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Config;

class Article extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'id','title', 'text'
    ];

    protected $dates = ['deleted_at'];

    public function users(){
        return $this->belongsToMany('App\User');
    }

    public function isAuthor(User $user){
        if (!$user){
            return Config::get('constants.mismatch');
        }
        if ($this->trashed()){
            return null;
        }
        if ($this->users()->find($user->id)){
            return true;
        }
        else{
            return false;
        }
    }
}
