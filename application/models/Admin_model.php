<?php
class Admin_model extends CI_model{
	var $table = 'admin';
	var $table1 = 'magang';
	var $table2 = 'anggota';
	var $table3 = 'organisasi';
	var $table4 = 'training';
	var $table5 = 'kelebihan';
	var $table6 = 'kelemahan';
	var $table7 = 'nomor_surat';
	var $table8 = 'layout_user';
	var $table9 = 'penelitian';
	var $tableRekap = 'rekap';

	function cek_login($data){
		session_start();
		$this->db->from($this->table)->where('username',$data['username'])->where('password',md5($data['password']));
		$query = $this->db->get();

		if($query->num_rows() == 1){
			foreach ($query->result() as $key) {
				$unit = $key->unit;
			}

			$_SESSION['username'] = $data['username'];
			$_SESSION['unit'] = $unit;
		}
	}

	function saveData($data){
		$this->db->insert($this->table, $data);
		return true;
	}

	function getAllData(){
		session_start();
		$this->db->from($this->table1)->where('status','0')->where('unit',$_SESSION['unit'])->where('tipe','Kerja Praktek');
		$query = $this->db->get();

		if($query->num_rows() > 0){
			return $query->result();
		}
	}

	function getAllDataTerima(){
		$this->db->from($this->table1)->where('status','1')->where('unit',$_SESSION['unit'])->where('tipe','Kerja Praktek');
		$query = $this->db->get();

		if($query->num_rows() > 0){
			return $query->result();
		}
	}

	function getAllDataTolak(){
		$this->db->from($this->table1)->where('status','-1')->where('unit',$_SESSION['unit'])->where('tipe','Kerja Praktek');
		$query = $this->db->get();

		if($query->num_rows() > 0){
			return $query->result();
		}
	}

	function getAllDataPenelitian(){
		session_start();
		$this->db->from($this->table1)->where('status','0')->where('unit',$_SESSION['unit'])->where('tipe','Penelitian');
		$query = $this->db->get();

		if($query->num_rows() > 0){
			return $query->result();
		}
	}

	function getAllDataTerimaPenelitian(){
		$this->db->from($this->table1)->where('status','1')->where('unit',$_SESSION['unit'])->where('tipe','Penelitian');
		$query = $this->db->get();

		if($query->num_rows() > 0){
			return $query->result();
		}
	}

	function getAllDataTerimaPenelitianFiks(){
		$tahun = date('Y');
		$this->db->from($this->tableRekap)->where('unit',$_SESSION['unit'])->where('tipe','Penelitian')->where('tahun',$tahun);
		$query = $this->db->get();

			$bulan = array();
			$jml = array();

			$jml['januari'] = 0;
			$jml['februari'] = 0;
			$jml['maret'] = 0;
			$jml['april'] = 0;
			$jml['mei'] = 0;
			$jml['juni'] = 0;
			$jml['juli'] = 0;
			$jml['agustus'] = 0;
			$jml['september'] = 0;
			$jml['oktober'] = 0;
			$jml['november'] = 0;
			$jml['desember'] = 0;

			$jml[1] = 0;
			$jml[2] = 0;
			$jml[3] = 0;
			$jml[4] = 0;
			$jml[5] = 0;
			$jml[6] = 0;
			$jml[7] = 0;
			$jml[8] = 0;
			$jml[9] = 0;
			$jml[10] = 0;
			$jml[11] = 0;
			$jml[12] = 0;


			foreach ($query->result() as $key) {
				$id_magang = $key->id_rekap;

				$bulan[0] = $key->bulan_mulai;
				$bulan[1] = $key->bulan_keluar;

				if($bulan[0] != $bulan[1]){
					$tot = 2;
				}else{
					$tot = 1;
				}

				for($i = 0 ; $i<$tot; $i++){
					if($bulan[$i] == '01'){
						$jml['januari'] = $jml['januari'] + 1;
							$jml[1] = $jml[1].'|'.$id_magang;
					}else if($bulan[$i] == '02'){
						$jml['februari'] = $jml['februari'] + 1;
							$jml[2] = $jml[2].'|'.$id_magang;
					}else if($bulan[$i] == '03'){
						$jml['maret'] = $jml['maret'] + 1;
							$jml[3] = $jml[3].'|'.$id_magang;
					}else if($bulan[$i] == '04'){
						$jml['april'] = $jml['april'] + 1;
							$jml[4] = $jml[4].'|'.$id_magang;
					}else if($bulan[$i] == '05'){
						$jml['mei'] = $jml['mei'] + 1;
							$jml[5] = $jml[5].'|'.$id_magang;
					}else if($bulan[$i] == '06'){
						$jml['juni'] = $jml['juni'] + 1;
							$jml[6] = $jml[6].'|'.$id_magang;
					}else if($bulan[$i] == '07'){
						$jml['juli'] = $jml['juli'] + 1;
							$jml[7] = $jml[7].'|'.$id_magang;
					}else if($bulan[$i] == '08'){
						$jml['agustus'] = $jml['agustus'] + 1;
							$jml[8] = $jml[8].'|'.$id_magang;
					}else if($bulan[$i] == '09'){
						$jml['september'] = $jml['september'] + 1;
							$jml[9] = $jml[9].'|'.$id_magang;
					}else if($bulan[$i] == '10'){
						$jml['oktober'] = $jml['oktober'] + 1;
							$jml[10] = $jml[10].'|'.$id_magang;
					}else if($bulan[$i] == '11'){
						$jml['november'] = $jml['november'] + 1;
							$jml[11] = $jml[11].'|'.$id_magang;
					}else{
						$jml['desember'] = $jml['desember'] + 1;
							$jml[12] = $jml[12].'|'.$id_magang;
					}
				}
			}

			return $jml;
		
	}

