<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://yourwebsite.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/pages/<method_name>
	 */
	public function index() {
		$result['template'] = 'index';
		$this->load->view('template/frontend/template', $result);
	}
}
