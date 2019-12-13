<?php

namespace LaravelForum;
use Illuminate\Database\Eloquent\Model;
class Discussion extends Model
{
    protected $fillable = [
        'title', 'content','slug' ,'channel_id','reply_id'
    ];
    
    public function author()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function replies()
    {
        return $this->hasMany(Reply::class);
    }

public function scopeFilterByChannel($builder)
{
    if (request()->query('channel'))
    {
        $channel= Channel::where('slug',request()->query('channel'))->first();

        if($channel)
        {
            return $builder->where('channel_id',$channel->id);
        }

        return $builder;
    }
    return $builder;
}

public function getRouteKeyName()
{
    return 'slug';
}

public function bestReply()
{
    return $this->belongsTo(Reply::class, 'reply_id');
}


public function markAsBestReply(Reply $reply)
{
    $this->update([
        
        'reply_id'=> $reply->id
    ]);
}



}