	function getAllDataTerimaFiks(){
		$tahun = date('Y');
		$this->db->from($this->tableRekap)->where('unit',$_SESSION['unit'])->where('tipe','Kerja Praktek')->where('tahun',$tahun);
		$query = $this->db->get();

			$bulan = array();
			$jml = array();

			$jml['januari'] = 0;
			$jml['februari'] = 0;
			$jml['maret'] = 0;
			$jml['april'] = 0;
			$jml['mei'] = 0;
			$jml['juni'] = 0;
			$jml['juli'] = 0;
			$jml['agustus'] = 0;
			$jml['september'] = 0;
			$jml['oktober'] = 0;
			$jml['november'] = 0;
			$jml['desember'] = 0;

			$jml[1] = 0;
			$jml[2] = 0;
			$jml[3] = 0;
			$jml[4] = 0;
			$jml[5] = 0;
			$jml[6] = 0;
			$jml[7] = 0;
			$jml[8] = 0;
			$jml[9] = 0;
			$jml[10] = 0;
			$jml[11] = 0;
			$jml[12] = 0;


			foreach ($query->result() as $key) {
				$id_magang = $key->id_rekap;

				$bulan[0] = $key->bulan_mulai;
				$bulan[1] = $key->bulan_keluar;

				if($bulan[0] != $bulan[1]){
					$tot = 2;
				}else{
					$tot = 1;
				}

				for($i = 0 ; $i<$tot; $i++){
					if($bulan[$i] == '01'){
						$jml['januari'] = $jml['januari'] + 1;
							$jml[1] = $jml[1].'|'.$id_magang;
					}else if($bulan[$i] == '02'){
						$jml['februari'] = $jml['februari'] + 1;
							$jml[2] = $jml[2].'|'.$id_magang;
					}else if($bulan[$i] == '03'){
						$jml['maret'] = $jml['maret'] + 1;
							$jml[3] = $jml[3].'|'.$id_magang;
					}else if($bulan[$i] == '04'){
						$jml['april'] = $jml['april'] + 1;
							$jml[4] = $jml[4].'|'.$id_magang;
					}else if($bulan[$i] == '05'){
						$jml['mei'] = $jml['mei'] + 1;
							$jml[5] = $jml[5].'|'.$id_magang;
					}else if($bulan[$i] == '06'){
						$jml['juni'] = $jml['juni'] + 1;
							$jml[6] = $jml[6].'|'.$id_magang;
					}else if($bulan[$i] == '07'){
						$jml['juli'] = $jml['juli'] + 1;
							$jml[7] = $jml[7].'|'.$id_magang;
					}else if($bulan[$i] == '08'){
						$jml['agustus'] = $jml['agustus'] + 1;
							$jml[8] = $jml[8].'|'.$id_magang;
					}else if($bulan[$i] == '09'){
						$jml['september'] = $jml['september'] + 1;
							$jml[9] = $jml[9].'|'.$id_magang;
					}else if($bulan[$i] == '10'){
						$jml['oktober'] = $jml['oktober'] + 1;
							$jml[10] = $jml[10].'|'.$id_magang;
					}else if($bulan[$i] == '11'){
						$jml['november'] = $jml['november'] + 1;
							$jml[11] = $jml[11].'|'.$id_magang;
					}else{
						$jml['desember'] = $jml['desember'] + 1;
							$jml[12] = $jml[12].'|'.$id_magang;
					}
				}
			}

			return $jml;
	}

	function getAllDataTolakPenelitian(){
		$this->db->from($this->table1)->where('status','-1')->where('unit',$_SESSION['unit'])->where('tipe','Penelitian');
		$query = $this->db->get();

		if($query->num_rows() > 0){
			return $query->result();
		}
	}

	function detail($data){
		$this->db->from($this->table2)->where('id_magang',$data['id_magang']);

		$query = $this->db->get();

		if($query->num_rows() > 0){
			return $query->result();
		}
	}

	function proses($data){
		$message = 'lala';
		if($data['proses'] == 'terima'){
			$data1['status'] = '1';
			$data1['konfirmasi'] = 'Belum dikonfirmasi';
			$this->db->where('id_magang', $data['id_magang']);
			$this->db->update($this->table1, $data1);
			//$message = $this->sendEmail($data['id_magang']);
		}else if($data['proses'] == 'tolak'){
			$data1['status'] = '-1';
			$this->db->where('id_magang', $data['id_magang']);
			$this->db->update($this->table1, $data1);
			//$message = $this->sendEmail($data['id_magang']);
		}else{
			$this->db->from($this->table1)->where('id_magang',$data['id_magang']);

			$query = $this->db->get();

			if($query->num_rows() > 0){
				foreach ($query->result() as $key) {
					$proposal = $key->nama_file_proposal;
					$surat = $key->nama_gambar_surat;
				}
			}

			unlink('./uploads/surat_pengantar/'.$surat);
			unlink('./uploads/proposal/'.$proposal);

			$this->db->from($this->table2)->where('id_magang',$data['id_magang']);

			$query1 = $this->db->get();

			if($query1->num_rows() > 0){
				foreach ($query1->result() as $key) {
					$foto = $key->foto;
					unlink('./uploads/foto_anggota/'.$foto);
				}
			}

			$this->db->from($this->table2)->where('id_magang', $data['id_magang']);
			$query = $this->db->get();
			if($query->num_rows() > 0){
				foreach ($query->result() as $key) {
					$id_anggota = $key->id_anggota;
					$this->db->where('id_anggota',$id_anggota)->delete($this->table3);
					$this->db->where('id_anggota',$id_anggota)->delete($this->table4);
					$this->db->where('id_anggota',$id_anggota)->delete($this->table5);
					$this->db->where('id_anggota',$id_anggota)->delete($this->table6);
				}
			}
			$this->db->where('id_magang', $data['id_magang'])->delete($this->table2);
			$this->db->where('id_magang', $data['id_magang'])->delete($this->table9);
			$this->db->where('id_magang', $data['id_magang'])->delete($this->table1);
		}
		return $message;
	}

