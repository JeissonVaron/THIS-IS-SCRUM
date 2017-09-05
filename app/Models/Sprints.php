<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sprints extends Model
{
    //
   protected $table ="sprints";
   protected $fillable = ["description", "initial_date", "final_date"];
   protected $guarded = ["id_sprint"];
   public $timestamps = false;

 	public static function storeSprint($data){

    		Sprints::create($data);

    		} 

     

    public static function updateSprint($data){
    		Sprints::where('id_sprint', $data['id_proyect'] )->update(['description' => $data['description'], 'initial_date' => $data['initial_date'],'final_date' => $data['final_date']]);

    		}
  public function historys(){
    return $this->hasMany('App\Models\Historys');
  } 
}