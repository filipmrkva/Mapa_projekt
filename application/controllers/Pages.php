<?php
class Pages extends CI_Controller {

        public function view()
    {            
                $this->load->model('mapa_proj_model');
                $data['polozky'] = $this->mapa_proj_model->get_menu();
                //$data['udaje'] = $this->db->query('')->result();
		$this->load->view('templates/header', $data);                
		$this->load->view('pages/home', $data);  
		$this->load->view('templates/footer');
	}
        public function home()
        {
                $this->load->model('mapa_proj_model');
                $data['polozky'] = $this->mapa_proj_model->get_menu();
                // $data['udaje'] = $this->db->query('SELECT skola.nazev, mesto.nazevm, pocet_prijatych.pocet from skola, mesto, pocet_prijatych')->result();
                $this->load->view('templates/header', $data);                
		$this->load->view('pages/home', $data);  
		$this->load->view('templates/footer');
        }
        public function map()
        {
                $this->load->model('mapa_proj_model');
                $data['polozky'] = $this->mapa_proj_model->get_menu();
                $this->load->view('templates/header', $data);                
		$this->load->view('pages/map', $data);  
		$this->load->view('templates/footer');
        }
}