<?php  
class Users extends CI_Controller{
	 function daftar(){
	 	$data = [
	 		'kegiatan' => $this->model_admin->tampil_kegiatan(),
	 		'pelatihan'=> $this->model_admin->tampil_pelatihan(),
	 	];
		$this->load->view('login/daftar', $data);
	}

	public function izin(){
		$this->load->model('model_admin');
		$izin['izin'] = $this->model_admin->tampil_formulir();
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('pengguna/izin',$izin);
			$this->load->view('admin/footer');
	}
	public function selesai(){
			$this->load->model('model_admin');
	 		$data['user'] = $this->model_admin->tampil_pengguna();
			$this->load->view('login/selesai');
	}
	public function dashboard(){
		$this->load->model('model_admin');
		$peserta['pengguna'] = $this->model_admin->tampil_dashboard();
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');	
			$this->load->view('dashboard',$peserta);
			$this->load->view('admin/footer');
	}
	public function pengguna(){
		$this->load->model('model_admin'); 
		$data['user'] = $this->model_admin->tampil_pengguna();
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('pengguna/datapengguna',$data);
			$this->load->view('admin/footer');
	}
	public function tambah_pengguna(){
			$nama 			= $this->input->post("nama");
			$tgl_lahir		= $this->input->post("tgl_lahir");
			$alamat 		= $this->input->post("alamat");
			$status 		= $this->input->post("status");
			$pendidikan 	= $this->input->post("pendidikan");
			$nohp 			= $this->input->post("nohp");
			$email 			= $this->input->post("email");
			$tinggi_bdn 	= $this->input->post("tinggi_bdn");
			$ukuran_baju 	= $this->input->post("ukuran_baju");
			$id_pelatihan 	= $this->input->post("id_pelatihan");
			$id_kegiatan	= $this->input->post("id_kegiatan");

			$data = array(	'nama' 			=> $nama,
							'tgl_lahir' 	=> $tgl_lahir,
							'alamat' 		=> $alamat,
							'status'		=> $status,
							'pendidikan'	=> $pendidikan,
							'nohp' 			=> $nohp,
							'email' 		=> $email,
							'tinggi_bdn' 	=> $tinggi_bdn,
							'ukuran_baju' 	=> $ukuran_baju,
							'id_pelatihan'  => $id_pelatihan,
							'id_kegiatan' 	=> $id_kegiatan,

		);
			$this->model_admin->input_pengguna($data, 'tb_fomulir');
			redirect('users/daftar');	 
		}
		public function hapus($id){
			$where = array('id' => $id);
			$this->model_admin->hapus_pengguna($where, 'tb_fomulir');
			redirect('users/pengguna');
	  }

		public function edit($id){
			$where = array('id' =>$id);
			$data['user'] = $this->model_admin->edit_pengguna($where,'tb_fomulir')->result();
			$data['kegiatan'] = $this->model_admin->tampil_kegiatan();
			$data['pelatihan']= $this->model_admin->tampil_pelatihan();
				$this->load->view('admin/header');
				$this->load->view('admin/sidebar');	
				$this->load->view('pengguna/edit_pengguna',$data);
				$this->load->view('admin/footer');
		}

		public function update(){

			$id 			= $this->input->post('id');
			$nama 			= $this->input->post("nama");
			$tgl_lahir		= $this->input->post("tgl_lahir");
			$alamat 		= $this->input->post("alamat");
			$status 		= $this->input->post("status");
			$pendidikan 	= $this->input->post("pendidikan");
			$nohp 			= $this->input->post("nohp");
			$email 			= $this->input->post("email");
			$tinggi_bdn 	= $this->input->post("tinggi_bdn");
			$ukuran_baju 	= $this->input->post("ukuran_baju");
			$id_pelatihan   = $this->input->post("id_pelatihan");
			$id_kegiatan 	= $this->input->post("id_kegiatan");

			$data = array(	'nama' 			=> $nama,
							'tgl_lahir' 	=> $tgl_lahir,
							'alamat' 		=> $alamat,
							'status'		=> $status,
							'pendidikan'	=> $pendidikan,
							'nohp' 			=> $nohp,
							'email' 		=> $email,
							'tinggi_bdn' 	=> $tinggi_bdn,
							'ukuran_baju' 	=> $ukuran_baju,
							'id_pelatihan'  => $id_pelatihan,
							'id_kegiatan' 	=> $id_kegiatan);
			$where = array(
				'id' => $id
			);
			
			if($this->model_admin->update_pengguna($where,$data,'tb_fomulir')) {
				redirect('users/pengguna');	
			}
				
	}
		public function detail($id){
		$this->load->model('model_admin');
		$detail = $this->model_admin->detail_pengguna($id);
		$data1['detail'] = $detail;
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');	
			$this->load->view('pengguna/detail', $data1);
			$this->load->view('admin/footer');
	}

	public function search(){
			$keyword = $this->input->post('keyword');
			$data1['user']= $this->model_admin->get_keyword($keyword);
				$this->load->view('admin/header');
				$this->load->view('admin/sidebar');	
				$this->load->view('pengguna/datapengguna', $data1);
				$this->load->view('admin/footer');
	}
	public function pdf(){
			$this->load->library('dompdf_gen');
	 	$data['user'] = $this->model_admin->tampil_pengguna('tb_fomulir');
			$this->load->view('pengguna/pengguna_pdf',$data);
				$paper_size 	= 'A4';
				$orientation 	= 'landscape';
				$html 			= $this->output->get_output();
			$this->dompdf->set_paper($paper_size,$orientation);
			$this->dompdf->load_html($html);
			$this->dompdf->render(); 
			$this->dompdf->stream('data_peserta.pdf', array('Attachment' => 0));
	} 
	public function sampah(){
		$this->load->model('model_admin');
		$data['user'] = $this->model_admin->tampil_sampah();
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('pengguna/sampah',$data);
			$this->load->view('admin/footer');
	}
	public function proses_sampah($id){
		$where = array('id' => $id);
		$data['sampah'] = 1;
		$this->db->where('id',$id);
		$this->db->update('tb_fomulir',$data);
		redirect('users/sampah');
	}
	public function restore_sampah($id){
		$where = array('id' => $id);
		$data['sampah'] = 0;
		$this->db->where('id',$id);
		$this->db->update('tb_fomulir',$data);
		redirect('users/pengguna');
	}	
	public function peserta(){
		$this->load->model('model_admin'); 
		$data['peserta'] = $this->model_admin->show_peserta();
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('pengguna/peserta',$data);
			$this->load->view('admin/footer');
	}
	public function proses_pengguna($id){
		$where = array('id' =>$id);
		$data['ket_peserta']=1;
		$this->db->where('id',$id);
		$this->db->update('tb_fomulir',$data);
		redirect('users/pengguna');
	}
	public function batal($id){
		$id = $this->uri->segment(3);
		$where = array('id' =>$id);
		$data['ket_status']=0;
		$this->db->where('id',$id);
		$this->db->update('tb_fomulir',$data);
		redirect('users/peserta');
	}
		function tolak(){   
		$id = $this->uri->segment(3);
		$tolak = $this->db->query("SELECT email FROM tb_fomulir WHERE id = $id")->row()->email;
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
		   $this->email->to($tolak);   // key
		   $this->email->subject('Konfirmasi tolak');   
		   $this->email->attach("http://localhost/pendaftaran/uploads/data_peserta.pdf");
		   $this->email->message("<h1> Hallo " . $tolak .'<br>' . '</h1>'.
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