	function sendEmail($id_magang){
		$message;
		$this->db->from($this->table1)->where('id_magang',$id_magang);

		$query = $this->db->get();

		if($query->num_rows() > 0){
			foreach ($query->result() as $key) {
			 	$to = $key->email;
			 } 
		}

		include 'sendEmail-v156.php';
		$subject = 'Konfirmasi Kerja Praktek/Penelitian PT.PJB';
		$message = 'Halo ada kabar terbaru nih, silakan cek di link dibawah ini \n <a href="#">Login PJB</a>';
		$sender = 'akunpjb@gmail.com';
		$password = 'PJB123Magang';
		if(email_localhost($to, $subject, $message, $sender, $password)){
			$message = 'Email telah terkirim';
		}else{
			$message = 'Email gagal terkirim';
		}

		return $message;
	}

	function getProposalName($data){
		$this->db->from($this->table1)->where('id_magang',$data['id_magang']);

		$query = $this->db->get();

		if($query->num_rows() > 0){
			foreach ($query->result() as $key) {
				return $key->nama_file_proposal;
			}
		}
	}

	function getSuratName($data){
		$this->db->from($this->table1)->where('id_magang',$data['id_magang']);

		$query = $this->db->get();

		if($query->num_rows() > 0){
			foreach ($query->result() as $key) {
				return $key->nama_gambar_surat;
			}
		}
	}

	function getDataMagang($data){
		$this->db->from($this->table1)->where('id_magang',$data['id_magang']);

		$query = $this->db->get();

		if($query->num_rows() > 0){
			return $query->result();
		}
	}

	function getDataAnggota($data){
		$this->db->from($this->table2)->where('id_magang',$data['id_magang']);

		$query = $this->db->get();

		if($query->num_rows() > 0){
			return $query->result();
		}
	}

	function getNomorSurat(){
		$this->db->from($this->table7);
		$nomor = $this->db->get();

		if($nomor->num_rows() < 1){
			$nomor = 1;
		}else{
			$this->db->from($this->table7)->select_max('nomor');
			$query = $this->db->get();
			foreach ($query->result_array() as $row) {
				$nomor = $row['nomor'] + 1;
			}
		}

		$data['bulan'] = date('m');
		$data['nomor'] = $nomor;

		$this->db->insert($this->table7, $data);

		$this->db->from($this->table7)->where('nomor',$data['nomor']);
		$query1 = $this->db->get();

		if($query1->num_rows() > 0){
			return $query1->result();
		}
	}

	function updateGbrHome($data){
		$this->db->from($this->table8)->where('id_gbr','1');

		$query = $this->db->get();

		if($query->num_rows() > 0){
			foreach ($query->result() as $key) {
				$nama_gambar = $key->gambar;
			}
		}

		unlink('./uploads/background/'.$nama_gambar);

		$this->db->where('id_gbr', '1');
		$this->db->update($this->table8, $data);
		return 'berhasil update gambar';
	}

	function updateGbrUser($data){
		$this->db->from($this->table8)->where('id_gbr','2');

		$query = $this->db->get();

		if($query->num_rows() > 0){
			foreach ($query->result() as $key) {
				$nama_gambar = $key->gambar;
			}
		}

		unlink('./uploads/background/'.$nama_gambar);
		$this->db->where('id_gbr', '2');
		$this->db->update($this->table8, $data);
		return 'berhasil update gambar';
	}

	function detailTotal($id_magang){
		$id = array();
		$hasil = array();
		$hasil['nama'] = '';
		$hasil['institusi'] = '';
		$hasil['jurusan'] = '';

		$id = explode('|', $id_magang);
		for($i = 1 ; $i < count($id); $i++){
			$this->db->from($this->tableRekap)->where('id_rekap',$id[$i]);
			$query = $this->db->get();
			if($query->num_rows() > 0){
				foreach ($query->result() as $key) {
					$hasil['nama'] = $hasil['nama'] .'|'. $key->nama_lengkap;
					$hasil['institusi'] = $hasil['institusi'] .'|'. $key->institusi;
					$hasil['jurusan'] = $hasil['jurusan'] .'|'. $key->jurusan;
				}
			}
		}

		return $hasil;
	}

