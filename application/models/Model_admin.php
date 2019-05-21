<?php   

class Model_admin extends CI_Model{	
	function masuk($user,$pass){
		$this->db->select('username,password,level');
		$this->db->from('tb_login');
		$this->db->where('username',$user);
		$this->db->where('password',$pass);
		$this->db->limit(1);
			$query = $this->db->get();
			if ($query->num_rows() == 1) {
				return $query->result();
			}else{
				return false;
			}
	}
	public function tampil_kegiatan() {
		return $this->db->get('tb_kegiatan')->result();
	}
	public function tampil_level() {
		return $this->db->get('tb_login')->result();
	}
	public function tampil_pelatihan(){
		return $this->db->get('tb_pelatihan')->result();
	}

	public function tampil_dashboard(){
		return $this->db->get('tb_fomulir')->result();
	}

	public function tampil_pengguna(){
		$this->db->where('sampah',0);
		$this->db->where('ket_status',0);
		$this->db->where('ket_peserta',0);
		return $this->db->get('tb_fomulir')->result();
	}

	public function input_pengguna($data, $table){
			$this->db->insert($table, $data);
	}

	public function hapus_pengguna($where, $table){
			$this->db->where($where);
			$this->db->delete($table);
	}

	public function edit_pengguna($where, $table){
		return $this->db->get_where($table, $where);
	}

	public function update_pengguna($where,$data,$table){
		$this->db->where($where);
		return 	$this->db->update($table,$data);
	}

	public function detail_pengguna($id = null){
			$this->db->select('tb_fomulir.*, tb_kegiatan.*,tb_pelatihan.*');
			$this->db->from('tb_fomulir');
			$this->db->join('tb_kegiatan', 'tb_fomulir.id_kegiatan = tb_kegiatan.id_kegiatan', 'inner');
			$this->db->join('tb_pelatihan', 'tb_fomulir.id_pelatihan = tb_pelatihan.id_pelatihan','inner');
			$this->db->where('id', $id);
			$query = $this->db->get()->row();
			return $query;
	}

	public function tampil_sampah(){
		$this->db->where('sampah' , 1); 
		return $this->db->get('tb_fomulir')->result();
	}

	public function show_peserta(){
		$this->db->where('ket_status' , 1); 
		return $this->db->get('tb_fomulir')->result();
	}

	public function tambah_akses($admin, $table){
			$this->db->insert($table, $admin);
	}

	public function tampil_akses(){
		return $this->db->get('tb_login')->result();
	}

	public function hapus_akses($where, $table){
			$this->db->where($where);
			$this->db->delete($table);
	}

	public function edit_akses($where, $table){
		return $this->db->get_where($table, $where);
	}

	public function update_akses($where,$admin,$table){
		$this->db->where($where);
		$this->db->update($table,$admin);
	}

	public function tampil_panitia(){
		$this->db->where('sampah',0);
		return $this->db->get('tb_panitia')->result();
	}
	public function tambah_panitia($panita,$table){
		$this->db->insert($table, $panita);
	}
	public function hapus_panitia($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	public function edit_panitia($where, $table){
		return $this->db->get_where($table, $where);
	}
	public function update_panitia($where,$panitia,$table){
		$this->db->where($where);
		$this->db->update($table,$panitia);
	}
	public function detail_panitia($id_panitia = null){
			$query = $this->db->get_where('tb_panitia', array('id_panitia' => $id_panitia))->row();
			return $query;
		
	}
	public function sampah_panitia(){
		$this->db->where('sampah' , 1); 
		return $this->db->get('tb_panitia')->result();
	}

}