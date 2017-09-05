<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class phase_historys extends Model
{
    //
   protected $table ="phase_historys";
   protected $fillable = ["name"];
   protected $guarded = ["id_phase"];
   public $timestamps = false;

 	public static function storeCriteria($data){

    		Criterias::create($data);

    		} 

     

    public static function updateCriteria($data){
    		Criterias::where('id_criteria', $data['id_criteria'] )->update(['valuation' => $data['valuation'], 'description' => $data['description'], 'comment' => $data['comment'],'fk_history_id' => $data['fk_history_id']]);

    		} 
  public function historys(){
    return $this->hasMany('App\Models\Historys');
  }
}