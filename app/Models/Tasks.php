<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    //
   protected $table ="tasks";
   protected $fillable = ["name", "description", "initial_date", "attachedFile","commentary", "fk_user_id", "fk_phase_id", "fk_priority_id", "fk_history_id"];
   protected $guarded = ["id_task"];
   public $timestamps = false;

 	public static function storeTask($data){

    		Tasks::create($data);

    		} 

    public static function updateTask($data){
    		Tasks::where('id_task', $data['id_task'] )->update(['name' => $data['name'], 'description' => $data['description'], 'initial_date' => $data['initial_date'],'attachedFile' => $data['attachedFile'],'commentary' => $data['commentary'], 'fk_user_id' => $data['fk_user_id'], 'fk_phase_id' => $data['fk_phase_id'],'fk_priority_id' => $data['fk_priority_id'],'fk_history_id' => $data['fk_history_id']]);

    		} 
  public function user_team(){
    return $this->belongsTo('App\Models\User_teams');
  }

  public function history(){
    return $this->belongsTo('App\Models\Historys');
  }

  public function phase_task(){
    return $this->belongsTo('App\Models\phase_tasks');
  }

  public function priority(){
    return $this->belongsTo('App\Models\prioritys');
  }
}