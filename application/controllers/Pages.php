<?php
class Pages extends CI_Controller {

        public function view()
    {            
                $this->load->model('mapa_proj_model');
                $data['polozky'] = $this->mapa_proj_model->get_menu();
                $data['udaje'] = $this->db->query('SELECT * FROM mesto')->result();
                $data['udaje'] = $this->db->query('SELECT * FROM obor')->result();
		$this->load->view('templates/header', $data);                
		$this->load->view('pages/home', $data);  
		$this->load->view('templates/footer');
	}
        public function home()
        {
                $this->load->model('mapa_proj_model');
                $data['polozky'] = $this->mapa_proj_model->get_menu();
                $data['udaje'] = $this->db->query('SELECT * from mesto')->result();
                $data['udaje1'] = $this->db->query('SELECT * from obor')->result();
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