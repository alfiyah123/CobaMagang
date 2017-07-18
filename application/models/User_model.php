<?php
class User_model extends CI_model{
	var $table = 'magang';
	var $table1 = 'anggota';
	var $table2 = 'organisasi';
	var $table3 = 'training';
	var $table4 = 'penelitian';
	var $table5 = 'kelebihan';
	var $table6 = 'kelemahan';
	var $table7 = 'layout_user';
	var $tableRekap = 'rekap';
	var $id_for_other;
	var $id_anggota_other = array();
	var $jj = 0;
	var $data1 = array();
	var $data2 = array();
	var $data3 = array();
	var $data4 = array();
	var $data5 = array();
	var $data6 = array();
	var $data7 = array();
	var $data8 = array();
	var $data11 = array();
	var $data21 = array();
	var $data31 = array();
	var $data41 = array();
	var $data51 = array();
	var $data61 = array();
	var $data71 = array();
	var $data81 = array();
	var $data1a = array();
	var $data1b = array();
	var $data2b = array();
	var $data3b = array();
	var $data4b = array();
	var $data5b = array();
	var $data6b = array();
	var $data7b = array();
	var $data8b = array();
	var $data9b = array();
	var $data10b = array();
	var $data11b = array();
	var $data21b = array();
	var $data31b = array();
	var $data41b = array();
	var $data51b = array();
	var $data61b = array();
	var $data71b = array();
	var $data81b = array();
	var $data91b = array();
	var $data101b = array();

