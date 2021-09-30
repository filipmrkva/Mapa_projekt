<?php
class mapa_proj_controller extends CI_Controller {
public function menu() {
 $data['polozky'] = $this->mapa_proj_model->get_menu_polozky();
 $this->load->view('layout/layout_main', $data);
}
}