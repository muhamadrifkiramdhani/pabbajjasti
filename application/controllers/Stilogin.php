<?php  
class Stilogin extends CI_Controller{
	function __construct(){

		parent::__construct();	
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('model_admin');
		$this->load->library('session');
	}

	function index(){
		$this->load->view('login');
	}
	function proses_login(){
		$user = $this->input->post('username');
		$pass = $this->input->post('password');
			$cekmasuk = $this->model_admin->masuk($user,$pass);
				if($cekmasuk){
					foreach ($cekmasuk as $cek ) {
						$this->session->set_userdata('username',$cek->username);
						$this->session->set_userdata('level',	$cek->level);
					}
					if ($this->session->userdata('level')=='admin') {
						redirect('users/dashboard');
					}elseif ($this->session->userdata('level')=='member') {
						redirect('dashboard/selesai');
					}else{
						$this->load->view('stilogin/index');
					}
				}
		}

	function logout(){
		$this->session->sess_destroy();
		redirect('stilogin/index'); 
	}

	function konfir(){   
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