	function saveData(){
		session_start('save_data');
		$this->db->from($this->table);

		$id = $this->db->get();

		if($id->num_rows() < 1){
			$_SESSION['id_magang'] = 1;
		}else{
			$this->db->from($this->table)->select_max('id_magang');
			$query = $this->db->get();
			foreach ($query->result_array() as $row) {
				$_SESSION['id_magang'] = $row['id_magang'] + 1;
			}
		}

		$this->db->from($this->table)->select_max('id_magang');
		$query = $this->db->get();
		foreach ($query->result() as $key) {
			$id_nomor = $key->id_magang;
		}

		$this->db->from($this->table)->where('id_magang', $id_nomor);
		$query = $this->db->get();
		foreach ($query->result() as $key) {
			$tahundb = $key->tahun_surat_konfirmasi;
		}

		$bulan = date('m');
		$tahun = date('Y');

		if($tahun != $tahundb){
			$no_surat_konfirmasi = 1;
		}else{
			$this->db->from($this->table);

			$id = $this->db->get();

			if($id->num_rows() < 1){
				$no_surat_konfirmasi = 1;
			}else{
				$this->db->from($this->table)->where('id_magang', $id_nomor);
				$query = $this->db->get();
				foreach ($query->result() as $key) {
					$no_surat_konfirmasi = $key->no_surat_konfirmasi + 1;
				}
			}
		}

		$data1['no_surat_konfirmasi'] = $no_surat_konfirmasi;
		$data1['bulan_surat_konfirmasi'] = $bulan;
		$data1['tahun_surat_konfirmasi'] = $tahun;					
		$data1['id_magang'] = $_SESSION['id_magang'];
		$data1['email'] = $this->input->post('email');
		$data1['password'] = $this->input->post('password');
		$data1['tipe'] = $this->input->post('tipe');
		$data1['anggota'] = $this->input->post('anggota');
		$data1['unit'] = $this->input->post('unit');
		$data1['tgl_masuk'] = $this->input->post('tgl_masuk');
		$data1['tgl_mulai'] = $this->input->post('tgl_mulai');
		$data1['tgl_keluar'] = $this->input->post('tgl_keluar');

		$this->db->insert($this->table, $data1);

//-----------------------------------------------------------------------

		$data1a['program'] = $this->input->post('program');
		$data1a['judul_penulisan'] = $this->input->post('judul_penulisan');

		if($data1a['program'] != null && $data1a['judul_penulisan'] != null){

			$this->db->from($this->table4);
			$id_penelitian = $this->db->get();

			if($id_penelitian->num_rows() < 1){
				$id_penelitian = 1;
			}else{
				$this->db->from($this->table4)->select_max('id_penelitian');
				$query2 = $this->db->get();
				foreach ($query2->result_array() as $row) {
					$id_penelitian = $row['id_penelitian'] + 1;
				}
			}

			$data1a['id_penelitian'] = $id_penelitian;
			$data1a['id_magang'] = $_SESSION['id_magang'];

			$this->db->insert($this->table4, $data1a);
		}

//------------------------------------------------------------------------

		$this->db->from($this->table1);

		$id_anggota = $this->db->get();

		if($id_anggota->num_rows() < 1){
			$_SESSION['id_anggota1'] = 1;
		}else{
			$this->db->from($this->table1)->select_max('id_anggota');
			$query = $this->db->get();
			foreach ($query->result_array() as $row) {
				$_SESSION['id_anggota1'] = $row['id_anggota'] + 1;
			}
		}

		$data2['id_anggota'] = $_SESSION['id_anggota1'];
		$data2['tmpt_lahir'] = $this->input->post('tmpt_lahir');
		$data2['nama_lengkap'] = $this->input->post('nama');
		$data2['tgl_lahir'] = $this->input->post('tgl_lahir');
		$data2['alamat_rumah'] = $this->input->post('alamat_rumah');
		$data2['kota'] = $this->input->post('kota');
		$data2['no_telp_rumah'] = $this->input->post('no_telp_rumah');
		$data2['no_hp'] = $this->input->post('no_hp');
		$data2['jenis_kelamin'] = $this->input->post('jenis_kelamin');
		$data2['agama'] = $this->input->post('agama');
		$data2['hobi'] = $this->input->post('hobi');
		$data2['jenjang_pendidikan'] = $this->input->post('jenjang_pendidikan');
		$data2['institusi'] = $this->input->post('institusi');
		$data2['nomor_induk'] = $this->input->post('nomor_induk');
		$data2['jurusan'] = $this->input->post('jurusan');
		$dataSe['semester'] = $this->input->post('semester');
		$data2['no_telp_institusi'] = $this->input->post('no_telp_institusi');
		$data2['alamat_institusi'] = $this->input->post('alamat_institusi');
		$data2['nama_pembimbing'] = $this->input->post('nama_pembimbing');
		$data2['no_telp_pembimbing'] = $this->input->post('no_telp_pembimbing');
		$dataSe['fakultas'] = $this->input->post('fakultas');
		$data2['konsentrasi_jurusan'] = $this->input->post('konsentrasi_jurusan');
		$data2['id_magang'] = $_SESSION['id_magang'];

		if($dataSe['semester'] != '' && $dataSe['fakultas'] != ''){
			$data2['fakultas'] = $dataSe['fakultas'];
			$data2['semester'] = $dataSe['semester'];
		}else{
			$data2['fakultas'] = '-';
			$data2['semester'] = '-';
		}

		$this->db->insert($this->table1, $data2);

//----------------------------------------------------------------------------------
		$data1b['id_anggota'] = $_SESSION['id_anggota1'];
		$data1b['kelebihan'] = $this->input->post('kelebihan1');
		$data2b['id_anggota'] = $_SESSION['id_anggota1'];
		$data2b['kelebihan'] = $this->input->post('kelebihan2');
		$data3b['id_anggota'] = $_SESSION['id_anggota1'];
		$data3b['kelebihan'] = $this->input->post('kelebihan3');
		$data4b['id_anggota'] = $_SESSION['id_anggota1'];
		$data4b['kelebihan'] = $this->input->post('kelebihan4');
		$data5b['id_anggota'] = $_SESSION['id_anggota1'];
		$data5b['kelebihan'] = $this->input->post('kelebihan5');

		$this->db->from($this->table5);

		$id_kelebihan = $this->db->get();

		if($id_kelebihan->num_rows() < 1){
			$id_kelebihan = 1;
		}else{
			$this->db->from($this->table5)->select_max('id_kelebihan');
			$query = $this->db->get();
			foreach ($query->result_array() as $row) {
				$id_kelebihan = $row['id_kelebihan'] + 1;
			}
		}

		$data1b['id_kelebihan'] = $id_kelebihan;
		$this->db->insert($this->table5, $data1b);

		$this->db->from($this->table5);
		$id_kelebihan = $this->db->get();

		if($id_kelebihan->num_rows() < 1){
			$id_kelebihan = 1;
		}else{
			$this->db->from($this->table5)->select_max('id_kelebihan');
			$query = $this->db->get();
			foreach ($query->result_array() as $row) {
				$id_kelebihan = $row['id_kelebihan'] + 1;
			}
		}

		$data2b['id_kelebihan'] = $id_kelebihan;
		$this->db->insert($this->table5, $data2b);

		$this->db->from($this->table5);
		$id_kelebihan = $this->db->get();

		if($id_kelebihan->num_rows() < 1){
			$id_kelebihan = 1;
		}else{
			$this->db->from($this->table5)->select_max('id_kelebihan');
			$query = $this->db->get();
			foreach ($query->result_array() as $row) {
				$id_kelebihan = $row['id_kelebihan'] + 1;
			}
		}

		$data3b['id_kelebihan'] = $id_kelebihan;
		$this->db->insert($this->table5, $data3b);

		if($data4b['kelebihan'] != ''){
			$this->db->from($this->table5);
			$id_kelebihan = $this->db->get();

			if($id_kelebihan->num_rows() < 1){
				$id_kelebihan = 1;
			}else{
				$this->db->from($this->table5)->select_max('id_kelebihan');
				$query = $this->db->get();
				foreach ($query->result_array() as $row) {
					$id_kelebihan = $row['id_kelebihan'] + 1;
				}
			}

			$data4b['id_kelebihan'] = $id_kelebihan;
			$this->db->insert($this->table5, $data4b);
		}

		if($data5b['kelebihan'] != ''){
			$this->db->from($this->table5);
			$id_kelebihan = $this->db->get();

			if($id_kelebihan->num_rows() < 1){
				$id_kelebihan = 1;
			}else{
				$this->db->from($this->table5)->select_max('id_kelebihan');
				$query = $this->db->get();
				foreach ($query->result_array() as $row) {
					$id_kelebihan = $row['id_kelebihan'] + 1;
				}
			}

			$data5b['id_kelebihan'] = $id_kelebihan;
			$this->db->insert($this->table5, $data5b);
		}

//----------------------------------------------------------------------------------

		$data6b['id_anggota'] = $_SESSION['id_anggota1'];
		$data6b['kelemahan'] = $this->input->post('kelemahan1');
		$data7b['id_anggota'] = $_SESSION['id_anggota1'];
		$data7b['kelemahan'] = $this->input->post('kelemahan2');
		$data8b['id_anggota'] = $_SESSION['id_anggota1'];
		$data8b['kelemahan'] = $this->input->post('kelemahan3');
		$data9b['id_anggota'] = $_SESSION['id_anggota1'];
		$data9b['kelemahan'] = $this->input->post('kelemahan4');
		$data10b['id_anggota'] = $_SESSION['id_anggota1'];
		$data10b['kelemahan'] = $this->input->post('kelemahan5');

		$this->db->from($this->table6);

		$id_kelemahan = $this->db->get();

		if($id_kelemahan->num_rows() < 1){
			$id_kelemahan = 1;
		}else{
			$this->db->from($this->table6)->select_max('id_kelemahan');
			$query = $this->db->get();
			foreach ($query->result_array() as $row) {
				$id_kelemahan = $row['id_kelemahan'] + 1;
			}
		}

		$data6b['id_kelemahan'] = $id_kelemahan;
		$this->db->insert($this->table6, $data6b);

		$this->db->from($this->table6);
		$id_kelemahan = $this->db->get();

		if($id_kelemahan->num_rows() < 1){
			$id_kelemahan = 1;
		}else{
			$this->db->from($this->table6)->select_max('id_kelemahan');
			$query = $this->db->get();
			foreach ($query->result_array() as $row) {
				$id_kelemahan = $row['id_kelemahan'] + 1;
			}
		}

		$data7b['id_kelemahan'] = $id_kelemahan;
		$this->db->insert($this->table6, $data7b);

		$this->db->from($this->table6);
		$id_kelemahan = $this->db->get();

		if($id_kelemahan->num_rows() < 1){
			$id_kelemahan = 1;
		}else{
			$this->db->from($this->table6)->select_max('id_kelemahan');
			$query = $this->db->get();
			foreach ($query->result_array() as $row) {
				$id_kelemahan = $row['id_kelemahan'] + 1;
			}
		}

		$data8b['id_kelemahan'] = $id_kelemahan;
		$this->db->insert($this->table6, $data8b);

		if($data9b['kelemahan'] != ''){
			$this->db->from($this->table6);
			$id_kelemahan = $this->db->get();

			if($id_kelemahan->num_rows() < 1){
				$id_kelemahan = 1;
			}else{
				$this->db->from($this->table6)->select_max('id_kelemahan');
				$query = $this->db->get();
				foreach ($query->result_array() as $row) {
					$id_kelemahan = $row['id_kelemahan'] + 1;
				}
			}

			$data9b['id_kelemahan'] = $id_kelemahan;
			$this->db->insert($this->table6, $data9b);
		}

		if($data10b['kelemahan'] != ''){
			$this->db->from($this->table6);
			$id_kelemahan = $this->db->get();

			if($id_kelemahan->num_rows() < 1){
				$id_kelemahan = 1;
			}else{
				$this->db->from($this->table6)->select_max('id_kelemahan');
				$query = $this->db->get();
				foreach ($query->result_array() as $row) {
					$id_kelemahan = $row['id_kelemahan'] + 1;
				}
			}

			$data10b['id_kelemahan'] = $id_kelemahan;
			$this->db->insert($this->table6, $data10b);
		}
//----------------------------------------------------------------------------------

		$data3['jabatan'] = $this->input->post('jabatan_organisasi_1');
		$data4['jabatan'] = $this->input->post('jabatan_organisasi_2');
		$data5['jabatan'] = $this->input->post('jabatan_organisasi_3');
		$data3['id_anggota'] = $_SESSION['id_anggota1'];
		$data3['nama_organisasi'] = $this->input->post('organisasi1');
		$data3['tahun_organisasi'] = $this->input->post('tahun_organisasi_1');
		$data4['id_anggota'] = $_SESSION['id_anggota1'];
		$data4['nama_organisasi'] = $this->input->post('organisasi2');
		$data4['tahun_organisasi'] = $this->input->post('tahun_organisasi_2');
		$data5['id_anggota'] = $_SESSION['id_anggota1'];
		$data5['nama_organisasi'] = $this->input->post('organisasi3');
		$data5['tahun_organisasi'] = $this->input->post('tahun_organisasi_3');
		
		if($data3['nama_organisasi'] != '' && $data3['tahun_organisasi'] != '' && $data3['jabatan'] != ''){
			$this->db->from($this->table2);

			$id_organisasi = $this->db->get();

			if($id_organisasi->num_rows() < 1){
				$id_organisasi = 1;
			}else{
				$this->db->from($this->table2)->select_max('id_organisasi');
				$query = $this->db->get();
				foreach ($query->result_array() as $row) {
					$id_organisasi = $row['id_organisasi'] + 1;
				}
			}

			$data3['id_organisasi'] = $id_organisasi;
			
			$this->db->insert($this->table2, $data3);
		}

		if($data4['nama_organisasi'] != '' && $data4['tahun_organisasi'] != '' && $data4['jabatan'] != ''){
			$this->db->from($this->table2);

			$id_organisasi = $this->db->get();

			if($id_organisasi->num_rows() < 1){
				$id_organisasi = 1;
			}else{
				$this->db->from($this->table2)->select_max('id_organisasi');
				$query = $this->db->get();
				foreach ($query->result_array() as $row) {
					$id_organisasi = $row['id_organisasi'] + 1;
				}
			}

			$data4['id_organisasi'] = $id_organisasi;

			$this->db->insert($this->table2, $data4);
		}

		if($data5['nama_organisasi'] != '' && $data5['tahun_organisasi'] != '' && $data5['jabatan'] != ''){

			$this->db->from($this->table2);

			$id_organisasi = $this->db->get();

			if($id_organisasi->num_rows() < 1){
				$id_organisasi = 1;
			}else{
				$this->db->from($this->table2)->select_max('id_organisasi');
				$query = $this->db->get();
				foreach ($query->result_array() as $row) {
					$id_organisasi = $row['id_organisasi'] + 1;
				}
			}

			$data5['id_organisasi'] = $id_organisasi;
			$this->db->insert($this->table2, $data5);
		}

//----------------------------------------------------------------------------------------

		$data6['id_anggota'] = $_SESSION['id_anggota1'];
		$data7['id_anggota'] = $_SESSION['id_anggota1'];
		$data8['id_anggota'] = $_SESSION['id_anggota1'];
		$data6['penanggungjawab'] = $this->input->post('penaggungjawab_training_1');
		$data7['penanggungjawab'] = $this->input->post('penaggungjawab_training_2');
		$data8['penanggungjawab'] = $this->input->post('penaggungjawab_training_3');
		$data6['nama_training'] = $this->input->post('training1');
		$data6['tahun_training'] = $this->input->post('tahun_training_1');
		$data7['nama_training'] = $this->input->post('training2');
		$data7['tahun_training'] = $this->input->post('tahun_training_2');
		$data8['nama_training'] = $this->input->post('training3');
		$data8['tahun_training'] = $this->input->post('tahun_training_3');

		if($data6['nama_training'] != '' && $data6['tahun_training'] != '' && $data6['penanggungjawab'] != ''){
			$this->db->from($this->table3);

			$id_training = $this->db->get();

			if($id_training->num_rows() < 1){
				$id_training = 1;
			}else{
				$this->db->from($this->table3)->select_max('id_training');
				$query = $this->db->get();
				foreach ($query->result_array() as $row) {
					$id_training = $row['id_training'] + 1;
				}
			}

			$data6['id_training'] = $id_training;
			
			$this->db->insert($this->table3, $data6);
		}

		if($data7['nama_training'] != '' && $data7['tahun_training'] != '' && $data7['penanggungjawab'] != ''){
			$this->db->from($this->table3);

			$id_training = $this->db->get();

			if($id_training->num_rows() < 1){
				$id_training = 1;
			}else{
				$this->db->from($this->table3)->select_max('id_training');
				$query = $this->db->get();
				foreach ($query->result_array() as $row) {
					$id_training = $row['id_training'] + 1;
				}
			}

			$data7['id_training'] = $id_training;

			$this->db->insert($this->table3, $data7);
		}

		if($data8['nama_training'] != '' && $data8['tahun_training'] != '' && $data8['penanggungjawab'] != ''){

			$this->db->from($this->table3);

			$id_training = $this->db->get();

			if($id_training->num_rows() < 1){
				$id_training = 1;
			}else{
				$this->db->from($this->table3)->select_max('id_training');
				$query = $this->db->get();
				foreach ($query->result_array() as $row) {
					$id_training = $row['id_training'] + 1;
				}
			}

			$data8['id_training'] = $id_training;
			$this->db->insert($this->table3, $data8);
		}


		return true;
	}

