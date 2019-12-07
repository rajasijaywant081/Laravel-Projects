<?php

namespace LaravelForum;
use Illuminate\Database\Eloquent\Model;
class Discussion extends Model
{
    protected $fillable = [
        'title', 'content','slug' ,'channel_id'
    ];
    
    public function author()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function replies()
    {
        return $this->hasMany(Reply::class);
    }



public function getRouteKeyName()
{
    return 'slug';
}

}
