<?php

namespace App\Controllers;

use App\Models\RegModel;
use App\Models\infoModel;
use App\Controllers\BaseController;

class LoginController extends BaseController
{
    private $user;
    private $info;

    public function __construct()
    {
   
        $this->user = new \App\Models\RegModel();
        $this->info = new \App\Models\infoModel();

    }
    public function login()
    {
        {
            session()->remove(['id','email', 'isLoggedIn', 'usertype']);
            helper(['form']);
            return view('login-register/login');
        }
     
    }
    public function registerview()
    {
        helper(['form']);
        $data = [];
        return view('login-register/register', $data);
    }
    public function register()
    {


        helper(['form']);

        $rules = [
            'email' => 'required|min_length[1]|max_length[100]',
            'Province' => 'required|min_length[1]|max_length[100]',
            'password' => 'required|min_length[8]|max_length[100]',
            're_password' => 'matches[password]'
        ];
        if ($this->validate($rules)) {
            $regmodel = new RegModel();

            $data = [
                'email' => $this->request->getVar('email'),
                'Province' => $this->request->getVar('Province'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                're_password' => password_hash($this->request->getVar('re_password'), PASSWORD_DEFAULT),
                'usertype' => $this->request->getVar('usertype')
            ];
            dd($regmodel);

            dd($regmodel->save($data));

            
            return redirect()->to('/signin');

        } else {
            $data['validation'] = $this->validator;
            return view('login-register/register', $data);
        }



    }
    public function loginauth()
    {
        $session = session();
        $regmodel = new RegModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');


        $data = $regmodel->where('email', $email)->first();

        if ($data) {
            $pass = $data['password'];
            $authenticatePassword = password_verify($password, $pass);

            if ($authenticatePassword) {
                $ses_data = [
                    'user_id' => $data['id'],
                    'email' => $data['email'],
                    'isLoggedIn' => TRUE,
                    'usertype' => $data['usertype'],

                ];

                $session->set($ses_data);

                if ($data['usertype'] === 'Admin') {
                    return redirect()->to('/admindashboard');
                } else if ($data['usertype'] === 'user') {
                    return redirect()->to('/dashboards');
                }
            } else {
                $session->setFlashdata('msg', 'Name or Password is incorrect.');

                return redirect()->to('/signin');
            }
        }
    }
    
    public function admindashboard()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/signin');
        } else {

            return view('adminfol/dashboard');
        }
    }


      
    public function dashboards()
    {
      
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/logins');
        
        } 
        $userId = session()->get('user_id');
        return view('userfol/dashboard');
    }


        



    public function Chat()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/signin');
        } else {

            return view('userinc/Chat');
        }
    }
        
    public function report()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/signin');
        } else {

            return view('userfol/report');
        }
    }
    public function ChangePassword()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/signin');
        } else {

            return view('userfol/ChangePassword');
        }
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
    
    public function save()
    {
        $userId = session()->get('user_id');
        

        // Validate the form data
        $validation = $this->validate([
            'names' => 'required',
            'location' => 'required',
            'cans' => 'required',
            'date' => 'required',
            'area' => 'required',
            'typhoon' => 'required',
            'heavy_rains' => 'required',
            'total_damages' => 'required',
            'cans_damages' => 'required',
            'standing_crop' => 'required',
            'transplate_date' => 'required',
            'expected_date' => 'required',
            'expected_area' => 'required',
            'expected_volumn' => 'required',
          
        ]);

        if (!$validation) {
            // Validation failed, return to the form with errors
            return view('userfol/Forms', ['validation' => $this->validator]);
        }

        // If validation passes, insert the data into the database
        $this->info->save([
            'names' => $this->request->getPost('names'),
            'location' => $this->request->getPost('location'),
            'cans' => $this->request->getPost('cans'),
            'date' => $this->request->getPost('date'),
            'area' => $this->request->getPost('area'),
            'typhoon' => $this->request->getPost('typhoon'),
            'heavy_rains' => $this->request->getPost('heavy_rains'),
            'total_damages' => $this->request->getPost('total_damages'),
            'cans_damages' => $this->request->getPost('cans_damages'),
            'standing_crop' => $this->request->getPost('standing_crop'),
            'transplate_date' => $this->request->getPost('transplate_date'),
            'expected_date' => $this->request->getPost('expected_date'),
            'expected_area' => $this->request->getPost('expected_area'),
            'expected_volumn' => $this->request->getPost('expected_volumn'),
            'user_id' => $userId,
          

        ]);

        // Redirect to a success page or display a success message
        return redirect()->to('/Forms')->with('success', 'Field added successfully');
    }
    public function edit($info)
    {
        // Load the product to be edited from the database
        $model = new infoModel();
        $info = $model->find($info);

        // Load the edit view with the product data
        return view('info', ['info' => $info]);
    }



  
}