	function saveData1(){
		$this->saveData();

//-----------------------------------------------------------------------

		$this->db->from($this->table1);

		$id_anggota = $this->db->get();

		if($id_anggota->num_rows() < 1){
			$_SESSION['id_anggota2'] = 1;
		}else{
			$this->db->from($this->table1)->select_max('id_anggota');
			$query = $this->db->get();
			foreach ($query->result_array() as $row) {
				$_SESSION['id_anggota2'] = $row['id_anggota'] + 1;
			}
		}

		$data21['id_anggota'] = $_SESSION['id_anggota2'];
		$data21['tmpt_lahir'] = $this->input->post('tmpt_lahir1');
		$data21['nama_lengkap'] = $this->input->post('nama1');
		$data21['tgl_lahir'] = $this->input->post('tgl_lahir1');
		$data21['alamat_rumah'] = $this->input->post('alamat_rumah1');
		$data21['kota'] = $this->input->post('kota1');
		$data21['no_telp_rumah'] = $this->input->post('no_telp_rumah1');
		$data21['no_hp'] = $this->input->post('no_hp1');
		$data21['jenis_kelamin'] = $this->input->post('jenis_kelamin1');
		$data21['agama'] = $this->input->post('agama1');
		$data21['hobi'] = $this->input->post('hobi1');
		$data21['jenjang_pendidikan'] = $this->input->post('jenjang_pendidikan1');
		$data21['institusi'] = $this->input->post('institusi1');
		$data21['nomor_induk'] = $this->input->post('nomor_induk1');
		$data21['jurusan'] = $this->input->post('jurusan1');
		$dataSe1['semester'] = $this->input->post('semester1');
		$data21['no_telp_institusi'] = $this->input->post('no_telp_institusi1');
		$data21['alamat_institusi'] = $this->input->post('alamat_institusi1');
		$data21['nama_pembimbing'] = $this->input->post('nama_pembimbing1');
		$data21['no_telp_pembimbing'] = $this->input->post('no_telp_pembimbing1');
		$dataSe1['fakultas'] = $this->input->post('fakultas1');
		$data21['konsentrasi_jurusan'] = $this->input->post('konsentrasi_jurusan1');
		$data21['id_magang'] = $_SESSION['id_magang'];

		if($dataSe1['semester'] != '' && $dataSe1['fakultas'] != ''){
			$data21['fakultas'] = $dataSe1['fakultas'];
			$data21['semester'] = $dataSe1['semester'];
		}else{
			$data21['fakultas'] = '-';
			$data21['semester'] = '-';
		}

		$this->db->insert($this->table1, $data21);

//----------------------------------------------------------------------------------

		$data11b['id_anggota'] = $_SESSION['id_anggota2'];
		$data11b['kelebihan'] = $this->input->post('kelebihan11');
		$data21b['id_anggota'] = $_SESSION['id_anggota2'];
		$data21b['kelebihan'] = $this->input->post('kelebihan21');
		$data31b['id_anggota'] = $_SESSION['id_anggota2'];
		$data31b['kelebihan'] = $this->input->post('kelebihan31');
		$data41b['id_anggota'] = $_SESSION['id_anggota2'];
		$data41b['kelebihan'] = $this->input->post('kelebihan41');
		$data51b['id_anggota'] = $_SESSION['id_anggota2'];
		$data51b['kelebihan'] = $this->input->post('kelebihan51');

		$this->db->from($this->table5);

		$id_kelebihan = $this->db->get();

		if($id_kelebihan->num_rows() < 1){
			$id_kelebihan = 1;
		}else{
			$this->db->from($this->table5)->select_max('id_kelebihan');
			$query = $this->db->get();
			foreach ($query->result_array() as $row) {
				$id_kelebihan = $row['id_kelebihan'] + 1;
			}
		}

		$data11b['id_kelebihan'] = $id_kelebihan;
		$this->db->insert($this->table5, $data11b);

		$this->db->from($this->table5);
		$id_kelebihan = $this->db->get();

		if($id_kelebihan->num_rows() < 1){
			$id_kelebihan = 1;
		}else{
			$this->db->from($this->table5)->select_max('id_kelebihan');
			$query = $this->db->get();
			foreach ($query->result_array() as $row) {
				$id_kelebihan = $row['id_kelebihan'] + 1;
			}
		}

		$data21b['id_kelebihan'] = $id_kelebihan;
		$this->db->insert($this->table5, $data21b);

		$this->db->from($this->table5);
		$id_kelebihan = $this->db->get();

		if($id_kelebihan->num_rows() < 1){
			$id_kelebihan = 1;
		}else{
			$this->db->from($this->table5)->select_max('id_kelebihan');
			$query = $this->db->get();
			foreach ($query->result_array() as $row) {
				$id_kelebihan = $row['id_kelebihan'] + 1;
			}
		}

		$data31b['id_kelebihan'] = $id_kelebihan;
		$this->db->insert($this->table5, $data31b);

		if($data41b['kelebihan'] != ''){
			$this->db->from($this->table5);
			$id_kelebihan = $this->db->get();

			if($id_kelebihan->num_rows() < 1){
				$id_kelebihan = 1;
			}else{
				$this->db->from($this->table5)->select_max('id_kelebihan');
				$query = $this->db->get();
				foreach ($query->result_array() as $row) {
					$id_kelebihan = $row['id_kelebihan'] + 1;
				}
			}

			$data41b['id_kelebihan'] = $id_kelebihan;
			$this->db->insert($this->table5, $data41b);
		}

		if($data51b['kelebihan'] != ''){
			$this->db->from($this->table5);
			$id_kelebihan = $this->db->get();

			if($id_kelebihan->num_rows() < 1){
				$id_kelebihan = 1;
			}else{
				$this->db->from($this->table5)->select_max('id_kelebihan');
				$query = $this->db->get();
				foreach ($query->result_array() as $row) {
					$id_kelebihan = $row['id_kelebihan'] + 1;
				}
			}

			$data51b['id_kelebihan'] = $id_kelebihan;
			$this->db->insert($this->table5, $data51b);
		}

//----------------------------------------------------------------------------------

		$data61b['id_anggota'] = $_SESSION['id_anggota2'];
		$data61b['kelemahan'] = $this->input->post('kelemahan11');
		$data71b['id_anggota'] = $_SESSION['id_anggota2'];
		$data71b['kelemahan'] = $this->input->post('kelemahan21');
		$data81b['id_anggota'] = $_SESSION['id_anggota2'];
		$data81b['kelemahan'] = $this->input->post('kelemahan31');
		$data91b['id_anggota'] = $_SESSION['id_anggota2'];
		$data91b['kelemahan'] = $this->input->post('kelemahan41');
		$data101b['id_anggota'] = $_SESSION['id_anggota2'];
		$data101b['kelemahan'] = $this->input->post('kelemahan51');

		$this->db->from($this->table6);

		$id_kelemahan = $this->db->get();

		if($id_kelemahan->num_rows() < 1){
			$id_kelemahan = 1;
		}else{
			$this->db->from($this->table6)->select_max('id_kelemahan');
			$query = $this->db->get();
			foreach ($query->result_array() as $row) {
				$id_kelemahan = $row['id_kelemahan'] + 1;
			}
		}

		$data61b['id_kelemahan'] = $id_kelemahan;
		$this->db->insert($this->table6, $data61b);

		$this->db->from($this->table6);
		$id_kelemahan = $this->db->get();

		if($id_kelemahan->num_rows() < 1){
			$id_kelemahan = 1;
		}else{
			$this->db->from($this->table6)->select_max('id_kelemahan');
			$query = $this->db->get();
			foreach ($query->result_array() as $row) {
				$id_kelemahan = $row['id_kelemahan'] + 1;
			}
		}

		$data71b['id_kelemahan'] = $id_kelemahan;
		$this->db->insert($this->table6, $data71b);

		$this->db->from($this->table6);
		$id_kelemahan = $this->db->get();

		if($id_kelemahan->num_rows() < 1){
			$id_kelemahan = 1;
		}else{
			$this->db->from($this->table6)->select_max('id_kelemahan');
			$query = $this->db->get();
			foreach ($query->result_array() as $row) {
				$id_kelemahan = $row['id_kelemahan'] + 1;
			}
		}

		$data81b['id_kelemahan'] = $id_kelemahan;
		$this->db->insert($this->table6, $data81b);

		if($data91b['kelemahan'] != ''){
			$this->db->from($this->table6);
			$id_kelemahan = $this->db->get();

			if($id_kelemahan->num_rows() < 1){
				$id_kelemahan = 1;
			}else{
				$this->db->from($this->table6)->select_max('id_kelemahan');
				$query = $this->db->get();
				foreach ($query->result_array() as $row) {
					$id_kelemahan = $row['id_kelemahan'] + 1;
				}
			}

			$data91b['id_kelemahan'] = $id_kelemahan;
			$this->db->insert($this->table6, $data91b);
		}

		if($data101b['kelemahan'] != ''){
			$this->db->from($this->table6);
			$id_kelemahan = $this->db->get();

			if($id_kelemahan->num_rows() < 1){
				$id_kelemahan = 1;
			}else{
				$this->db->from($this->table6)->select_max('id_kelemahan');
				$query = $this->db->get();
				foreach ($query->result_array() as $row) {
					$id_kelemahan = $row['id_kelemahan'] + 1;
				}
			}

			$data101b['id_kelemahan'] = $id_kelemahan;
			$this->db->insert($this->table6, $data101b);
		}
//----------------------------------------------------------------------------------

		$data31['jabatan'] = $this->input->post('jabatan_organisasi_11');
		$data41['jabatan'] = $this->input->post('jabatan_organisasi_21');
		$data51['jabatan'] = $this->input->post('jabatan_organisasi_31');
		$data31['id_anggota'] = $_SESSION['id_anggota2'];
		$data31['nama_organisasi'] = $this->input->post('organisasi11');
		$data31['tahun_organisasi'] = $this->input->post('tahun_organisasi_11');
		$data41['id_anggota'] = $_SESSION['id_anggota2'];
		$data41['nama_organisasi'] = $this->input->post('organisasi21');
		$data41['tahun_organisasi'] = $this->input->post('tahun_organisasi_21');
		$data51['id_anggota'] = $_SESSION['id_anggota2'];
		$data51['nama_organisasi'] = $this->input->post('organisasi31');
		$data51['tahun_organisasi'] = $this->input->post('tahun_organisasi_31');
		
		if($data31['nama_organisasi'] != '' && $data31['tahun_organisasi'] != '' && $data31['jabatan'] != ''){
			$this->db->from($this->table2);

			$id_organisasi = $this->db->get();

			if($id_organisasi->num_rows() < 1){
				$id_organisasi = 1;
			}else{
				$this->db->from($this->table2)->select_max('id_organisasi');
				$query = $this->db->get();
				foreach ($query->result_array() as $row) {
					$id_organisasi = $row['id_organisasi'] + 1;
				}
			}

			$data31['id_organisasi'] = $id_organisasi;
			
			$this->db->insert($this->table2, $data31);
		}

		if($data41['nama_organisasi'] != '' && $data41['tahun_organisasi'] != '' && $data41['jabatan'] != ''){
			$this->db->from($this->table2);

			$id_organisasi = $this->db->get();

			if($id_organisasi->num_rows() < 1){
				$id_organisasi = 1;
			}else{
				$this->db->from($this->table2)->select_max('id_organisasi');
				$query = $this->db->get();
				foreach ($query->result_array() as $row) {
					$id_organisasi = $row['id_organisasi'] + 1;
				}
			}

			$data41['id_organisasi'] = $id_organisasi;

			$this->db->insert($this->table2, $data41);
		}

		if($data51['nama_organisasi'] != '' && $data51['tahun_organisasi'] != '' && $data51['jabatan'] != ''){

			$this->db->from($this->table2);

			$id_organisasi = $this->db->get();

			if($id_organisasi->num_rows() < 1){
				$id_organisasi = 1;
			}else{
				$this->db->from($this->table2)->select_max('id_organisasi');
				$query = $this->db->get();
				foreach ($query->result_array() as $row) {
					$id_organisasi = $row['id_organisasi'] + 1;
				}
			}

			$data51['id_organisasi'] = $id_organisasi;
			$this->db->insert($this->table2, $data51);
		}

//----------------------------------------------------------------------------------------

		$data61['id_anggota'] = $_SESSION['id_anggota2'];
		$data71['id_anggota'] = $_SESSION['id_anggota2'];
		$data81['id_anggota'] = $_SESSION['id_anggota2'];
		$data61['penanggungjawab'] = $this->input->post('penaggungjawab_training_11');
		$data71['penanggungjawab'] = $this->input->post('penaggungjawab_training_21');
		$data81['penanggungjawab'] = $this->input->post('penaggungjawab_training_31');
		$data61['nama_training'] = $this->input->post('training11');
		$data61['tahun_training'] = $this->input->post('tahun_training_11');
		$data71['nama_training'] = $this->input->post('training21');
		$data71['tahun_training'] = $this->input->post('tahun_training_21');
		$data81['nama_training'] = $this->input->post('training31');
		$data81['tahun_training'] = $this->input->post('tahun_training_31');

		if($data61['nama_training'] != '' && $data61['tahun_training'] != '' && $data61['penanggungjawab'] != ''){
			$this->db->from($this->table3);

			$id_training = $this->db->get();

			if($id_training->num_rows() < 1){
				$id_training = 1;
			}else{
				$this->db->from($this->table3)->select_max('id_training');
				$query = $this->db->get();
				foreach ($query->result_array() as $row) {
					$id_training = $row['id_training'] + 1;
				}
			}

			$data61['id_training'] = $id_training;
			
			$this->db->insert($this->table3, $data61);
		}

		if($data71['nama_training'] != '' && $data71['tahun_training'] != '' && $data71['penanggungjawab'] != ''){
			$this->db->from($this->table3);

			$id_training = $this->db->get();

			if($id_training->num_rows() < 1){
				$id_training = 1;
			}else{
				$this->db->from($this->table3)->select_max('id_training');
				$query = $this->db->get();
				foreach ($query->result_array() as $row) {
					$id_training = $row['id_training'] + 1;
				}
			}

			$data71['id_training'] = $id_training;

			$this->db->insert($this->table3, $data71);
		}

		if($data81['nama_training'] != '' && $data81['tahun_training'] != '' && $data81['penanggungjawab'] != ''){

			$this->db->from($this->table3);

			$id_training = $this->db->get();

			if($id_training->num_rows() < 1){
				$id_training = 1;
			}else{
				$this->db->from($this->table3)->select_max('id_training');
				$query = $this->db->get();
				foreach ($query->result_array() as $row) {
					$id_training = $row['id_training'] + 1;
				}
			}

			$data81['id_training'] = $id_training;
			$this->db->insert($this->table3, $data81);
		}


		return true;
	}


