<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    public $directory = '/images/';
    protected $dates = ['deleted_at'];
    protected $fillable = ['title', 'content', 'path'];
    // public function photos()
    // {
    //     return $this->morphs('App\Photo', 'imageable');
    // }
    public function getPathAttribute($value)
    {
        return $this->directory . $value;
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
