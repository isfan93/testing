<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data_tindakan_perawat extends MY_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('data_tindakan_perawat_model');
	}
	
	public function index(){
		$db1 = $this->load->database('default', TRUE);
		$data['main_view']	= 'data_tindakan_perawat/index';
		$data['title']		= 'Master Data Tindakan Keperawatan';
		$data['current']	= 1;
		$cf					= $this->cf;
		$data['cf']			=  $cf;
		$data['desc']		= 'Description. ';
		//$data['tipe_obat']		= $this->db->get('mst_type_inv')->result();
		$data['daftar']		= $this->db->order_by('menu_id','asc')->get_where('sys_menu',array('modul_id'=>$cf['modul_id']));
		 
		$this->load->view('template',$data);
	}
	
	function add(){
		$data['main_view']	= 'data_tindakan_perawat/index';
		$data['title']		= 'Data Tindakan';
		$data['current']	= 1;
		$modul = $this->cf;
		$data['cf']			=  $modul;
		$data['poli']		= $this->db->get('mst_poly');
		$this->load->view('template',$data);
	}


	function create(){
		$data = $this->input->post('ds');
		if($this->db->insert('mst_nursing_diagnosis', $data)){
			echo "berhasil";
		}
	
	}

	function update(){
		$data = $this->input->post('ds');	
 		$this->db->where('diagnosis_id', $data['diagnosis_id']);
		$this->db->update('mst_nursing_diagnosis', $data); 
	}
	
	function loaddata(){
		//$data['tipeobat']		= $this->db->get('mst_type_inv')->result();
		$data['datas'] = $this->data_tindakan_perawat_model->get_list();
		$this->load->view('data_tindakan_perawat/data',$data);

	}
	
	function add_master(){
		$data=$this->input->post('mst');
		$result=$this->data_tindakan_perawat_model->addMaster($data);
		if ($result){
			echo "data berhasil disimpan";
		}
	}
	
	function delete_list($kode='') {
        $data=$this->input->post('kode');
        if($kode == ''){
        	$this->data_tindakan_perawat_model->deleteData($data);
        	
        }else{
        	$this->data_tindakan_perawat_model->deleteData($kode);
        	
        }
    }
	
	function detail_list($key){
		$data['main_view']	= 'data_tindakan_perawat/index_detail';
		//$data['title']		= 'Master Data Paket Tindakan';
		$data['current']	= 1;
		$cf					= $this->cf;
		$data['cf']			=  $cf;
		$data['desc']		= 'Description. ';
		$data['konten']		= $this->data_tindakan_perawat_model->getInfoPacket($key);
		//$data['tindakan']	= $this->db->get('mst_nursing_diagnosis_detail')->result();
		$data['daftar']		= $this->db->order_by('menu_id','asc')->get_where('sys_menu',array('modul_id'=>$cf['modul_id']));
		$this->load->view('template',$data);
	}
	
	function list_treat(){
		$key=$this->input->get("term");
		//var $term;
		$query = $this->data_tindakan_perawat_model->GetList($key);
        print json_encode($query);
	}

	public function get_tindakan(){
		$data = array();
		$q = strtolower($_GET['term']);
		$data = $this->data_tindakan_perawat_model->GetList($q);
		echo json_encode($data);
	}
	
	function loaddata_detail($key){
		$data['datas'] = $this->data_tindakan_perawat_model->getDetail($key);
		$this->load->view('data_tindakan_perawat/detail',$data);
	}
	
	function create_detail(){
		$data = $this->input->post('ds');
		if($this->db->insert('map_diagnosis_nic', $data)){
			echo "berhasil";
		}
	}
	
	function delete_list_detail($kode) {
		$this->data_tindakan_perawat_model->deleteDataDetail($kode);        
    }
}