	function updateGambarSurat($data_gambar){
		session_start('save_data');
		
		$this->db->where('id_magang', $_SESSION['id_magang']);
		$this->db->update($this->table,$data_gambar);
		return true;
	}

	function updateFileProposal($data_proposal){
		session_start('save_data');

		$this->db->where('id_magang', $_SESSION['id_magang']);
		$this->db->update($this->table,$data_proposal);
		return true;
	}

	function updateGambarFoto($data_foto){
		session_start('save_data');
		$message;

		$this->db->from($this->table1)->where('id_magang', $_SESSION['id_magang']);
		$query1 = $this->db->get();

		if($query1->num_rows() > 1){
			$message = 1;
		}else{
			$message = 0;
		}

		foreach ($query1->result() as $key) {
			$id1 = $key->id_anggota;
			break;
		}

		$this->db->where('id_anggota', $id1);
		$this->db->update($this->table1,$data_foto);

		return $message;

	}

	function updateGambarFoto1($data_foto){

		session_start('save_data');

		$this->db->from($this->table1)->where('id_magang', $_SESSION['id_magang']);
		$query1 = $this->db->get();

		foreach ($query1->result() as $key) {
			$id1 = $key->id_anggota;
		}

		$this->db->where('id_anggota', $id1);
		$this->db->update($this->table1,$data_foto);

		return true;
					
		
	}


