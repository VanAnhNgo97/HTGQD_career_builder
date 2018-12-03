<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Job;
use DB;

class AdminController extends Controller
{
    public function getHome()
    {
        $jobs=Job::all();
    	return view('admin.pages.home',['jobs'=>$jobs]);
    }

    public function getAddWork()
    {
    	return view('admin.pages.add_work');
    }

    public function getEditWork($id)
    {
        $job=Job::find($id);
    	return view('admin.pages.edit_work',['job'=>$job]);
    }

    public function getEdit()
    {
    	return view('admin.pages.edit_trong_so');
    }

    public function postAddWork(Request $req)
    {
        $name=$req->job_name;
        $gender=$req->gender;
        $max_age=$req->max_age;
        $min_age=$req->min_age;
        $career_id=$req->career_id;
        $position_id=$req->position_id;
        $salary=$req->salary;
        $experience=$req->experience;
        $soft_skill=$req->soft_skill;
        $lat=0;
        $lng=0;
        $description=$req->description;
        $requirement=$req->requirement;
        $benefits=$req->benefits;
        $location = $req->location;
        $job=new Job;
        $job->add($name,$gender,$max_age,$min_age,$career_id,$position_id,$salary,$experience,$soft_skill,$location,$description,$requirement,$benefits);
        return redirect('admin/them-cong-viec');
    }

    public function postEditWork(Request $req)
    {
        $job=Job::find($req->id);

        $name=$req->job_name;
        $gender=$req->gender;
        $max_age=$req->max_age;
        $min_age=$req->min_age;
        $career_id=$req->career_id;
        $position_id=$req->position_id;
        $salary=$req->salary;
        $experience=$req->experience;
        $soft_skill=$req->soft_skill;
        $lat=0;
        $lng=0;
        $location = $req->location;
        $description=$req->description;
        $requirement=$req->requirement;
        $benefits=$req->benefits;


        $job->edit($name,$gender,$max_age,$min_age,$career_id,$position_id,$salary,$experience,$soft_skill,$location,$description,$requirement,$benefits);
        return redirect('admin/trang-chu');
    }

    public function getDeleteJob($id)
    {
        $job=Job::find($id);
        $job->delete();
        return redirect('admin/trang-chu');
    }

    public function postSearchWork(Request $req)
    {
        $gender=$req->gender;
        $career_id=$req->career_id;
        $location=$req->location;
        $position_id=$req->position_id;
        $experience=$req->experience;
        $salary=$req->salary;
        $age=$req->age;
        echo "Mã nghề: ".$career_id;
        echo "Địa Điểm: ".$location;
        echo "Mã cấp bậc:".$position_id;
        echo "Kinh nghiệm:".$experience;
        echo "Lương:".$salary;
        echo "Tuổi:".$age;
        $jobs=null;
        if ($gender==0) {
            $jobs=Job::select(DB::raw('gender,min_age,max_age,salary,career_id,position_id,experience,soft_skill'))
            ->where('gender',0)
            ->where('min_age','<=',$age)
            ->where('max_age','>=',$age)
            ->where('experience','<=',$experience)
            ->get();
        } else {
            $jobs=Job::select(DB::raw('gender,min_age,max_age,salary,career_id,position_id,experience,soft_skill'))
            ->where('gender',0)
            ->orWhere('gender',$gender)
            ->where('min_age','<=',$age)
            ->where('max_age','>=',$age)
            ->where('experience','<=',$experience)
            ->get();
        }
        
        var_dump($jobs);
        //Đây là chỗ Topsis
    }
}
