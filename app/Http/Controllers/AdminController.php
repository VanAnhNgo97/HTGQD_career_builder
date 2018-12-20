<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\Factory;
use App\Job;
use App\Weight;
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
        $minage=$req->minage;
        $minage=$req->minage;
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
        $job->add($name,$gender,$minage,$minage,$career_id,$position_id,$salary,$experience,$soft_skill,$location,$description,$requirement,$benefits);
        return redirect('admin/them-cong-viec');
    }

    public function postEditWork(Request $req)
    {
        $job=Job::find($req->id);

        $name=$req->job_name;
        $gender=$req->gender;
        $minage=$req->minage;
        $minage=$req->minage;
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


        $job->edit($name,$gender,$minage,$minage,$career_id,$position_id,$salary,$experience,$soft_skill,$location,$description,$requirement,$benefits);
        return redirect('admin/trang-chu');
    }

    public function getDeleteJob($id)
    {
        $job=Job::find($id);
        $job->delete();
        return redirect('admin/trang-chu');
    }

    public function postListLocation(Request $req)
    {
        $gender=$req->gender;
        $experience=$req->experience;
        $age=$req->age;
        if ($gender==0) {
            $jobs=Job::where('gender',0)
            ->where('min_age','<=',$age)
            ->where('max_age','>=',$age)
            ->where('experience','<=',$experience)
            ->get();
        } else {
            $jobs=Job::whereRaw('min_age<='.$age.' and max_age>='.$age.' and experience<='.$experience.' and (gender=0 or gender='.$gender.')')
            ->get();
        }
        $locations=array();
        if(count($jobs)>0){
            foreach ($jobs as $job) {
                $locations[$job->id]=$job->location; 
            }
        }
        // echo count($locations);
        return $locations;

    }

    public function postSearchWork(Request $req)
    {
        $gender=$req->gender;
        $career_id=(int)$req->career_id;
        $location=$req->location;
        $position_id=(int)$req->position_id;
        $experience=(int)$req->experience;
        $salary=(int)$req->salary;
        $age=(int)$req->age;
        $soft_skill=(int)$req->soft_skill;
        $khoangcachs=array_filter(explode(",",$req->khoangcachs));
        // $khoangcachs=$req->khoangcachs;
        // var_dump($khoangcachs);
        // echo "Mã nghề: ".$career_id;
        // echo "Địa Điểm: ".$location;
        // echo "Mã cấp bậc:".$position_id;
        // echo "Kinh nghiệm:".$experience;
        // echo "Lương:".$salary;
        // echo "Tuổi:".$age;
        // var_dump($khoangcachs);
        $jobs=null;
        if ($gender==0) {
            $jobs=Job::where('gender',0)
            ->where('min_age','<=',$age)
            ->where('max_age','>=',$age)
            ->where('experience','<=',$experience)
            ->get();
        } else {
            $jobs=Job::whereRaw('min_age<='.$age.' and max_age>='.$age.' and experience<='.$experience.' and (gender=0 or gender='.$gender.')')
            ->get();
        }
        $weights=Weight::select('weight')->get()->toArray();
        //Đây là chỗ Topsis
        $mang_trong_so = [];
        foreach ($weights as $value) {
            $mang_trong_so[]=$value['weight'];
        }
        $careers = array();
        $careers[0] = [1  ,0.1,0.7,0.4,0.5,0.1,0.2,0.4,0.2,0.2];
        $careers[1] = [0.1, 1 ,0.2,0.5,0.6,0.6,0.7,0.5,0.3,0.2];
        $careers[2] = [0.7,0.4, 1 ,0.3,0.2,0.1,0.2,0.1,0.1,0.2];
        $careers[3] = [0.4,0.5,0.6, 1 ,0.6,0.4,0.5,0.4,0.2,0.3];
        $careers[4] = [0.5,0.6,0.2,0.6, 1 ,0.3,0.7,0.8,0.3,0.2];
        $careers[5] = [0.1,0.6,0.1,0.4,0.3, 1 ,0.1,0.1,0.6,0.3];
        $careers[6] = [0.2,0.7,0.2,0.5,0.7,0.1, 1 ,0.4,0.1,0.1];
        $careers[7] = [0.4,0.5,0.1,0.4,0.8,0.1,0.4, 1 ,0.1,0.1];
        $careers[8] = [0.2,0.3,0.1,0.2,0.3,0.6,0.1,0.1, 1 ,0.2];
        $careers[9] = [0.2,0.2,0.2,0.3,0.2,0.3,0.1,0.1,0.2, 1 ];

        $ages = array();
        $career_sim = array();
        $salarys = array();
        $distances = array();
        $experiences = array();
        $positions = array();
        $soft_skills = array();
        foreach ($jobs as $job) {
            $ages[] = ($job->minage - $age);
            $career_sim[] = $careers[$career_id][$job->career_id-1];
            $salarys[]= ($job->salary*1000000 - $salary);
            $distances[] = 1 / ($khoangcachs[$job->id]);
            $experiences[]=($experience - $job->experience);
            $positions[]=($job->position_id-$position_id);
            $soft_skills[]=($soft_skill - $job->soft_skill);
        }
        $ages_norm = 0;
        $career_sim_norm = 0;
        $salarys_norm = 0;
        $distances_norm = 0;
        $experiences_norm = 0;
        $positions_norm = 0;
        $soft_skill_norm = 0;
        for($i=0;$i<count($ages);$i++){
            $ages_norm += pow($ages[$i],2);
            $career_sim_norm += pow($career_sim[$i],2);
            $salarys_norm += pow($salarys[$i],2);
            $distances_norm += pow($distances[$i],2);
            $experiences_norm += pow($experiences[$i],2);
            $positions_norm += pow($positions[$i],2);
            $soft_skill_norm += pow($soft_skills[$i],2);
        }

        for($i=0;$i<count($ages);$i++){
            $ages[$i] /= sqrt($ages_norm);
            $career_sim[$i] /= sqrt($career_sim_norm);
            $salarys[$i] /= sqrt($salarys_norm);
            $distances[$i] /= sqrt($distances_norm);
            $experiences[$i] /= sqrt($experiences_norm);
            $positions[$i] /= sqrt($positions_norm);
            $soft_skills[$i] /= sqrt($soft_skill_norm);
        }

        for($i=0;$i<count($ages);$i++){
            $ages[$i] *= $mang_trong_so[0];
            $career_sim[$i] *=  $mang_trong_so[1];
            $salarys[$i] *= $mang_trong_so[2];
            $distances[$i] *= $mang_trong_so[3];
            $experiences[$i] *= $mang_trong_so[4];
            $positions[$i] *= $mang_trong_so[5];
            $soft_skills[$i] *= $mang_trong_so[6];
        }
        $best_ages = max($ages);
        $best_career_sim = max($career_sim);
        $best_salarys = max($salarys);
        $best_distances = max($distances);
        $best_experiences = max($experiences);
        $best_positions = max($positions);
        $best_soft_skills = max($soft_skills);

        $worst_ages = min($ages);
        $worst_career_sim = min($career_sim);
        $worst_salarys = min($salarys);
        $worst_distances = min($distances);
        $worst_experiences = min($experiences);
        $worst_positions = min($positions);
        $worst_soft_skills = min($soft_skills);

        $score = array();
        for($i=0;$i<count($ages);$i++){
            $s1 = sqrt(pow($ages[$i] - $best_ages, 2)
                +pow($career_sim[$i] - $best_career_sim, 2)
                +pow($salarys[$i] - $best_salarys ,2)
                +pow($distances[$i] - $best_distances, 2)
                +pow($experiences[$i] - $best_experiences, 2)
                +pow($positions[$i] - $best_positions, 2)
                +pow($soft_skills[$i] - $best_soft_skills, 2)
            );

            $s2 = sqrt(pow($ages[$i] - $worst_ages, 2)
                +pow($career_sim[$i] - $worst_career_sim, 2)
                +pow($salarys[$i] - $worst_salarys ,2)
                +pow($distances[$i] - $worst_distances, 2)
                +pow($experiences[$i] - $worst_experiences, 2)
                +pow($positions[$i] - $worst_positions, 2)
                +pow($soft_skills[$i] - $worst_soft_skills, 2)
            );

            $score[] = $s2/($s1+$s2);
        }
        $i = 0;
        $job_score = array();
        foreach ($jobs as $job) {
            $job_score[$job->id] = $score[$i];
            $i++;
        }
        // echo "<pre>";
        // var_dump($jobs);
        // var_dump($job_score);
        return view('client.pages.home',['jobs'=>$jobs, 'paginate'=>false]);  
    }
}