	function lanjutan(){
		$this->updateGambarFoto();

		
	}

	function cek_email($email){
		$cek;

		$this->db->from($this->table)->where('email', $email['email']);
		$query = $this->db->get();

		if($query->num_rows() == 0){
			$cek = 1;
		}else{
			$cek = 0;
		}

		echo $cek;

		return $cek;
	}

	function cek_login($data_login){
		session_start('login_user');
		$cek = 0;
		$hasil = 0;
		$dataa = array();
		$message;
		$this->db->from($this->table)->where('email', $data_login['email']);
		$query = $this->db->get();
		if($query->num_rows() != 0){
			foreach ($query->result() as $key) {
				$dataPassword = $key->password;
				$id_id = $key->id_magang;
				$_SESSION['id_magang'] = $id_id;
				$dataa['status'] = $key->status;
				$dataa['tipe'] = $key->tipe;
			}
			
			if($data_login['password'] == $dataPassword){
				$this->db->from($this->table1)->where('id_magang', $id_id);
				$query1 = $this->db->get();

				if($query1->num_rows() != 0){
					foreach ($query1->result() as $key) {
						$_SESSION[$cek] = $key->nama_lengkap;
						$dataa[$cek] = $key->nama_lengkap;
						$cek++;
					}
				}
				return $dataa;
				
			}else{
				$hasil = 2;
				return $hasil;
			}
		}else{
			$hasil = 1;
			return $hasil;
		}
	}

