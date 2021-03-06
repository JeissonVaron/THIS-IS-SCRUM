<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class rols extends Model
{
    //
   protected $table ="rols";
   protected $fillable = ["name", "description"];
   protected $guarded = ["id_rol"];
   public $timestamps = false;

 	public static function storeCriteria($data){

    		Criterias::create($data);

    		} 

     

    public static function updateCriteria($data){
    		Criterias::where('id_criteria', $data['id_criteria'] )->update(['valuation' => $data['valuation'], 'description' => $data['description'], 'comment' => $data['comment'],'fk_history_id' => $data['fk_history_id']]);

    		}

  public function User_teams(){
    return $this->hasMany('App\Models\User_teams');
  }

   
}