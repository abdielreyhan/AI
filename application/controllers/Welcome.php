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
		// if($sport>=0.4 && $sport<=1)
		// {
		// 	echo "SPORT => ".$sport."DIREKOMENDASIKAN"."<br>";
		// 	echo "MATIC => ".$matic."DIREKOMENDASIKAN"."<br>";
		// 	echo "BEBEK => ".$bebek."DIREKOMENDASIKAN";
		// }
		// else
		// {
		// 	echo "Hellow";
		// }

		if($sport>$matic && $sport>$bebek){
			$RESULT='SPORT DIREKOMENDASIKAN UNTUK ANDA';
			$data=array(
				'SPORT'=>$sport,
				'MATIC'=>$matic,
				'BEBEK'=>$bebek,
				'RESULT'=>$RESULT
			);
			echo json_encode($data);
		}
		elseif($matic>$sport && $matic>$bebek){
			$RESULT='MATIC DIREKOMENDASIKAN UNTUK ANDA';
			$data=array(
				'SPORT'=>$sport,
				'MATIC'=>$matic,
				'BEBEK'=>$bebek,
				'RESULT'=>$RESULT
			);
			echo json_encode($data);
		}
		elseif($bebek>$sport && $bebek>$matic){
			$RESULT='BEBEK DIREKOMENDASIKAN UNTUK ANDA';
			$data=array(
				'SPORT'=>$sport,
				'MATIC'=>$matic,
				'BEBEK'=>$bebek,
				'RESULT'=>$RESULT
			);
			echo json_encode($data);
		}
		else{
			$RESULT='HASIL ADA YANG SEIMBANG';
			$data=array(
				"SPORT"=>$sport,
				"MATIC"=>$matic,
				"BEBEK"=>$bebek,
				"RESULT"=>$RESULT
			);
			echo json_encode($data);
		}
		// echo "SPORT => ".$sport."DIREKOMENDASIKAN"."<br>";
		// echo "MATIC => ".$matic."DIREKOMENDASIKAN"."<br>";
		// echo "BEBEK => ".$bebek."DIREKOMENDASIKAN";
		
	}

	private function sport()
	{
		$q1= $this->input->post('q1');
		$q2= $this->input->post('q2');
		$q5= $this->input->post('q5');
		$q6= $this->input->post('q6');
		$min = min($q1, $q2, $q5, $q6);
		$hasil = 0.8*$min;
		return $hasil;
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
		$hasil = 0.9*$min;
		return $hasil;
	}

	private function bebek()
	{
		$q1= $this->input->post('q1');
		$q2= $this->input->post('q2');
		$q3= $this->input->post('q3');
		$q4= $this->input->post('q4');
		$q7= $this->input->post('q7');
		$min = min($q1, $q2, $q3, $q4, $q7);
		$hasil = 0.6*$min;
		return $hasil;
	}
}