	function lupa_password($email){
		$this->db->from($this->table)->where('email', $email['email']);
		$query = $this->db->get();
		if($query->num_rows() != 0){
			foreach ($query->result() as $key) {
				return $query->result();
			}
		}
	}

	function konfirmasi($data){
		session_start('login_user');
		$dataRekap = array();
		$this->db->where('id_magang', $_SESSION['id_magang']);
		$this->db->update($this->table, $data);

		if($data['konfirmasi'] = 'Diterima'){
			
			$dataDetail = $this->getDetail();
			foreach ($dataDetail as $key) {
				$tgl_mulai = $key->tgl_mulai;
				$tgl_keluar = $key->tgl_keluar;
				$dataRekap['tipe'] = $key->tipe;
				$dataRekap['unit'] = $key->unit;
			}

			$tahun = array();

			$dataRekap['bulan_mulai'] = substr($tgl_mulai, 5,2);
			$dataRekap['bulan_keluar'] = substr($tgl_keluar, 5,2);
			$tahun[0] = substr($tgl_mulai, 0,4);
			$tahun[1] = substr($tgl_keluar, 0,4);
			//$tahun[0] = '2017';
			//$tahun[1] = '2017';

			if($tahun[0] != $tahun[1]){
				for($i = 0; $i<count($tahun); $i++){
					$this->db->from($this->table1)->where('id_magang',$_SESSION['id_magang']);
					$query = $this->db->get();

					if($query->num_rows() > 0){
						foreach ($query->result() as $key) {
							$dataRekap['id_rekap'] = $this->getId();
							$dataRekap['nama_lengkap'] = $key->nama_lengkap;
							$dataRekap['institusi'] = $key->institusi;
							$dataRekap['jurusan'] = $key->jurusan;
							$dataRekap['tahun'] = $tahun[$i];
							$this->db->insert($this->tableRekap, $dataRekap);
						}
					}
				}
			}else{
				$this->db->from($this->table1)->where('id_magang',$_SESSION['id_magang']);
				$query = $this->db->get();

				if($query->num_rows() > 0){
					foreach ($query->result() as $key) {
						$dataRekap['id_rekap'] = $this->getId();
						$dataRekap['nama_lengkap'] = $key->nama_lengkap;
						$dataRekap['institusi'] = $key->institusi;
						$dataRekap['jurusan'] = $key->jurusan;
						$dataRekap['tahun'] = $tahun[0];
						$this->db->insert($this->tableRekap, $dataRekap);
					}
				}
			}
		}
		
		return true;
	}

