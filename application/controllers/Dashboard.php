<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

  function __construct()
  {
      // Construct the parent class
      parent::__construct();
      $this->load->model('Crud');
  }

  public function index(){
    if($this->session->userdata('token') == ''){
      return redirect(base_url('dashboard/login'));
    }else{
      if($this->session->userdata('isLoginAdmin') == true){
        $data = [
          'username' => $this->session->userdata('username'),
          'title' => 'Dashboard | Home'
        ];
        $where = [
          'tingkat'=> $this->session->userdata('tingkat')
        ];
        $getUser['data'] = $this->Crud->readData('*','data',$where)->result();
        $getUser['count'] = $this->Crud->readData('*','data',$where)->num_rows();
        if ($getUser)
        {
            $this->load->view('dashboard',$getUser);
        }
        else
        {
          $this->load->view('dashboard');

        }

      }
    }
  }

  public function detail($id){
    if($this->session->userdata('token') == ''){
      return redirect(base_url('dashboard/login'));
    }else{
      if($this->session->userdata('isLoginAdmin') == true){
        $data = [
          'username' => $this->session->userdata('username'),
          'title' => 'Dashboard | Detail'
        ];

        $where = [
          'id'=> $id
        ];
        $getUserById['data'] = $this->Crud->readData('*','data',$where)->result();

        if($getUserById){
          $this->load->view('detail',$getUserById);
        }else{
          $this->load->view('detail');
        }
      }
    }
  }
  public function form(){
    if($this->session->userdata('token') == ''){
      return redirect(base_url('dashboard/login'));
    }else{
      if($this->session->userdata('isLoginAdmin') == true){
        $data = [
          'username' => $this->session->userdata('username'),
          'title' => 'Dashboard | Form'
        ];

        $this->load->view('form');
      }
    }
  }

  public function edit($id){
    if($this->session->userdata('token') == ''){
      return redirect(base_url('dashboard/login'));
    }else{
      if($this->session->userdata('isLoginAdmin') == true){
        $data = [
          'username' => $this->session->userdata('username'),
          'title' => 'Dashboard | Edit Form'
        ];
        $where = [
          'id'=> $id
        ];
        $getUserById['data'] = $this->Crud->readData('*','data',$where)->result();

        if($getUserById){
          $this->load->view('formedit',$getUserById);
        }else{
          $this->load->view('formedit');
        }
      }
    }
  }


  public function prosessubmit(){
    $dataCreate = [
      'namadepan' => $this->input->post('namadpn'),
      'namabelakang' => $this->input->post('namablkg'),
      'tempatlahir' => $this->input->post('tempatlahir'),
      'tanggal' => $this->input->post('tanggal'),
      'bulan' => $this->input->post('bulan'),
      'tahun' => $this->input->post('tahun'),
      'alamat' => $this->input->post('alamat'),
      'rt' => $this->input->post('rt'),
      'rw' => $this->input->post('rw'),
      'notelp' => $this->input->post('notelp'),
      'kelurahan' => $this->input->post('kelurahan'),
      'kecamatan' => $this->input->post('kecamatan'),
      'kabupaten' => $this->input->post('kabupaten'),
      'namadepansuami' => $this->input->post('namadepansuami'),
      'namabelakangsuami' => $this->input->post('namabelakangsuami'),
      'kedinasan' => $this->input->post('kedinasan'),
      'tingkat' => $this->input->post('tingkat'),
      'username' => $this->input->post('username'),
      'password' => $this->input->post('password'),
    ];

    $config = array(
      'upload_path' => "./uploads/",             //path for upload
      'allowed_types' => "gif|jpg|png|jpeg",   //restrict extension
      'max_size' => '10000',
      'max_width' => '10242',
      'max_height' => '768323',
      'file_name' => 'dwp_'.date('ymdhis')
      );

      $this->load->library('upload',$config);


      if($this->upload->do_upload('image')) 
          {
              $data = array('upload_data' => $this->upload->data());
              $path = $config['upload_path'].'/'.$data['upload_data']['orig_name'];
              $filename = $data['upload_data']['orig_name'];
              $dataCreate['image'] = $filename;
              $createUser = $this->Crud->createData('data',$dataCreate);
                
              if($createUser){
                echo ("<script LANGUAGE='JavaScript'>
                window.alert('Berhasil Menambahkan Data');
                window.location.href='".base_url('dashboard')."';
                </script>");
              }else{
                echo ("<script LANGUAGE='JavaScript'>
                window.alert('Gagal Menambahkan Data');
                window.location.href='".base_url('dashboard/form')."';
                </script>");
              }
          }
   
  }
  public function prosesedit($id){
  
    $where = [
      'id'=> $id
  ];
  $cekId = $this->Crud->readData('id','data',$where)->num_rows();

  if($cekId > 0){
    $dataCreate = [
      'namadepan' => $this->input->post('namadpn'),
      'namabelakang' => $this->input->post('namablkg'),
      'tempatlahir' => $this->input->post('tempatlahir'),
      'tanggal' => $this->input->post('tanggal'),
      'bulan' => $this->input->post('bulan'),
      'tahun' => $this->input->post('tahun'),
      'alamat' => $this->input->post('alamat'),
      'rt' => $this->input->post('rt'),
      'rw' => $this->input->post('rw'),
      'notelp' => $this->input->post('notelp'),
      'kelurahan' => $this->input->post('kelurahan'),
      'kecamatan' => $this->input->post('kecamatan'),
      'kabupaten' => $this->input->post('kabupaten'),
      'namadepansuami' => $this->input->post('namadepansuami'),
      'namabelakangsuami' => $this->input->post('namabelakangsuami'),
      'kedinasan' => $this->input->post('kedinasan'),
      'tingkat' => $this->input->post('tingkat'),
      'username' => $this->input->post('username'),
      'password' => $this->input->post('password'),
    ];

    $config = array(
      'upload_path' => "./uploads/",             //path for upload
      'allowed_types' => "gif|jpg|png|jpeg",   //restrict extension
      'max_size' => '10000',
      'max_width' => '10242',
      'max_height' => '768323',
      'file_name' => 'dwp_'.date('ymdhis')
      );

      $this->load->library('upload',$config);

      if($this->upload->do_upload('image')) 
          {
              $data = array('upload_data' => $this->upload->data());
              $path = $config['upload_path'].'/'.$data['upload_data']['orig_name'];
              $filename = $data['upload_data']['orig_name'];
              $dataCreate['image'] = $filename;
              $updateData = $this->Crud->updateData('data',$dataCreate,$where);
              if($updateData){
                echo ("<script LANGUAGE='JavaScript'>
                  window.alert('Berhasil Mengubah Data');
                  window.location.href='".base_url('dashboard')."';
                  </script>");
              }else{
                echo ("<script LANGUAGE='JavaScript'>
                  window.alert('Gagal Menambahkan Data');
                  window.location.href='".base_url('dashboard')."';
                  </script>");
              }
          }
        else{
          $updateData = $this->Crud->updateData('data',$dataCreate,$where);
          if($updateData){
            echo ("<script LANGUAGE='JavaScript'>
              window.alert('Berhasil Mengubah Data');
              window.location.href='".base_url('dashboard')."';
              </script>");
          }else{
            echo ("<script LANGUAGE='JavaScript'>
              window.alert('Gagal Menambahkan Data');
              window.location.href='".base_url('dashboard')."';
              </script>");
          }
        }

    
  }
  }

  public function login (){
    if($this->session->userdata('token')){
      return redirect(base_url('dashboard'));
    }
    return $this->load->view('login');
  }

  public function prosesLogin(){
    $url = base_url('/api/auth/login');

		$username = $this->input->post('username');
		$password = $this->input->post('password');

    $data = array(
            'username'      => $username,
            'password' => $password 
    );

    $data_string = json_encode($data);

    $curl = curl_init($url);

    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");

    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
      'Content-Type: application/json',
      'Content-Length: ' . strlen($data_string))
    );

    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);  // Make it so the data coming back is put into a string
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);  // Insert the data

    // Send the request
    $result = curl_exec($curl);

    // Free up the resources $curl is using
    curl_close($curl);

    $cekLogin = json_decode($result,true);

    if(isset($cekLogin['status'])){
      echo ("<script LANGUAGE='JavaScript'>
          window.alert('Invalid Login');
          window.location.href='".base_url('dashboard/login')."';
          </script>");
      return;
    }
    if(isset($cekLogin['token'])){
        $this->session->set_userdata('token', $cekLogin['token']);
        $this->session->set_userdata('username', $username);
        $this->session->set_userdata('tingkat', $cekLogin['tingkat']);
        $this->session->set_userdata('isLoginAdmin', true);
        return redirect(base_url('dashboard'));
    }
   
  }

  public function logout(){
    if($this->session->userdata('token')){
      session_destroy();
    }
    return redirect(base_url('dashboard/login'));
  }
  

  public function delete($id){
    if($this->session->userdata('token') == ''){
      return redirect(base_url('dashboard/login'));
    }else{
      if($this->session->userdata('isLoginAdmin') == true){
      
      $where = [
          'id'=> $id
      ];
      $cekId = $this->Crud->readData('id','data',$where)->num_rows();

        if($cekId > 0){

          $this->Crud->deleteData('data',$where);

          echo ("<script LANGUAGE='JavaScript'>
          window.alert('Berhasil Menghapus Data');
          window.location.href='".base_url('dashboard')."';
          </script>");
        }else{
          echo ("<script LANGUAGE='JavaScript'>
          window.alert('Gagal Menambahkan Data');
          window.location.href='".base_url('dashboard')."';
          </script>");
        }
      }
    }
  }

 

}
