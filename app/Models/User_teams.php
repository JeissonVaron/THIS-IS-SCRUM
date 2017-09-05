<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User_teams extends Model
{
    //
   protected $table ="user_teams";
   protected $fillable = ["fk_user_id", "fk_teamwork_id", "fk_rol_id"];
   protected $guarded = ["id_user_team"];
   public $timestamps = false;

 	public static function storeProject($data){

    		Projects::create($data);

    		} 

     

    public static function updateProject($data){
    		Projects::where('id_proyect', $data['id_proyect'] )->update(['name' => $data['name'], 'description' => $data['description'],'fk_teamwork_id' => $data['fk_teamwork_id']]);

    		}

        public function User(){
          return $this->belongsTo('App\User');
        }

    public function tasks(){
      return $this->hasMany('App\Models\Tasks');
    }

    public function rol(){
        return $this->belongsTo('App\Models\rols');
    }

    public function project(){
        return $this->belongsTo('App\Models\projects');
    }

}
