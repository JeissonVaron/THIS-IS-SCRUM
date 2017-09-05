<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class prioritys extends Model
{
    //
   protected $table ="prioritys";
   protected $fillable = ["type", "description"];
   protected $guarded = ["id_priority"];
   public $timestamps = false;

 	public static function storeCriteria($data){

    		Criterias::create($data);

    		} 

     

    public static function updateCriteria($data){
    		Criterias::where('id_criteria', $data['id_criteria'] )->update(['valuation' => $data['valuation'], 'description' => $data['description'], 'comment' => $data['comment'],'fk_history_id' => $data['fk_history_id']]);

    		}
  public function tasks(){
    return $this->hasMany('App\Models\Tasks');
  } 
}