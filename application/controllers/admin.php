<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('Mymodel_admin');
	}

	public function index()
	{
		if($this->session->userdata('status') != "login"){
			redirect('Auth');
		}else{
			$this->load->view('dashboard');
		}
	}
	public function profile()
	{
		if($this->session->userdata('status') != "login"){
			redirect('Auth');
		}else{
			$this->load->view('form_profile');
		}
	}
	public function student()
	{
		if($this->session->userdata('status') != "login"){
			redirect('Auth');
		}else{
			$data['db_siswa'] = $this->Mymodel_admin->Getstudent();
			$this->load->view('form_daftar_student',$data);
		}
	}
	public function teacher()
	{
		if($this->session->userdata('status') != "login"){
			redirect('Auth');
		}else{
			$data['db_guru'] = $this->Mymodel_admin->Getteacher();
			$this->load->view('form_daftar_teacher',$data);
		}
	}
	public function determination()
	{
		if($this->session->userdata('status') != "login"){
			redirect('Auth');
		}else{
			$data['db_nilai'] = $this->Mymodel_admin->Getnilai();
			$data['db_siswa'] = $this->Mymodel_admin->Getstudent();
			$this->load->view('form_determination',$data);
		}
	}	

	public function mapel()
	{
		if($this->session->userdata('status') != "login"){
			redirect('Auth');
		}else{
			$data['db_mapel'] = $this->Mymodel_admin->Getmapel();
			$this->load->view('form_daftar_mapel',$data);
		}
	}


	public function add_student()
	{
		if($this->session->userdata('status') != "login"){
			redirect('Auth');
		}else{
			$this->load->view('form_add_student');
		}
	}
	public function add_teacher()
	{
		if($this->session->userdata('status') != "login"){
			redirect('Auth');
		}else{
			$this->load->view('form_add_teacher');
		}
	}

	public function insert_student(){
		if($this->session->userdata('status') != "login"){
			redirect('Auth');
		}else{
			$nis = $_POST['nis'];
			$nama = $_POST['nama'];
			$jenis_kelamin = $_POST['jenis_kelamin'];
			$tempat_lahir = $_POST['tempat_lahir'];
			$kelas = $_POST['kelas'];
			$alamat = $_POST['alamat'];

			$insert = array(
				'nis' => $nis,
				'nama' => $nama,
				'jenis_kelamin' => $jenis_kelamin,
				'tempat_lahir' => $tempat_lahir,
				'kelas' => $kelas,
				'alamat' => $alamat,
			);

			$res = $this->Mymodel_admin->Insert('db_siswa',$insert);
			if($res >=1){
			
				redirect('admin/student');
			}
		}
	}

	public function insert_teacher(){
		if($this->session->userdata('status') != "login"){
			redirect('Auth');
		}else{
			$nip = $_POST['nip'];
			$nama = $_POST['nama'];
			$alamat = $_POST['alamat'];

			$insert = array(
				'nip' => $nip,
				'nama' => $nama,
				'alamat' => $alamat,
			);

			$res = $this->Mymodel_admin->Insert('db_guru',$insert);
			if($res >=1){
			
				redirect('admin/teacher');
			}
		}
	}

	public function edit_student($nis){
		if($this->session->userdata('status') != "login"){
			redirect('Auth');
		}else{	
			$data['db_siswa'] = $this->Mymodel_admin->Getstudent("where nis = '$nis' ");
			$this->load->view('form_edit_student',$data);
		}
	}

		public function edit_teacher($nip){
		if($this->session->userdata('status') != "login"){
			redirect('Auth');
		}else{	
			$data['db_guru'] = $this->Mymodel_admin->Getteacher("where nip = '$nip' ");
			$this->load->view('form_edit_teacher',$data);
		}
	}


	public function update_student(){
		if($this->session->userdata('status') != "login"){
			redirect('Auth');
		}else{
			$nis = $_POST['nis'];
			$nama = $_POST['nama'];
			$jenis_kelamin = $_POST['jenis_kelamin'];
			$tempat_lahir = $_POST['tempat_lahir'];
			$kelas = $_POST['kelas'];
			$alamat = $_POST['alamat'];


			$update = array(
				'nis' => $nis,
				'nama' => $nama,
				'jenis_kelamin' => $jenis_kelamin,
				'tempat_lahir' => $tempat_lahir,
				'kelas' => $kelas,
				'alamat' => $alamat,
			);
			
			$where = array('nis' => $nis);
			$res = $this->Mymodel_admin->update('db_siswa',$update,$where);
			if($res >=1){
				redirect('admin/student');
			}
		}
	}

	public function update_teacher(){
		if($this->session->userdata('status') != "login"){
			redirect('Auth');
		}else{
			$nip = $_POST['nip'];
			$nama = $_POST['nama'];
			$alamat = $_POST['alamat'];


			$update = array(
				'nip' => $nip,
				'nama' => $nama,
				'alamat' => $alamat,
			);
			
			$where = array('nip' => $nip);
			$res = $this->Mymodel_admin->update('db_guru',$update,$where);
			if($res >=1){
				redirect('admin/teacher');
			}
		}
	}

	public function delete_student($nis){
		if($this->session->userdata('status') != "login"){
			redirect('Auth');	
		}else{

			$where = array('nis' => $nis);
			$res = $this->Mymodel_admin->delete('db_siswa',$where);
			if($res>=1){
				redirect('admin/student');
			}
		}

	}

	public function delete_teacher($nip){
		if($this->session->userdata('status') != "login"){
			redirect('Auth');	
		}else{

			$where = array('nip' => $nip);
			$res = $this->Mymodel_admin->delete('db_guru',$where);
			if($res>=1){
				redirect('admin/teacher');
			}
		}

	}


	public function kmeans(){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$data = $this->Mymodel_admin->Getnilai();
			
			$c1a = $_POST['c1a'];
			$c1b = $_POST['c1b'];
			$c1c = $_POST['c1c'];
			$c1d = $_POST['c1d'];
			
			$c2a = $_POST['c2a'];
			$c2b = $_POST['c2b'];
			$c2c = $_POST['c2c'];
			$c2d = $_POST['c2d'];
			
			$c3a = $_POST['c3a'];
			$c3b = $_POST['c3b'];
			$c3c = $_POST['c3c'];
			$c3d = $_POST['c3d'];
			
				/*echo "Centroid 1 = $c1a - $c1b - $c1c - $c1d <br>";
				echo "Centroid 2 = $c2a - $c2b - $c2c - $c2d <br>";
				echo "Centroid 3 = $c3a - $c3b - $c3c - $c3d <br>";*/

				$idx =0 ;
				

				foreach ($data as $datas) {
					$id[$idx] = $datas['id'];
					$nama[$idx] = $datas['nama'];
					$ind[$idx] = $datas['ind'];
					$ing[$idx] = $datas['ing'];
					$mtk[$idx] = $datas['mtk'];
					$ipa[$idx] = $datas['ipa'];
					$nis[$idx] = $datas['nis'];
					$idx++;
				}

				$c1anew = 0; $c1bnew = 0; $c1cnew = 0; $c1dnew = 0;
				$c2anew = 0; $c2bnew = 0; $c2cnew = 0; $c2dnew = 0;
				$c3anew = 0; $c3bnew = 0; $c3cnew = 0; $c3dnew = 0;
				$cek_rasio = -1; $wcf_ = 0; $rasio =0;

				for ($iterasi=0; $iterasi < 1000; $iterasi++) { 			
					//echo "<br>-----------------iterasi ke-$iterasi--------------------<br>";
					$bagi1 =0; $bagi2 =0; $bagi3 =0;
					$data1a =0; $data1b =0; $data1c =0; $data1d =0;
					$data2a =0;	$data2b =0; $data2c =0;	$data2d =0;
					$data3a =0;	$data3b =0; $data3c =0;	$data3d =0;
						# code...
					if($rasio == $cek_rasio )
					{
						break;
					}else{
						$wcf_ =0;
						$cek_rasio = $rasio;
						//echo "---------------------------Iterasi $iterasi----------------------------<br>";
						for ($i=0; $i < $idx; $i++) { 
						# code...
							if($c1anew != 0){
								$DM1[$i] = sqrt(pow($ind[$i] - $c1anew,2) + pow($ing[$i] - $c1bnew,2) + pow($mtk[$i] - $c1cnew,2) + pow($ipa[$i] - $c1dnew,2)) ;   
								$DM2[$i] = sqrt(pow($ind[$i] - $c2anew,2) + pow($ing[$i] - $c2bnew,2) + pow($mtk[$i] - $c2cnew,2) + pow($ipa[$i] - $c2dnew,2)) ;   
								$DM3[$i] = sqrt(pow($ind[$i] - $c3anew,2) + pow($ing[$i] - $c3bnew,2) + pow($mtk[$i] - $c3cnew,2) + pow($ipa[$i] - $c3dnew,2)) ; 
							}else{
								$DM1[$i] = sqrt(pow($ind[$i] - $c1a,2) + pow($ing[$i] - $c1b,2) + pow($mtk[$i] - $c1c,2) + pow($ipa[$i] - $c1d,2)) ;   
								$DM2[$i] = sqrt(pow($ind[$i] - $c2a,2) + pow($ing[$i] - $c2b,2) + pow($mtk[$i] - $c2c,2) + pow($ipa[$i] - $c2d,2)) ;   
								$DM3[$i] = sqrt(pow($ind[$i] - $c3a,2) + pow($ing[$i] - $c3b,2) + pow($mtk[$i] - $c3c,2) + pow($ipa[$i] - $c3d,2)) ;  
							}						
								if($DM1[$i] < $DM2[$i] && $DM1[$i] < $DM3[$i] ){
									$jarak[$i] = "C1";
									$nilai_jarak[$i] = pow($DM1[$i],2);
									$data1a = $data1a + $ind[$i]; 
									$data1b = $data1b + $ing[$i];
									$data1c = $data1c + $mtk[$i]; 
									$data1d = $data1d + $ipa[$i];
									$bagi1++;
								}else if($DM2[$i] < $DM1[$i] && $DM2[$i] < $DM3[$i] ){
									$jarak[$i] = "C2";
									$nilai_jarak[$i] = pow($DM2[$i],2);

									$data2a = $data2a + $ind[$i]; $data2b = $data2b + $ing[$i];
									$data2c = $data2c + $mtk[$i]; $data2d = $data2d + $ipa[$i];
									$bagi2++;
								}else{
									$jarak[$i] = "C3";
									$nilai_jarak[$i] = pow($DM3[$i],2);
									$data3a = $data3a + $ind[$i]; $data3b = $data3b + $ing[$i];
									$data3c = $data3c + $mtk[$i]; $data3d = $data3d + $ipa[$i];
									$bagi3++;
								}
									/*WCF*/
									$wcf_ = $wcf_ + $nilai_jarak[$i];
						//echo "$DM1[$i] - $DM2[$i] - $DM3[$i] ==> $jarak[$i] : $i <br><br>";	
						}

					if($c1anew != 0){
						$wcf1 = sqrt(pow($c1anew - $c2anew,2) + pow($c1bnew - $c2bnew,2) + pow($c1cnew - $c2cnew,2) + pow($c1dnew - $c2dnew,2)) ;
						/*D(m1,m3)*/ 
						$wcf2 = sqrt(pow($c1anew - $c3anew,2) + pow($c1bnew - $c3bnew,2) + pow($c1cnew - $c3cnew,2) + pow($c1dnew - $c3dnew,2)) ;
						/*D(m2,m3)*/ 
						$wcf3 = sqrt(pow($c2anew - $c3anew,2) + pow($c2bnew - $c3bnew,2) + pow($c2cnew - $c3cnew,2) + pow($c2dnew - $c3dnew,2)) ;

					}else{
						/*D(m1,m2)*/ 
						$wcf1 = sqrt(pow($c1a - $c2a,2) + pow($c1b - $c2b,2) + pow($c1c - $c2c,2) + pow($c1d - $c2d,2)) ;
						/*D(m1,m3)*/ 
						$wcf2 = sqrt(pow($c1a - $c3a,2) + pow($c1b - $c3b,2) + pow($c1c - $c3c,2) + pow($c1d - $c3d,2)) ;
						/*D(m2,m3)*/ 
						$wcf3 = sqrt(pow($c2a - $c3a,2) + pow($c2b - $c3b,2) + pow($c2c - $c3c,2) + pow($c2d - $c3d,2)) ;
					}
						$c1anew = $data1a / $bagi1 ; $c1bnew = $data1b / $bagi1 ;
						$c1cnew = $data1c / $bagi1 ; $c1dnew = $data1d / $bagi1 ;

						$c2anew = $data2a / $bagi2 ; $c2bnew = $data2b / $bagi2 ;
						$c2cnew = $data2c / $bagi2 ; $c2dnew = $data2d / $bagi2 ;

						$c3anew = $data3a / $bagi3 ; $c3bnew = $data3b / $bagi3 ;
						$c3cnew = $data3c / $bagi3 ; $c3dnew = $data3d / $bagi3 ;				
					/*BCV*/
					$bcv = $wcf1 + $wcf2 + $wcf3;
					$rasio = $bcv / $wcf_;

					for ($i=0; $i < $idx ; $i++) { 
						# code...
						if ($jarak[$i] == "C3") {
							$a = $i + 1 ;
							//echo "$a = c3<br>";
						}
					}
					/*echo "<br><br>=====================================================<br>";
					echo "C1 = $bagi1 - C2 = $bagi2 - C3 = $bagi3 <br> ";
					echo "c1 baru = $c1anew - $c1bnew - $c1cnew - $c1dnew <br>";
					echo "c2 baru = $c2anew - $c2bnew - $c2cnew - $c2dnew <br>";
					echo "c3 baru = $c3anew - $c3bnew - $c3cnew - $c3dnew <br>";
					echo "$bcv - $rasio <br>";
					echo "<br>=====================================================<br><br>";*/
					}

				}

				for ($i=0; $i < $idx ; $i++) {
					//echo "$DM1[$i] - $DM2[$i] - $DM3[$i] - $jarak[$i] <br>";
					$data_insert[$i] = array(
						'id' => $i+1,
						'nama' => $nama[$i],
						'ind' => $ind[$i],
						'ing' => $ing[$i],
						'mtk' => $mtk[$i],
						'ipa' => $ipa[$i],
						'nis' => $nis[$i],
						'dm1' => $DM1[$i],
						'dm2' => $DM2[$i],
						'dm3' => $DM3[$i],
						'status' => $jarak[$i],
						);
						
					$where = array('id' => $i+1);
					$res = $this->Mymodel_admin->Update('db_penjurusan',$data_insert[$i],$where);
					//$sukses = $this->Mymodel_admin->Insert('db_penjurusan',$data_insert[$i]);
					}

					$data_insert2 = array(
							'id' => 1,
							'c1a' => $c1anew,
							'c1b' => $c1bnew,
							'c1c' => $c1cnew,
							'c1d' => $c1dnew,
							'c2a' => $c2anew,
							'c2b' => $c2bnew,
							'c2c' => $c2cnew,
							'c2d' => $c2dnew,
							'c3a' => $c3anew,
							'c3b' => $c3bnew,
							'c3c' => $c3cnew,
							'c3d' => $c3dnew,
						);
					$where = array('id' => 1);
					$res = $this->Mymodel_admin->Update('db_centroid',$data_insert2,$where);
					//$sukses = $this->Mymodel_admin->Insert('db_centroid',$data_insert2);
					
					$data['db_penjurusan'] = $this->Mymodel_admin->Getpenjurusan();
					$data['db_centroid'] = $this->Mymodel_admin->Getcentroid();
					$this->load->view('form_hasil',$data);

			}
		}

}
