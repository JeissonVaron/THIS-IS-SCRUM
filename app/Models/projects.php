<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    //
   protected $table ="projects";
   protected $fillable = ["name", "description", "fk_teamwork_id"];
   protected $guarded = ["id_project"];
   public $timestamps = false;

 	public static function storeProject($data){

    		Projects::create($data);

    		}

    public function User_teams(){
      return $this->hasMany('App\Models\User_teams');
    }
  public function historys(){
    return $this->hasMany('App\Models\Historys');
  }
}
