<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Historys extends Model
{
    //
   protected $table ="historys";
   protected $fillable = ["objective", "fk_sprint_id", "fk_project_id", "fk_phase_id"];
   protected $guarded = ["id_history"];
   public $timestamps = false;

 	public static function storeHistory($data){

    		Historys::create($data);

    		} 

     

    public static function updateHistory($data){
    		Historys::where('id_history', $data['id_history'] )->update(['objective' => $data['objective'], 'fk_sprint_id' => $data['fk_sprint_id'], 'fk_project_id' => $data['fk_project_id'],'fk_phase_id' => $data['fk_phase_id']]);

    		} 

  public function project(){
      return $this->belongsTo('App\Models\projects');
  }
  public function phase_history(){
      return $this->belongsTo('App\Models\phase_historys');
  }
  public function sprint(){
      return $this->belongsTo('App\Models\Sprints');
  }

  public function criterias(){
    return $this->hasMany('App\Models\Criterias');
  }
  public function tasks(){
    return $this->hasMany('App\Models\Tasks');
  }
}