<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table='job';

    public function add($name,$gender,$max_age,$min_age,$career_id,$position_id,$salary,$experience,$soft_skill,$lat,$lng,$description,$requirement,$benefits)
    {
    	$this->name=$name;
    	$this->gender=$gender;
    	$this->max_age=$max_age;
    	$this->min_age=$min_age;
    	$this->career_id=$career_id;
    	$this->position_id=$position_id;
    	$this->salary=$salary;
    	$this->experience=$experience;
    	$this->soft_skill=$soft_skill;
    	$this->lat=$lat;
    	$this->lng=$lng;
    	$this->description=$description;
    	$this->requirement=$requirement;
    	$this->benefits=$benefits;
    	$this->save();
    }

    public function edit($name,$gender,$max_age,$min_age,$career_id,$position_id,$salary,$experience,$soft_skill,$lat,$lng,$description,$requirement,$benefits)
    {
    	$this->name=$name;
    	$this->gender=$gender;
    	$this->max_age=$max_age;
    	$this->min_age=$min_age;
    	$this->career_id=$career_id;
    	$this->position_id=$position_id;
    	$this->salary=$salary;
    	$this->experience=$experience;
    	$this->soft_skill=$soft_skill;
    	$this->lat=$lat;
    	$this->lng=$lng;
    	$this->description=$description;
    	$this->requirement=$requirement;
    	$this->benefits=$benefits;
    	$this->save();
    }

    public function getSoft_Skill()
    {
    	$soft_skill='';
    	if ($this->soft_skill==1) {
    		$soft_skill='Kém';
    	} elseif ($this->soft_skill==2) {
    		$soft_skill='Khá';
    	} elseif ($this->soft_skill==3) {
    		$soft_skill='Trung Bình';
    	} elseif ($this->soft_skill==4) {
    		$soft_skill='Tốt';
    	} else{
    		$soft_skill='Rất Tốt';
    	}
    	return $soft_skill;
    }

}
