<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Ccbtemplate extends CI_Controller 
{
	function __construct() {
		parent::__construct();		
		$this->load->model('Ccbtemplate_model', '', true);		
	}// constructor
	
	function index(){            
            $data=array();
            $this->template->load($this->config->item('layout'), 'ccb_template', $data);				
	}
        
        function senddata(){
            
            
            $post = $_POST;
            $bugid = $post['bugid'];
            $severity = $post['severity'];
            $small_desc = $post['small_desc'];
            $fixed_desc = $post['fixed_desc'];
            $test_done = $post['test_done'];
            $test_to_de_done = $post['test_to_be_done'];
            $cr = $post['code_reviewer'];
            $send_to = $post['send_to'];
            $cc = $post['cc'];
            $regards = "Regards,<br> Deepak";
            $data = array("bugid"=>$bugid,"severity"=>$severity,"small_desc"=>$small_desc,
                    "fixed_desc"=>$fixed_desc,"test_done"=>$test_done,"test_to_be_done"=>$test_to_de_done,
                    "code_reviewer"=>$cr,"send_to"=>$send_to,
                    "cc"=>$cc,"regards"=>$regards);
            $this->Ccbtemplate_model->sendCcbMail($data);
        }
}        
?>
