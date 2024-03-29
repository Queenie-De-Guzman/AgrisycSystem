<?php

namespace App\Controllers;

use App\Models\RegModel;
use App\Models\infoModel;
use App\Controllers\BaseController;

class FormController extends BaseController
{
    private $user;
    private $info;

    public function __construct()
    {
   
        $this->user = new \App\Models\RegModel();
        $this->info = new \App\Models\infoModel();

    }
 

    // form ito ang simula nun save edit update delete
    public function Forms()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/signin');
        } 
        $userId = session()->get('user_id');

        $data = [
            'info' => $this->info->where('user_id', $userId)->findAll()
        ];
        return view('userfol/Forms', $data);
    }


    public function add($id = null){


        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/signin');
        } 
        $userId = session()->get('user_id');
           // Validate the form data
           $validation = $this->validate([
            'names' => 'required',
            'region' => 'required',
            'province' => 'required',
            'city' => 'required',
            'barangay' => 'required',
            'cans' => 'required',
            'varia' => 'required',
            'date' => 'required',
            'act' => 'required',
            'area' => 'required',
            'typhoonname' => 'required',
            'typhoon' => 'required',
            'heavy_rains' => 'required',
            'total_damages' => 'required',
            'cans_damages' => 'required',
            'HA' => 'required',
            'disease' => 'required',
            'list' => 'required',
            'per' => 'required',
            'standing_crop' => 'required',
            'planted' => 'required',
            'transplate_date' => 'required',
            'expected_date' => 'required',
            'production' => 'required',
            'Harvested' => 'required',
            'expected_volumn' => 'required',
            'Local' => 'required',
            'per_kg' => 'required',
            'php_per_kg' => 'required',
            'Cold' => 'required',
            'perkg' => 'required',
            'phpper_kg' => 'required',
            'OTHERS' => 'required',
           
        ]);

        if (!$validation) {
            // Validation failed, return to the form with errors
            return view('userfol/Forms', ['validation' => $this->validator]);
        }




        $id =$_POST['id'];
        $data = [
            'code' => $this->request->getVar('code'),
            'names' => $this->request->getPost('names'),
            'region' => $this->request->getPost('region_text'),
            'province' => $this->request->getPost('province_text'),
            'city' => $this->request->getPost('city_text'),
            'barangay' => $this->request->getPost('barangay_text'),
            'cans' => $this->request->getPost('cans'),
            'varia' => $this->request->getPost('varia'),
            'date' => $this->request->getPost('date'),
            'act' => $this->request->getPost('act'),
            'area' => $this->request->getPost('area'),
            'typhoonname' => $this->request->getPost('typhoonname'),
            'typhoon' => $this->request->getPost('typhoon'),
            'heavy_rains' => $this->request->getPost('heavy_rains'),
            'total_damages' => $this->request->getPost('total_damages'),
            'cans_damages' => $this->request->getPost('cans_damages'),
            'HA' => $this->request->getPost('HA'),
            'disease' => $this->request->getPost('disease'),
            'list' => $this->request->getPost('list'),
            'per' => $this->request->getPost('per'),
            'standing_crop' => $this->request->getPost('standing_crop'),
            'planted' => $this->request->getPost('planted'),
            'transplate_date' => $this->request->getPost('transplate_date'),
            'expected_date' => $this->request->getPost('expected_date'),
            'production' => $this->request->getPost('production'),
            'Harvested' => $this->request->getPost('Harvested'),
            'expected_volumn' => $this->request->getPost('expected_volumn'),
            'Local' => $this->request->getPost('Local'),
            'per_kg' => $this->request->getPost('per_kg'),
            'php_per_kg' => $this->request->getPost('php_per_kg'),
            'Cold' => $this->request->getPost('Cold'),
            'perkg' => $this->request->getPost('perkg'),
            'phpper_kg' => $this->request->getPost('phpper_kg'),
            'OTHERS' => $this->request->getPost('OTHERS'),
            'user_id' => $userId,
          
        ];
        if($id!= null)
        {
            $this->info->set($data)->where('id',$id)->update();
        }else
        {
        $this->info->save($data);
        }
        return redirect()->to('/Forms')->with('success', 'Report added successfully');
    }








    
    public function save()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/signin');
        } 
        $userId = session()->get('user_id');
        

        // Validate the form data
        $validation = $this->validate([
            'names' => 'required',
            'region' => 'required',
            'province' => 'required',
            'city' => 'required',
            'barangay' => 'required',
            'cans' => 'required',
            'varia' => 'required',
            'date' => 'required',
            'act' => 'required',
            'area' => 'required',
            'typhoonname' => 'required',
            'typhoon' => 'required',
            'heavy_rains' => 'required',
            'total_damages' => 'required',
            'cans_damages' => 'required',
            'HA' => 'required',
            'disease' => 'required',
            'list' => 'required',
            'per' => 'required',
            'standing_crop' => 'required',
            'planted' => 'required',
            'transplate_date' => 'required',
            'expected_date' => 'required',
            'production' => 'required',
            'Harvested' => 'required',
            'expected_volumn' => 'required',
            'Local' => 'required',
            'per_kg' => 'required',
            'php_per_kg' => 'required',
            'Cold' => 'required',
            'perkg' => 'required',
            'phpper_kg' => 'required',
            'OTHERS' => 'required',
           
        ]);

        if (!$validation) {
            // Validation failed, return to the form with errors
            return view('userfol/Forms', ['validation' => $this->validator]);
        }

        // If validation passes, insert the data into the database
        $this->info->save([
            'names' => $this->request->getPost('names'),
            'region' => $this->request->getPost('region_text'),
            'province' => $this->request->getPost('province_text'),
            'city' => $this->request->getPost('city_text'),
            'barangay' => $this->request->getPost('barangay_text'),
            'cans' => $this->request->getPost('cans'),
            'varia' => $this->request->getPost('varia'),
            'date' => $this->request->getPost('date'),
            'act' => $this->request->getPost('act'),
            'area' => $this->request->getPost('area'),
            'typhoonname' => $this->request->getPost('typhoonname'),
            'typhoon' => $this->request->getPost('typhoon'),
            'heavy_rains' => $this->request->getPost('heavy_rains'),
            'total_damages' => $this->request->getPost('total_damages'),
            'cans_damages' => $this->request->getPost('cans_damages'),
            'HA' => $this->request->getPost('HA'),
            'disease' => $this->request->getPost('disease'),
            'list' => $this->request->getPost('list'),
            'per' => $this->request->getPost('per'),
            'standing_crop' => $this->request->getPost('standing_crop'),
            'planted' => $this->request->getPost('planted'),
            'transplate_date' => $this->request->getPost('transplate_date'),
            'expected_date' => $this->request->getPost('expected_date'),
            'production' => $this->request->getPost('production'),
            'Harvested' => $this->request->getPost('Harvested'),
            'expected_volumn' => $this->request->getPost('expected_volumn'),
            'Local' => $this->request->getPost('Local'),
            'per_kg' => $this->request->getPost('per_kg'),
            'php_per_kg' => $this->request->getPost('php_per_kg'),
            'Cold' => $this->request->getPost('Cold'),
            'perkg' => $this->request->getPost('perkg'),
            'phpper_kg' => $this->request->getPost('phpper_kg'),
            'OTHERS' => $this->request->getPost('OTHERS'),
            'user_id' => $userId,
          

        ]);

        // Redirect to a success page or display a success message
        return redirect()->to('/Forms')->with('success', 'Report added successfully');
    }










    public function edit($id)
    {   $data=
    [
      'info' => $this->info->findAll(),
      'in'=> $this->info->where('id',$id)->first(),
    ];
    return view('userfol/Forms',$data);
   }


    
    

    public function deletereport($id)
    {
        $this->info->delete($id);
        return redirect()->to('/Forms')->with('success', 'Report deleted successfully');
    }

  public function up(){

    return view('userinc/up');
  } 
}
