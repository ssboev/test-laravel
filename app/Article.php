<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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
}
