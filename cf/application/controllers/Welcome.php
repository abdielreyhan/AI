<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller 
{
	public function index()
	{
		$this->load->view('welcome');
	}

	public function perhitungan()
	{
		$sport = $this->sport();
		$matic = $this->matic();
		$bebek = $this->bebek();
	}

	private function sport()
	{
		$q1= $this->input->post('q1');
		$q2= $this->input->post('q2');
		$q5= $this->input->post('q5');
		$q6= $this->input->post('q6');
		$min = min($q1, $q2, $q5, $q6);
		return 0.8*$min;
	}

	private function matic()
	{
		$q2= $this->input->post('q2');
		$q3= $this->input->post('q3');
		$q4= $this->input->post('q4');
		$q5= $this->input->post('q5');
		$q6= $this->input->post('q6');
		$q7= $this->input->post('q7');
		$min = min($q2, $q3, $q4, $q5, $q6, $q7);
		return 0.8*$min;
	}

	private function bebek()
	{
		$q1= $this->input->post('q1');
		$q2= $this->input->post('q2');
		$q3= $this->input->post('q3');
		$q4= $this->input->post('q4');
		$q7= $this->input->post('q7');
		$min = min($q1, $q2, $q3, $q4, $q7);
		return 0.8*$min;
	}
}