	function cobaCetak($no_id){

		require_once 'PHPExcel.php';
		require_once 'PHPExcel/IOFactory.php';

		$objPHPExcel = new PHPExcel();

		// Create a first sheet, representing sales data
		$objPHPExcel->setActiveSheetIndex(0);
		$objPHPExcel->getActiveSheet()->setCellValue('A1', 'No');
		$objPHPExcel->getActiveSheet()->setCellValue('B1', 'Nama');
		$objPHPExcel->getActiveSheet()->setCellValue('C1', 'Jan');
		$objPHPExcel->getActiveSheet()->setCellValue('D1', 'Feb');
		$objPHPExcel->getActiveSheet()->setCellValue('E1', 'Maret');
		$objPHPExcel->getActiveSheet()->setCellValue('F1', 'Apr');
		$objPHPExcel->getActiveSheet()->setCellValue('G1', 'Jun');
		$objPHPExcel->getActiveSheet()->setCellValue('H1', 'Jul');
		$objPHPExcel->getActiveSheet()->setCellValue('I1', 'Agust');
		$objPHPExcel->getActiveSheet()->setCellValue('J1', 'Sept');
		$objPHPExcel->getActiveSheet()->setCellValue('K1', 'Okt');
		$objPHPExcel->getActiveSheet()->setCellValue('L1', 'Nov');
		$objPHPExcel->getActiveSheet()->setCellValue('M1', 'Des');

		$cell = array('C','D','E','F','G','H','I','J','K','L','M');
		$hasil = array();
		$bulan = array();
		$bulan1 = array();
		$k = 0;
		for($i = 0 ; $i < count($no_id); $i++){
			$this->db->from($this->tableRekap)->where('id_rekap',$no_id[$i]);
			$query = $this->db->get();
			if($query->num_rows() > 0){
				foreach ($query->result() as $key) {
					$hasil[$k] = $key->nama_lengkap;
					$bulan[$k] = $key->bulan_mulai;
					$bulan1[$k] = $key->bulan_keluar;
					$k++;
				}
			}
		}

		for($j = 0; $j< count($hasil); $j++){
			$objPHPExcel->getActiveSheet()->setCellValue('A'.($j+2), ($j+1));
			$objPHPExcel->getActiveSheet()->setCellValue('B'.($j+2), $hasil[$j]);
		}

		for($j = 0; $j< count($bulan); $j++){
			if($bulan[$j] == $bulan1[$j]){
				$objPHPExcel->getActiveSheet()->setCellValue($cell[(int)$bulan[$j]-2].($j+2),'x');
			}else{
				$objPHPExcel->getActiveSheet()->setCellValue($cell[(int)$bulan[$j]-2].($j+2),'x');
				$objPHPExcel->getActiveSheet()->setCellValue($cell[(int)$bulan1[$j]-2].($j+2),'x');
			}
		}

		// Rename sheet
		$objPHPExcel->getActiveSheet()->setTitle('Rekap 2016');
/**
		for($l=0; $l<12; $l++){
			$objPHPExcel->createSheet();

			$objPHPExcel->setActiveSheetIndex($l+1);
			$objPHPExcel->getActiveSheet()->setCellValue('A1', 'More data');

			$objPHPExcel->getActiveSheet()->setTitle(''.($l+1));
		}
		*/
		
		// Redirect output to a client’s web browser (Excel5)
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="rekap.xls"');
		header('Cache-Control: max-age=0');
		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
		$objWriter->save('php://output');
	}

