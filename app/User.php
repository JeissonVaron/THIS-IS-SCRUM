<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use Notifiable;
    public $timestamps = false;
    protected $primaryKey = 'id_user';



    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_user','name','last_name','name_user', 'email', 'password','fk_state_id','fk_profile_id'  
    ];
     



    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function user_teams(){
        return $this->hasMany('App\Models\User_teams');
    }

    public function state(){
        return $this->belongsTo('App\Models\states');
    }

    public function profile(){
        return $this->belongsTo('App\Models\profiles');
    }  
}
