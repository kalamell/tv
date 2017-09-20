<?php
class Soapserver extends CI_Controller{
	 public function __construct(){
          parent::__construct();
          $ns = site_url("soapserver");//'http://'.$_SERVER['HTTP_HOST'].'/index.php/soapserver/';
          $this->load->library("Nusoap_library"); // load nusoap toolkit library in controller
          $this->nusoap_server = new soap_server(); // create soap server object
          $this->nusoap_server->configureWSDL("SOAP Server Using NuSOAP in CodeIgniter", $ns); // wsdl cinfiguration
          $this->nusoap_server->wsdl->schemaTargetNamespace = $ns; // server namespace
     }
	 
	 function index(){
		$this->nusoap_server->service(file_get_contents("php://input")); // read raw data from request body
	}
}