	function cv($data_cv){

		require('fpdf/fpdf.php');

		$dataAnggota = $this->getDataCvAnggota($data_cv['id_anggota']);
		if($dataAnggota != null){
			foreach ($dataAnggota as $key) {
				$nama = $key->nama_lengkap;
				$jurusan = $key->jurusan;
				$fakultas = $key->fakultas;
				$institusi = $key->institusi;
				$foto = $key->foto;
			}
		}

		$dataMagang = $this->getDataCv($data_cv['id_magang']);
		if($dataMagang != null){
			foreach ($dataMagang as $key) {
				$tgl_mulai = $key->tgl_mulai;
				$tgl_keluar = $key->tgl_keluar;
			}
		}

		$bulanIndo = array('Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
		$tahun1 = substr($tgl_mulai, 0,4);
		$bulan1 = substr($tgl_mulai, 5,2);
		$tgl1 = substr($tgl_mulai, 8,2);
		$formatMulai = $tgl1.' '.$bulanIndo[(int)$bulan1-1].' '.$tahun1;

		$tahun2 = substr($tgl_keluar, 0,4);
		$bulan2 = substr($tgl_keluar, 5,2);
		$tgl2 = substr($tgl_keluar, 8,2);
		$formatKeluar = $tgl2.' '.$bulanIndo[(int)$bulan2-1].' '.$tahun2;

		$dompdf = new FPDF();
		$dompdf->AddPage();
		$dompdf->SetFont('Times','B',13);
		$dompdf->Image(base_url().'User/Home/load_logo', 95, 20, 27, 9, 'png', '');
		$dompdf->text(75,35,'Data Diri Anggota Kerja Praktek');

		$ext = explode('.',$foto);
		$dompdf->Image(base_url().'uploads/foto_anggota/'.$foto, 160, 55, 36, 48, $ext[1], '');

		$dompdf->SetFont('Times','',11);
		$dompdf->text(20,55,'Nama');
		$dompdf->text(70,55,':');
		$dompdf->text(73,55,$nama);

		$dompdf->text(20,60,'Jurusan');
		$dompdf->text(70,60,':');
		$dompdf->text(73,60,$jurusan);

		$dompdf->text(20,65,'Fakultas');
		$dompdf->text(70,65,':');
		$dompdf->text(73,65,$fakultas);

		$dompdf->text(20,70,'Sekolah/Univ');
		$dompdf->text(70,70,':');
		$dompdf->text(73,70,$institusi);

		$dompdf->text(20,75,'Waktu Pelaksanaan');
		$dompdf->text(70,75,':');
		$dompdf->text(73,75,$formatMulai. ' sd '.$formatKeluar);

		$dompdf->text(20,80,'Kelebihan');
		$dompdf->text(70,80,':');

		$y = 80;
		$dataKelebihan = $this->getDataCvKelebihan($data_cv['id_anggota']);
		$i = 5;
		if($dataKelebihan != null){
			foreach ($dataKelebihan as $key) {
				$y = 80 + $i;
				$dompdf->text(73,$y,'-  '.$key->kelebihan);
				$i = $i + 5;
			}
		}

		$dompdf->text(20,($y+5),'Kekurangan');
		$dompdf->text(70,($y+5),':');

		$y1 = 85;
		$dataKelemahan = $this->getDataCvKelemahan($data_cv['id_anggota']);
		$i = 5;
		if($dataKelemahan != null){
			foreach ($dataKelemahan as $key) {
				$y1 = ($y+5) + $i;
				$dompdf->text(73,$y1,'-  '.$key->kelemahan);
				$i = $i + 5;
			}
		}

		$dompdf->text(20,($y1+5),'Pengalaman Organisasi');
		$dompdf->text(70,($y1+5),':');

		$y2 = $y1+5;
		$dataOrganisasi = $this->getDataCvOrganisasi($data_cv['id_anggota']);
		$i = 7;
		if($dataOrganisasi != null){
				$dompdf->SetLeftMargin(20);
				$dompdf->SetFont('Times','B',11);
				$dompdf->cell(0,$y1,' ',0,1);
				$dompdf->cell(75,7,"Nama Organisasi",1,0,'C');
				$dompdf->cell(60,7,"Jabatan",1, 0, 'C' );
				$dompdf->cell(40,7,"Tahun",1, 1, 'C' );
				$y2 = ($y1 + 12);
			foreach ($dataOrganisasi as $key) {
				$y2 = $y2 + $i;
				$dompdf->SetFont('Times','',11);
				$dompdf->cell(75,7,$key->nama_organisasi,1,0,'C');
				$dompdf->cell(60,7,$key->jabatan,1, 0, 'C' );
				$dompdf->cell(40,7,$key->tahun_organisasi,1, 1, 'C' );
				$i = $i + 7;
			}
		}

		$dataTraining = $this->getDataCvTraining($data_cv['id_anggota']);
		$i = 5;
		$dompdf->SetLeftMargin(20);
		$dompdf->SetFont('Times','',11);
		if($dataOrganisasi == null){
			$dompdf->text(20,($y2+5),'Pelatihan');
			$dompdf->text(70,($y2+5),':');
			$dompdf->cell(0,$y2,'',0,1);
		}else{
			$dompdf->cell(0,10,'Pelatihan                                    : ',0,1);
		}
		if($dataTraining != null){
				$dompdf->SetFont('Times','B',11);
				$dompdf->cell(75,7,"Nama Training",1,0,'C');
				$dompdf->cell(60,7,"Penanggungjawab",1, 0, 'C' );
				$dompdf->cell(40,7,"Tahun",1, 1, 'C' );
			foreach ($dataTraining as $key) {
				$y3 = ($y2+5) + $i;
				$dompdf->SetFont('Times','',11);
				$dompdf->cell(75,7,$key->nama_training,1,0,'C');
				$dompdf->cell(60,7,$key->penanggungjawab,1, 0, 'C' );
				$dompdf->cell(40,7,$key->tahun_training,1, 1, 'C' );
				$i = $i + 7;
			}
		}
		//$dompdf->_UTF8toUTF16(file_get_contents(base_url().'Admin/Login/kontentCv',false,$context));
		//$dompdf->setPaper('A4', 'portrait');
		//$dompdf->render();
		//$dompdf->stream("sample.pdf");
		$dompdf->Output();
	}
	
	function getDataCv($data){
		$this->db->from($this->table1)->where('id_magang',$data);

		$query = $this->db->get();

		if($query->num_rows() > 0){
			return $query->result();
		}
	}

	function getDataCvAnggota($data){
		$this->db->from($this->table2)->where('id_anggota',$data);

		$query = $this->db->get();

		if($query->num_rows() > 0){
			return $query->result();
		}
	}

	function getDataCvKelebihan($data){
		$this->db->from($this->table5)->where('id_anggota',$data);

		$query = $this->db->get();

		if($query->num_rows() > 0){
			return $query->result();
		}
	}

	function getDataCvKelemahan($data){
		$this->db->from($this->table6)->where('id_anggota',$data);

		$query = $this->db->get();

		if($query->num_rows() > 0){
			return $query->result();
		}
	}

	function getDataCvOrganisasi($data){
		$this->db->from($this->table3)->where('id_anggota',$data);

		$query = $this->db->get();

		if($query->num_rows() > 0){
			return $query->result();
		}
	}

	function getDataCvTraining($data){
		$this->db->from($this->table4)->where('id_anggota',$data);

		$query = $this->db->get();

		if($query->num_rows() > 0){
			return $query->result();
		}
	}

	function hapusSemuaKerjaPraktek(){
		session_start();
		$this->db->from($this->table1)->where('tipe','Kerja Praktek')->where('status !=','0')->where('unit',$_SESSION['unit']);

		$query = $this->db->get();

		if($query->num_rows() > 0){
			foreach ($query->result() as $key) {
				$proposal = $key->nama_file_proposal;
				$surat = $key->nama_gambar_surat;
				$id_magang = $key->id_magang;

				unlink('./uploads/surat_pengantar/'.$surat);
				unlink('./uploads/proposal/'.$proposal);

				$this->db->from($this->table2)->where('id_magang',$id_magang);

				$query1 = $this->db->get();

				if($query1->num_rows() > 0){
					foreach ($query1->result() as $key) {
						$id_anggota = $key->id_anggota;
						$foto = $key->foto;
						unlink('./uploads/foto_anggota/'.$foto);

						$this->db->where('id_anggota',$id_anggota)->delete($this->table3);
						$this->db->where('id_anggota',$id_anggota)->delete($this->table4);
						$this->db->where('id_anggota',$id_anggota)->delete($this->table5);
						$this->db->where('id_anggota',$id_anggota)->delete($this->table6);
					}
				}

				$this->db->where('id_magang', $id_magang)->delete($this->table2);
				$this->db->where('id_magang', $id_magang)->delete($this->table1);
			}
		}

		return true;
	}	
	

	function hapusSemuaPenelitian(){
		session_start();
		$this->db->from($this->table1)->where('tipe','Penelitian')->where('status !=','0')->where('unit',$_SESSION['unit']);

		$query = $this->db->get();

		if($query->num_rows() > 0){
			foreach ($query->result() as $key) {
				$proposal = $key->nama_file_proposal;
				$surat = $key->nama_gambar_surat;
				$id_magang = $key->id_magang;

				unlink('./uploads/surat_pengantar/'.$surat);
				unlink('./uploads/proposal/'.$proposal);

				$this->db->from($this->table2)->where('id_magang',$id_magang);

				$query1 = $this->db->get();

				if($query1->num_rows() > 0){
					foreach ($query1->result() as $key) {
						$foto = $key->foto;
						$id_anggota = $key->id_anggota;
						unlink('./uploads/foto_anggota/'.$foto);

						$this->db->where('id_anggota',$id_anggota)->delete($this->table3);
						$this->db->where('id_anggota',$id_anggota)->delete($this->table4);
						$this->db->where('id_anggota',$id_anggota)->delete($this->table5);
						$this->db->where('id_anggota',$id_anggota)->delete($this->table6);
					}
				}

				$this->db->where('id_magang', $id_magang)->delete($this->table2);
				$this->db->where('id_magang', $id_magang)->delete($this->table9);
				$this->db->where('id_magang', $id_magang)->delete($this->table1);
			}
		}

		return true;
	}	

	function cetakLaporanKp(){
		session_start();

		require_once 'PHPExcel.php';
		require_once 'PHPExcel/IOFactory.php';

		$dayList = array(
			'Sun' => 'Minggu',
			'Mon' => 'Senin',
			'Tue' => 'Selasa',
			'Wed' => 'Rabu',
			'Thu' => 'Kamis',
			'Fri' => 'Jumat',
			'Sat' => 'Sabtu'
		);

		$monthList = array(
			'Jan' => 'Januari',
			'Feb' => 'Februari',
			'Mar' => 'Maret',
			'Apr' => 'April',
			'May' => 'Mei',
			'Jun' => 'Juni',
			'Jul' => 'Juli',
			'Aug' => 'Agustus',
			'Sep' => 'September',
			'Oct' => 'Oktober',
			'Nov' => 'November',
			'Dec' => 'Desember'
		);

		$objPHPExcel = new PHPExcel();
		$sheet=0;

		for($l = 1; $l <= 12; $l++){
			$row=2;
			$this->db->from($this->table1)->where('tipe','Kerja Praktek')->where('Month(tgl_mulai)',$l)->where('unit',$_SESSION['unit']);

			$query = $this->db->get();

			if($sheet != 0){
				$objPHPExcel->createSheet();
			}

			$objPHPExcel->setActiveSheetIndex($sheet);
			$objPHPExcel->getActiveSheet()->setTitle('bulan '.($l));

			$objPHPExcel->getActiveSheet()->setCellValue('A1', 'No Formulir');
			$objPHPExcel->getActiveSheet()->setCellValue('B1', 'Batas Evaluasi');
			$objPHPExcel->getActiveSheet()->setCellValue('C1', 'Nama');
			$objPHPExcel->getActiveSheet()->setCellValue('D1', 'Nomor HP');
			$objPHPExcel->getActiveSheet()->setCellValue('E1', 'Nomor Surat');
			$objPHPExcel->getActiveSheet()->setCellValue('F1', 'Tanggal Surat');
			$objPHPExcel->getActiveSheet()->setCellValue('G1', 'Asal Surat');
			$objPHPExcel->getActiveSheet()->setCellValue('H1', 'Perihal');
			$objPHPExcel->getActiveSheet()->setCellValue('I1', 'Program Studi');
			$objPHPExcel->getActiveSheet()->setCellValue('J1', 'Fakultas');
			$objPHPExcel->getActiveSheet()->setCellValue('K1', 'Sekolah/Universitas');
			$objPHPExcel->getActiveSheet()->setCellValue('L1', 'Jumlah Peserta');
			$objPHPExcel->getActiveSheet()->setCellValue('M1', 'Selama');
			$objPHPExcel->getActiveSheet()->setCellValue('N1', 'Subdit');
			$objPHPExcel->getActiveSheet()->setCellValue('O1', 'Mulai');
			$objPHPExcel->getActiveSheet()->setCellValue('P1', 'Selesai');
			$objPHPExcel->getActiveSheet()->setCellValue('Q1', 'Keputusan');
			$objPHPExcel->getActiveSheet()->setCellValue('R1', 'Surat Persetujuan');
			$objPHPExcel->getActiveSheet()->setCellValue('S1', 'Kupon Makan');
			$objPHPExcel->getActiveSheet()->setCellValue('T1', 'Surat Keterangan');
			$objPHPExcel->getActiveSheet()->setCellValue('U1', 'Tanggal Diterima');

			if($query->num_rows() > 0){
				foreach ($query->result() as $key) {
					$id_magang = $key->id_magang;
					$nomor_surat = $key->nomor_surat;
					$tgl_surat = $key->tgl_surat;
					$perihal_surat = $key->perihal_surat;
					$anggota = $key->anggota;
					$tgl_masuk = $key->tgl_masuk;
					$tgl_keluar = $key->tgl_keluar;
					$tgl_mulai = $key->tgl_mulai;

					$this->db->from($this->table2)->where('id_magang',$id_magang);

					$query1 = $this->db->get();

					if($query1->num_rows() > 0){
						foreach ($query1->result() as $key) {
							$e = 1;
							$objPHPExcel->getActiveSheet()->setCellValue('C'.($row), $key->nama_lengkap);
							$objPHPExcel->getActiveSheet()->setCellValue('D'.($row), $key->no_hp);
							$objPHPExcel->getActiveSheet()->setCellValue('E'.($row), $nomor_surat);
							$objPHPExcel->getActiveSheet()->setCellValue('G'.($row), $key->institusi);
							$objPHPExcel->getActiveSheet()->setCellValue('H'.($row), $perihal_surat);
							$objPHPExcel->getActiveSheet()->setCellValue('I'.($row), $key->jurusan);
							$objPHPExcel->getActiveSheet()->setCellValue('J'.($row), $key->fakultas);
							$objPHPExcel->getActiveSheet()->setCellValue('K'.($row), $key->institusi);
							$objPHPExcel->getActiveSheet()->setCellValue('L'.($row), $anggota);

							$bulanmulai = date('M', strtotime($tgl_mulai));
							$bulankeluar = date('M', strtotime($tgl_keluar));
							$bulanmasuk = date('M', strtotime($tgl_masuk));
							$bulansurat = date('M', strtotime($tgl_surat));
							$tglmulai = explode('-', $tgl_mulai);
							$tglkeluar = explode('-', $tgl_keluar);
							$tglmasuk = explode('-', $tgl_masuk);
							$tglsurat = explode('-', $tgl_surat);
							$lama = ($tglkeluar[1]-$tglmulai[1]) + 1;

							$tglmulai1 = $tglmulai[2].' '.$monthList[$bulanmulai].' '.$tglmulai[0];
							$tglkeluar1 = $tglkeluar[2].' '.$monthList[$bulankeluar].' '.$tglkeluar[0];
							$tglmasuk1 = $tglmasuk[2].' '.$monthList[$bulanmasuk].' '.$tglmasuk[0];
							$tglsurat1 = $tglsurat[2].' '.$monthList[$bulansurat].' '.$tglsurat[0];

							$objPHPExcel->getActiveSheet()->setCellValue('F'.($row), $tglsurat1);

							$objPHPExcel->getActiveSheet()->setCellValue('M'.($row), $lama.' bulan');
							$objPHPExcel->getActiveSheet()->setCellValue('O'.($row), $tglmulai1);
							$objPHPExcel->getActiveSheet()->setCellValue('P'.($row), $tglkeluar1);
							$objPHPExcel->getActiveSheet()->setCellValue('U'.($row), $tglmasuk1);

							if($anggota == 2 && $e == 1){
								$row++;
								$e++;
							}

						}
						$row++;
					}
					
				}
				
			}
			$sheet++;
		}

		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="rekap_kerja_praktek_per_bulan.xls"');
		header('Cache-Control: max-age=0');
		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
		$objWriter->save('php://output');
	}

	function cetakLaporanPenelitian(){
		session_start();

		require_once 'PHPExcel.php';
		require_once 'PHPExcel/IOFactory.php';

		$dayList = array(
			'Sun' => 'Minggu',
			'Mon' => 'Senin',
			'Tue' => 'Selasa',
			'Wed' => 'Rabu',
			'Thu' => 'Kamis',
			'Fri' => 'Jumat',
			'Sat' => 'Sabtu'
		);

		$monthList = array(
			'Jan' => 'Januari',
			'Feb' => 'Februari',
			'Mar' => 'Maret',
			'Apr' => 'April',
			'May' => 'Mei',
			'Jun' => 'Juni',
			'Jul' => 'Juli',
			'Aug' => 'Agustus',
			'Sep' => 'September',
			'Oct' => 'Oktober',
			'Nov' => 'November',
			'Dec' => 'Desember'
		);

		$objPHPExcel = new PHPExcel();
		$sheet=0;

		for($l = 1; $l <= 12; $l++){
			$row=2;
			$this->db->from($this->table1)->where('tipe','Penelitian')->where('Month(tgl_mulai)',$l)->where('unit',$_SESSION['unit']);

			$query = $this->db->get();

			if($sheet != 0){
				$objPHPExcel->createSheet();
			}

			$objPHPExcel->setActiveSheetIndex($sheet);
			$objPHPExcel->getActiveSheet()->setTitle('bulan '.($l));

			$objPHPExcel->getActiveSheet()->setCellValue('A1', 'No Formulir');
			$objPHPExcel->getActiveSheet()->setCellValue('B1', 'Batas Evaluasi');
			$objPHPExcel->getActiveSheet()->setCellValue('C1', 'Nama');
			$objPHPExcel->getActiveSheet()->setCellValue('D1', 'Nomor HP');
			$objPHPExcel->getActiveSheet()->setCellValue('E1', 'Nomor Surat');
			$objPHPExcel->getActiveSheet()->setCellValue('F1', 'Judul Proposal');
			$objPHPExcel->getActiveSheet()->setCellValue('G1', 'Tanggal Surat');
			$objPHPExcel->getActiveSheet()->setCellValue('H1', 'Asal Surat');
			$objPHPExcel->getActiveSheet()->setCellValue('I1', 'Perihal');
			$objPHPExcel->getActiveSheet()->setCellValue('J1', 'Program Studi');
			$objPHPExcel->getActiveSheet()->setCellValue('K1', 'Fakultas');
			$objPHPExcel->getActiveSheet()->setCellValue('L1', 'Sekolah/Universitas');
			$objPHPExcel->getActiveSheet()->setCellValue('M1', 'Jumlah Peserta');
			$objPHPExcel->getActiveSheet()->setCellValue('N1', 'Selama');
			$objPHPExcel->getActiveSheet()->setCellValue('O1', 'Subdit');
			$objPHPExcel->getActiveSheet()->setCellValue('P1', 'Mulai');
			$objPHPExcel->getActiveSheet()->setCellValue('Q1', 'Selesai');
			$objPHPExcel->getActiveSheet()->setCellValue('R1', 'Keputusan');
			$objPHPExcel->getActiveSheet()->setCellValue('S1', 'Surat Persetujuan');
			$objPHPExcel->getActiveSheet()->setCellValue('T1', 'Kupon Makan');
			$objPHPExcel->getActiveSheet()->setCellValue('U1', 'Surat Keterangan');
			$objPHPExcel->getActiveSheet()->setCellValue('V1', 'Tanggal Diterima');

			if($query->num_rows() > 0){
				foreach ($query->result() as $key) {
					$id_magang = $key->id_magang;
					$nomor_surat = $key->nomor_surat;
					$tgl_surat = $key->tgl_surat;
					$perihal_surat = $key->perihal_surat;
					$anggota = $key->anggota;
					$tgl_masuk = $key->tgl_masuk;
					$tgl_keluar = $key->tgl_keluar;
					$tgl_mulai = $key->tgl_mulai;

					$this->db->from($this->table2)->where('id_magang',$id_magang);

					$query1 = $this->db->get();

					if($query1->num_rows() > 0){
						foreach ($query1->result() as $key) {
							$e = 1;
							$institusi = $key->institusi;
							$jurusan = $key->jurusan;
							$fakultas = $key->fakultas;

							$objPHPExcel->getActiveSheet()->setCellValue('C'.($row), $key->nama_lengkap);
							$objPHPExcel->getActiveSheet()->setCellValue('D'.($row), $key->no_hp);
							$objPHPExcel->getActiveSheet()->setCellValue('E'.($row), $nomor_surat);

							$this->db->from($this->table9)->where('id_magang',$id_magang);

							$query2 = $this->db->get();

							if($query2->num_rows() > 0){
								foreach ($query2->result() as $key) {
									$objPHPExcel->getActiveSheet()->setCellValue('F'.($row), $key->judul_penulisan);
								}
							}

							$objPHPExcel->getActiveSheet()->setCellValue('H'.($row), $institusi);
							$objPHPExcel->getActiveSheet()->setCellValue('I'.($row), $perihal_surat);
							$objPHPExcel->getActiveSheet()->setCellValue('J'.($row), $jurusan);
							$objPHPExcel->getActiveSheet()->setCellValue('K'.($row), $fakultas);
							$objPHPExcel->getActiveSheet()->setCellValue('L'.($row), $jurusan);
							$objPHPExcel->getActiveSheet()->setCellValue('M'.($row), $anggota);
							$bulanmulai = date('M', strtotime($tgl_mulai));
							$bulankeluar = date('M', strtotime($tgl_keluar));
							$bulanmasuk = date('M', strtotime($tgl_masuk));
							$bulansurat = date('M', strtotime($tgl_surat));
							$tglmulai = explode('-', $tgl_mulai);
							$tglkeluar = explode('-', $tgl_keluar);
							$tglmasuk = explode('-', $tgl_masuk);
							$tglsurat = explode('-', $tgl_surat);
							$lama = ($tglkeluar[1]-$tglmulai[1]) + 1;

							$tglmulai1 = $tglmulai[2].' '.$monthList[$bulanmulai].' '.$tglmulai[0];
							$tglkeluar1 = $tglkeluar[2].' '.$monthList[$bulankeluar].' '.$tglkeluar[0];
							$tglmasuk1 = $tglmasuk[2].' '.$monthList[$bulanmasuk].' '.$tglmasuk[0];
							$tglsurat1 = $tglsurat[2].' '.$monthList[$bulansurat].' '.$tglsurat[0];

							$objPHPExcel->getActiveSheet()->setCellValue('G'.($row), $tglsurat1);

							$objPHPExcel->getActiveSheet()->setCellValue('N'.($row), $lama.' bulan');
							$objPHPExcel->getActiveSheet()->setCellValue('P'.($row), $tglmulai1);
							$objPHPExcel->getActiveSheet()->setCellValue('Q'.($row), $tglkeluar1);
							$objPHPExcel->getActiveSheet()->setCellValue('V'.($row), $tglmasuk1);

							if($anggota == 2 && $e == 1){
								$row++;
								$e++;
							}

						}
						$row++;
					}
					
				}
				
			}
			$sheet++;
		}

		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="rekap_penelitian_per_bulan.xls"');
		header('Cache-Control: max-age=0');
		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
		$objWriter->save('php://output');
	}

}