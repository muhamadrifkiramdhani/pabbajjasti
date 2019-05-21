<?php 
	class Panitia extends CI_Controller{
	public function show_panitia(){
		$this->load->model('model_admin');
		$panitia['panitia'] = $this->model_admin->tampil_panitia();
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');	
			$this->load->view('panitia/datapanitia',$panitia);
			$this->load->view('admin/footer');
	}
	public function tambah(){
			$nama 			= $this->input->post("nama");
			$jk				= $this->input->post('jk');
			$nohp 			= $this->input->post("nohp");
			$email 			= $this->input->post("email");
			$id_pelatihan   = $this->input->post("id_pelatihan");
			$id_kegiatan	= $this->input->post("id_kegiatan");
			$data = array(	'nama' 			=> $nama,
							'jk' 			=> $jk,
							'nohp' 			=> $nohp,
							'email' 		=> $email,
							'id_pelatihan'  => $id_pelatihan,
							'id_kegiatan' 	=> $id_kegiatan,
		);
			$this->model_admin->tambah_panitia($data, 'tb_panitia');
			redirect('panitia/panitia/show_panitia');	 
		}
	public function hapus($id_panitia){
			$where = array('id_panitia' => $id_panitia);
			$this->model_admin->hapus_panitia($where, 'tb_panitia');
			redirect('panitia/panitia/show_panitia');
	  }
	public function edit($id_panitia){
			$where = array('id_panitia' =>$id_panitia);
			$panitia['panitia'] = $this->model_admin->edit_panitia($where,'tb_panitia')->result();
			$panitia['kegiatan'] = $this->model_admin->tampil_kegiatan();
			$panitia['pelatihan']= $this->model_admin->tampil_pelatihan();
				$this->load->view('admin/header');
				$this->load->view('admin/sidebar');	
				$this->load->view('panitia/edit',$panitia);
				$this->load->view('admin/footer');
	}
	public function update(){
			$id_panitia 	= $this->input->post('id_panitia');
			$nama 			= $this->input->post("nama");
			$jk				= $this->input->post('jk');
			$alamat 		= $this->input->post("alamat");
			$nohp 			= $this->input->post("nohp");
			$email 			= $this->input->post("email");
			$id_pelatihan   = $this->input->post("id_pelatihan");
			$id_kegiatan 	= $this->input->post("id_kegiatan");
			$data = array(	'nama' 			=> $nama,
							'jk' 			=> $jk,
							'nohp' 			=> $nohp,
							'email' 		=> $email,
							'id_pelatihan'  =>  $id_pelatihan,
							'id_kegiatan' 	=> $id_kegiatan);
			$where = array(
				'id_panitia' => $id_panitia
			);
			$this->model_admin->update_panitia($where,$data,'tb_panitia');
			redirect('panitia/panitia/show_panitia');	
	}
	public function detail($id_panitia){
		$this->load->model('model_admin');
		$detail = $this->model_admin->detail_panitia($id_panitia);
		$panitia1['panitia'] = $detail;
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');	
			$this->load->view('panitia/detail', $panitia1);
			$this->load->view('admin/footer');
	}
	public function sampah(){
		$this->load->model('model_admin');
		$panitia['panitia'] = $this->model_admin->sampah_panitia();
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('panitia/sampah',$panitia);
			$this->load->view('admin/footer');
	}
	public function sampah_panitia($id_panitia){
		$where = array('id_panitia' => $id_panitia);
		$panitia['sampah']=1;
		$this->db->where('id_panitia',$id_panitia);
		$this->db->update('tb_panitia',$panitia);
		redirect('panitia/panitia/show_panitia');
	}
	public function restore_panitia($id_panitia){
		$where = array('id_panitia' => $id_panitia);
		$data['sampah'] = 0;
		$this->db->where('id_panitia',$id_panitia);
		$this->db->update('tb_panitia',$data);
		redirect('panitia/panitia/sampah');
	}	
}
	