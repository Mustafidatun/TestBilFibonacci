<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Controller extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model("model"); 
	}

	public function halaman()
	{
		$data['listProducts'] = $this->model->m_lihat(); 
		$this->load->view('v_halaman', $data); 
	}
	
	public function tambah(){
		$this->load->view('v_tambah');
	}
	
	public function tambah_act(){
		$data = array(
				'judul' => $this->input->post('judul'),
				'pengarang' => $this->input->post('pengarang'),
				'kategori' => $this->input->post('kategori')
				);
		$this->model->m_tambah_act($data);
		redirect(base_url().'index.php/controller/halaman');
	}
	
	function hapus($id){
		$data=array(
			'id' => $id
			);
		$this->model->m_hapus($data);
		redirect(base_url().'index.php/controller/halaman');
	}
	
	function edit($id){
		$data = array(
				'id' => $id
				);
		$data['data_edit']=$this->model->m_edit($data);
		$this->load->view('v_edit',$data);
	}
	
	function update(){
		$id = $this->input->post('id');
		$data = array(
				'judul' => $this->input->post('judul'),
				'pengarang' => $this->input->post('pengarang'),
				'kategori' => $this->input->post('kategori')
				);
		$this->model->m_update($data, $id);
		redirect(base_url(),'index.php/controller/halaman');
	}
	
	public function paging()
	{
		//$this->load->model('model');
		$this->load->library('pagination');
		
		$config['base_url']		= site_url('controller/paging');
		//$config['total_rows']	= $this->model->m_buku_num_rows();
		$config['total_rows']	= 100;
		$config['per_page']		= 1;
		$config["uri_segment"]	= 3;
		$config['first_link']	= '';
		$config['last_link']	= '';
		$config['next_link']	= '<input type="submit" name="btnNext" value="Next"/>';
		$config['prev_link']	= '<input type="submit" name="btnPrev" value="Prev"/>';
		$config['cur_tag_open']	= '<strong>';
		$config['cur_tag_close'] = '</strong>';
		//$choice = $config["total_rows"] / $config["per_page"];
    	//$config["num_links"] = round($choice);
		
		$this->pagination->initialize($config);
		
		$data['paging'] = $this->pagination->create_links();
		
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) :0;
		
		//$data['data'] = $this->model->m_buku($per_page, $page);
		
		$this->load->view('v_paging', $data);
	}
	
	function index(){
		$angka_sebelumnya=0;
		$angka_sekarang=1;
		
		for ($i=0; $i<10; $i++)
		{
		  // hitung angka yang akan ditampilkan
		  $output = $angka_sekarang + $angka_sebelumnya;
		  $hasil['hasil'][] = $output;
		  
		  //siapkan angka untuk perhitungan berikutnya
		  $angka_sebelumnya = $angka_sekarang;
		  $angka_sekarang = $output;
		  
		}
		$this->load->view('v_deret', $hasil);
	}
	
	function deret(){
		if($this->input->post('btnNext')){
			
			$var = $this->input->post('var3');
			$var2 = $this->input->post('var4');
			$angka_sebelumnya=$var;
			$angka_sekarang=$var2;
			
			
				for ($i=0; $i<10; $i++)
				{
				  // hitung angka yang akan ditampilkan
				  $output = $angka_sekarang + $angka_sebelumnya;
				  $hasil['hasil'][] = $output;
				  
				  //siapkan angka untuk perhitungan berikutnya
				  $angka_sebelumnya = $angka_sekarang;
				  $angka_sekarang = $output;
			  
				}
			$this->load->view('v_deret', $hasil);
		}
		
		elseif($this->input->post('btnPrev')){
		
			$var = $this->input->post('var');
			$var2 = $this->input->post('var2');
			$angka_sebelumnya=$var;
			$angka_sekarang=$var2;
				
				for ($i=0; $i<12; $i++)
				{
				  // hitung angka yang akan ditampilkan
				  $output = $angka_sekarang - $angka_sebelumnya;
				  $array[] = $output;
				  
				  //siapkan angka untuk perhitungan berikutnya
				  $angka_sekarang = $angka_sebelumnya;
				  $angka_sebelumnya = $output;
				  
				}
				
			$hsilarray = array($array[10],$array[11]);
			$angka_sebelumnya1=$hsilarray[1];
			$angka_sekarang1=$hsilarray[0];
			
				for ($x=0; $x<10; $x++)
				{
				  // hitung angka yang akan ditampilkan
				  $output1 = $angka_sekarang1 + $angka_sebelumnya1;
				  $hasil['hasil'][] = $output1;
				  
				  //siapkan angka untuk perhitungan berikutnya
				  $angka_sebelumnya1 = $angka_sekarang1;
				  $angka_sekarang1 = $output1;
				  
				}
				$this->load->view('v_deret', $hasil );
		}
		
	}
}
?>
