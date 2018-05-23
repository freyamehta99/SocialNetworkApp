<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function posts()
    {
        return $this->hasMany('App\Post', 'user_id');
    }

    public function profile()
    {
        return $this->hasOne('App\Profile', 'user_id');
    }


    // public function follower(){
    //     return $this->hasMany('App\Models\UserFollowing', 'following_user_id', 'id');
    // }

    // public function following(){
    //     return $this->hasMany('App\Models\UserFollowing', 'follower_user_id', 'id');
    // }


            /**
         * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
         */
        public function followers()
        {
            return $this->belongsToMany(User::class, 'followers', 'leader_id', 'follower_id')->withTimestamps();
        }

        /**
         * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
         */
        public function followings()
        {
            return $this->belongsToMany(User::class, 'followers', 'follower_id', 'leader_id')->withTimestamps();
        }

}
