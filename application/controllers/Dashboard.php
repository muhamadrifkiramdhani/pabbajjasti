<?php 

class Dashboard extends CI_Controller{
	 function tampil_level(){
	 	$admin = [
	 		'role' => $this->model_admin->tampil_level(),
	 	];
		$this->load->view('akses/admin',$admin);
	}
		public function akses(){ 
		$this->load->model('model_admin');  
		$admin['admin'] = $this->model_admin->tampil_akses();
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('akses/admin',$admin);
			$this->load->view('admin/footer');
	}
	public function tambah_akses(){
		$nama 		= $this->input->post('nama');
		$username 	= $this->input->post('username');
		$password 	= $this->input->post('password');
		$email 		= $this->input->post('email');
		$level 		= $this->input->post('level');
			$data = array(	'nama' 		=> $nama,
							'username'	=> $username,
							'password'	=> $password,
							'email'		=> $email,
							'level'		=> $level,
			 );
			$this->model_admin->tambah_akses($data, 'tb_login');
			redirect('dashboard/akses');
	} 
			public function hapus($id_akses){
			$where = array('id_akses' => $id_akses);
			$this->model_admin->hapus_akses($where, 'tb_login');
			redirect('dashboard/akses');
	}
		public function edit_akses($id_akses){
			$where = array('id_akses' =>$id_akses);
			$admin['admin'] = $this->model_admin->edit_akses($where,'tb_login')->result();
				$this->load->view('admin/header');
				$this->load->view('admin/sidebar');	
				$this->load->view('akses/edit',$admin);
				$this->load->view('admin/footer');
		}
		public function update_akses(){
			$id 			= $this->input->post('id_akses');
			$nama 			= $this->input->post('nama');
			$username		= $this->input->post('username');
			$password		= $this->input->post('password');
			$level			= $this->input->post('level');
			$data = array(	'id_akses'		=> $id_akses,
							'nama' 			=> $nama,
							'username'		=> $username,
							'password'		=> $password,
							'level'			=> $level);
			$where = array(
				'id_akses' => $id_akses
			);
			$this->model_admin->update_akses($where,$data,'tb_login');
			redirect('dashboard/akses');

	}
		public function selesai(){
			$this->load->model('model_admin');
	 		$akses['akses'] = $this->model_admin->tampil_akses();
			$this->load->view('login/selesai');
		}
		function send(){   
		$id = $this->uri->segment(3);
		$where = array('id' =>$id);
		$data['ket_status']=1;
		$this->db->where('id',$id);
		$this->db->update('tb_fomulir',$data);
		
		$terima = $this->db->query("SELECT email FROM tb_fomulir WHERE id = $id")->row()->email;
		$nama = $this->db->query("SELECT nama FROM tb_fomulir WHERE id = $id")->row()->nama;
		$tgl_lahir = $this->db->query("SELECT tgl_lahir FROM tb_fomulir where id=$id")->row()->tgl_lahir;
	    $alamat = $this->db->query("SELECT alamat FROM tb_fomulir where id=$id")->row()->alamat;
	    $pendidikan = $this->db->query("SELECT pendidikan FROM tb_fomulir where id=$id")->row()->pendidikan;
		$nohp = $this->db->query("SELECT nohp FROM tb_fomulir where id=$id")->row()->nohp;
		$tinggi_bdn = $this->db->query("SELECT tinggi_bdn FROM tb_fomulir where id=$id")->row()->tinggi_bdn;
		$ukuran_baju = $this->db->query("SELECT ukuran_baju FROM tb_fomulir where id=$id")->row()->ukuran_baju;
	  	$jns_pelatihan = $this->db->query("SELECT jns_pelatihan FROM tb_fomulir where id=$id")->row()->jns_pelatihan;
		$nama_keg = $this->db->query("SELECT nama_keg FROM tb_fomulir where id=$id")->row()->nama_keg;
		   
		   $config = Array(  
		    'protocol' 	=> 'smtp',  
		    'smtp_host' => 'ssl://smtp.googlemail.com',  
		    'smtp_port' => 465,  
		    'smtp_user' => 'pabbajjasti@gmail.com',   
		    'smtp_pass' => 'pabbajjasti@2019',
		    'mailtype' 	=> 'html',    
		    'charset' 	=> 'iso-8859-1',
		    'newline'	=> '\r\n',
		    'mailtype'	=> 'html'  
		   );  
		   $this->load->library('email', $config);  
		   $this->email->set_newline("\r\n");  
		   $this->email->from('rizkyoktavius@gmail.com', 'Admin Pabbajjasti');  
		   $this->email->to($terima);   // key
		   $this->email->subject('Konfirmasi terima');   
		   $this->email->attach("http://localhost/pendaftaran/uploads/data_peserta.pdf");
		   $this->email->message("<h1> Hallo " . $terima .'<br>' . '</h1>'.
		   							'<p>'. '<br>'.
		   							'Terimakasih Sudah Mendaftar :' . '<br>' .
		   							"Nama 							:" . $nama . '<br>' . 	
		   							"Tanggal Lahir 					:" . $tgl_lahir .'<br>'.				
		   							"Alamat 						:" . $alamat . '<br>' .
		   							"pendidikan 					:" . $pendidikan .'<br>'.
		   							"No Handphone 					:" . $nohp .'<br>'.
		   							"Tinggi Bandan 					:" . $tinggi_bdn .'cm'. '<br>'.
		   							"Ukuran Baju 					:" . $ukuran_baju .'<br>'.
		   							"Kegiatan yang ditempuh			:" . $nama_keg . '<br>'.
		   							"Jenis Pelatihan yang di pilih 	:" . $jns_pelatihan .'<br>');
		   if (!$this->email->send()) {  
		    show_error($this->email->print_debugger());   
		   }else{  
		    	  redirect(base_url('users/pengguna'));
		   } 
		}	
		
}