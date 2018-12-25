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

    public function postEditWeight(Request $req)
    {
        $w_age=Weight::where('name','age')->update(['weight'=>$req->age]);

        $w_career_sim=Weight::where('name','career_sim')->update(['weight'=>$req->career_sim]);

        $w_salary=Weight::where('name','salary')->update(['weight'=>$req->salary]);

        $w_distance=Weight::where('name','distance')->update(['weight'=>$req->distance]);

        $w_experience=Weight::where('name','experience')->update(['weight'=>$req->experience]);

        $w_soft_skill=Weight::where('name','soft_skill')->update(['weight'=>$req->soft_skill]);

        $w_position=Weight::where('name','position')->update(['weight'=>$req->position]);

        return redirect('admin/sua-trong-so');
    }

    public function getEditWork($id)
    {
        $job=Job::find($id);
    	return view('admin.pages.edit_work',['job'=>$job]);
    }

    public function getEdit()
    {
        $weights=Weight::all();
        $w=[];
        foreach ($weights as $weight) {
            $w[$weight->name]=$weight->weight;
        }
    	return view('admin.pages.edit_trong_so',['weights'=>$w]);
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
        if ($gender==null || $experience==null || $age==null) {
            return 1;
        } else {
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
            else{
                return 1;
            }
            return $locations;
        }
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

        $age_w=$req->age_w;
        if($age_w == 0){
            $age_w = 0.0001;
        }
        $career_sim_w = $req->career_sim_w;
        if($career_sim_w == 0){
            $career_sim_w = 0.0001;
        }
        $salary_w = $req->salary_w;
        if($salary_w == 0){
            $salary_w = 0.0001;
        }
        $distance_w = $req->distance_w;
        if($distance_w == 0){
            $distance_w = 0.0001;
        }
        $experience_w = $req->experience_w;
        if($experience_w == 0){
            $experience_w = 0.0001;
        }
        $position_w = $req->position_w;
        if($position_w == 0){
            $position_w = 0.0001;
        }
        $soft_skill_w=$req->soft_skill_w;
        if($soft_skill_w == 0){
            $soft_skill_w = 0.0001;
        }
        $sex_w = $req->sex_w;
        if($sex_w == 0){
            $sex_w = 0.0001;
        }
        
        $weights=Weight::select('weight')->get()->toArray();
        //Đây là chỗ Topsis
        $mang_trong_so = [];
        foreach ($weights as $value) {
            $mang_trong_so[]=$value['weight'] ;
        }

        $sum_weights =  $mang_trong_so[0] * $age_w / 5 + 
                        $mang_trong_so[1] * $career_sim_w / 5 + 
                        $mang_trong_so[2] * $salary_w / 5 + 
                        $mang_trong_so[3] * $distance_w / 5 + 
                        $mang_trong_so[4] * $experience_w / 5 + 
                        $mang_trong_so[5] * $position_w / 5 + 
                        $mang_trong_so[6] * $soft_skill_w / 5; 
                        

        $mang_trong_so[0] = ($mang_trong_so[0] * $age_w/5) / $sum_weights;
        $mang_trong_so[1] = ($mang_trong_so[1] * $career_sim_w/5) / $sum_weights;
        $mang_trong_so[2] = ($mang_trong_so[2] * $salary_w/5) / $sum_weights;
        $mang_trong_so[3] = ($mang_trong_so[3] * $distance_w/5) / $sum_weights;
        $mang_trong_so[4] = ($mang_trong_so[4] * $experience_w/5) / $sum_weights;
        $mang_trong_so[5] = ($mang_trong_so[5] * $position_w/5) / $sum_weights;
        $mang_trong_so[6] = ($mang_trong_so[6] * $soft_skill_w/5) / $sum_weights;
        

        $data_input=['gender'=>$gender,
                    'career_id'=>$career_id,
                    'location'=>$location,
                    'position_id'=>$position_id,
                    'experience'=>$experience,
                    'salary'=>$salary,
                    'age'=>$age,
                    'soft_skill'=>$soft_skill,
                    'age_w'=>$age_w,
                    'career_sim_w'=>$career_sim_w,
                    'salary_w'=>$salary_w,
                    'distance_w'=>$distance_w,
                    'experience_w'=>$experience_w,
                    'position_w'=>$position_w,
                    'soft_skill_w'=>$soft_skill_w,
                    'sex_w'=>$sex_w
                ];


        $careers = array();
        $careers[0] = [1    ,0.001,0.4  ,0.15 ,0.2  ,0.001,0.01 ,0.15 ,0.01 ,0.01 ];
        $careers[1] = [0.001, 1   ,0.01 ,0.2  ,0.3  ,0.3  ,0.4  ,0.2  ,0.1  ,0.01 ];
        $careers[2] = [0.4  ,0.15 , 1   ,0.1  ,0.01 ,0.001,0.01 ,0.001,0.001,0.01 ];
        $careers[3] = [0.15 ,0.2  ,0.3  , 1   ,0.3  ,0.15 ,0.2  ,0.15 ,0.01 ,0.1  ];
        $careers[4] = [0.2  ,0.3  ,0.01 ,0.3  , 1   ,0.1  ,0.4  ,0.5  ,0.1  ,0.01 ];
        $careers[5] = [0.001,0.3  ,0.001,0.15 ,0.1  , 1   ,0.001,0.001,0.3  ,0.1  ];
        $careers[6] = [0.01 ,0.4  ,0.01 ,0.2  ,0.4  ,0.001, 1   ,0.15 ,0.001,0.001];
        $careers[7] = [0.15 ,0.2  ,0.001,0.15 ,0.8  ,0.001,0.15 , 1   ,0.001,0.001];
        $careers[8] = [0.01 ,0.1  ,0.001,0.01 ,0.1  ,0.3  ,0.001,0.001, 1   ,0.01 ];
        $careers[9] = [0.01 ,0.01 ,0.01 ,0.1  ,0.01 ,0.1  ,0.001,0.001,0.01 , 1   ];

        $ages = array();
        $career_sim = array();
        $salarys = array();
        $distances = array();
        $experiences = array();
        $positions = array();
        $soft_skills = array();
        foreach ($jobs as $job) {
            $ages[] = ($job->minage - $age);
            $career_sim[] = $careers[$career_id-1][$job->career_id-1];
            $salarys[]= ($job->salary*1000000 - $salary);
            $distances[] = 1 / ($khoangcachs[$job->id]+0.1);
            $experiences[]=($experience - $job->experience);
            $positions[]=($job->position_id-$position_id) +0.1;
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
        $job_score = [];
        foreach ($jobs as $job) {
            $job_score[$job->id] = $score[$i];
            // echo $job->id.'-';
            $i++;
        }
        arsort($job_score);
        // var_dump($job_score);
        $jobs_sorted = [];
        foreach($job_score as $key => $value){
            // var_dump($key);
            if($value > 0.5){
                foreach ($jobs as $job) {
                    if($job->id == $key){
                        $jobs_sorted[] = $job;
                    }
                }
            }
        }
        // echo "<pre>";
        // var_dump($jobs_sorted);
        // var_dump($job_score);
        return view('client.pages.home',['jobs'=>$jobs_sorted, 'paginate'=>false, 'data_input'=>$data_input]);  
    }
}