	function getId(){
		$this->db->from($this->tableRekap);

		$id = $this->db->get();

		if($id->num_rows() < 1){
			$id_rekap = 1;
		}else{
			$this->db->from($this->tableRekap)->select_min('tahun');
			$query = $this->db->get();
			foreach ($query->result_array() as $row) {
				$tahunRekap = $row['tahun'];
			}

			$tahun_sekarang = date('Y');
			//$tahun_sekarang = '2017';

			if($tahunRekap != $tahun_sekarang){
				$this->db->where('tahun', $tahunRekap);
				$this->db->delete($this->tableRekap);
				
				$this->db->from($this->tableRekap);

				$id = $this->db->get();

				if($id->num_rows() < 1){
					$id_rekap = 1;
				}else{
					$this->db->from($this->tableRekap)->select_max('id_rekap');
					$query = $this->db->get();
					foreach ($query->result_array() as $row) {
						$id_rekap = $row['id_rekap'] + 1;
					}
				}
			}else{
				$this->db->from($this->tableRekap)->select_max('id_rekap');
				$query = $this->db->get();
				foreach ($query->result_array() as $row) {
					$id_rekap = $row['id_rekap'] + 1;
				}
			}
		}

		return $id_rekap;

	}

	function getDetail(){
		$this->db->from($this->table)->where('id_magang',$_SESSION['id_magang']);
		$query = $this->db->get();

		if($query->num_rows() > 0){
			return $query->result();
		}
	}

