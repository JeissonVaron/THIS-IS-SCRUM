<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Criterias extends Model
{
    //
   protected $table ="criterias";
   protected $fillable = ["valuation", "description", "comment", "fk_history_id"];
   protected $guarded = ["id_criteria"];
   public $timestamps = false;

 	public static function storeCriteria($data){

    		Criterias::create($data);

    		} 

     

    public static function updateCriteria($data){
    		Criterias::where('id_criteria', $data['id_criteria'] )->update(['valuation' => $data['valuation'], 'description' => $data['description'], 'comment' => $data['comment'],'fk_history_id' => $data['fk_history_id']]);

    		} 
  public function history(){
      return $this->belongsTo('App\Models\Historys');
  }
}