	function getDetail1(){
		$this->db->from($this->table1)->where('id_magang',$_SESSION['id_magang']);
		$query = $this->db->get();

		if($query->num_rows() > 0){
			return $query->result();
		}
	}

	function getGbrHome(){
		$this->db->from($this->table7)->where('id_gbr','1');
		$query = $this->db->get();

		if($query->num_rows() > 0){
			return $query->result();
		}
	}

	function getGbrName(){
		$this->db->from($this->table7)->where('id_gbr','2');
		$query = $this->db->get();

		if($query->num_rows() > 0){
			return $query->result();
		}
	}

	function getAllData(){
		$this->db->from($this->table);
		$query = $this->db->get();

		if($query->num_rows() > 0){
			return $query->result();
		}
	}

	function getDataById($id){
		$this->db->from($this->table);
		$this->db->where('id_mhs',$id);

		$query = $this->db->get();

		if($query->num_rows() == 1){
			return $query->result();
		}
	}

	function updateData($data, $id){
		$this->db->where('id_mhs', $id);
		$this->db->update($this->table, $data);
		return true;
	}

	function deleteData($id){
		$this->db->where('id_mhs', $id);
		$this->db->delete($this->table);
		return true;
	}

	function coba(){
		$this->db->from($this->table)->select_max('id_magang');
		$query = $this->db->get();
		foreach ($query->result() as $key) {
			$id_nomor = $key->id_magang;
		}

		$this->db->from($this->table)->where('id_magang', $id_nomor);
		$query = $this->db->get();
		foreach ($query->result() as $key) {
			$tahundb = $key->tahun_surat_konfirmasi;
		}

		$bulan = date('m');
		$tahun = date('Y');

		if($tahun != $tahundb){
			$no_surat_konfirmasi = 1;
		}else{
			$this->db->from($this->table);

			$id = $this->db->get();

			if($id->num_rows() < 1){
				$no_surat_konfirmasi = 1;
			}else{
				$this->db->from($this->table)->where('id_magang', $id_nomor);
				$query = $this->db->get();
				foreach ($query->result() as $key) {
					$no_surat_konfirmasi = $key->no_surat_konfirmasi + 1;
				}
			}
		}
		return $no_surat_konfirmasi;
	}
}