<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clustering extends CI_Controller {

    //index dasboard
	public function index()
	{
	    $data['title'] = "Inicio";
	    
        $this->load->view('header', $data);
        $this->load->view('navbar', $data);
        $this->load->view('index', $data);
        $this->load->view('footer');

	}

    // Definición de clustering
    public function que_es_clustering()
    {
        $data['title'] = "Definición de Clustering";
        
        $this->load->view('header', $data);
        $this->load->view('navbar', $data);
        $this->load->view('que_es_clustering', $data);
        $this->load->view('footer');
    }

    //Tipos de clustering
    public function tipos_clustering()
    {
        $data['title'] = "Tipos de Clustering";
        
        $this->load->view('header', $data);
        $this->load->view('navbar', $data);
        $this->load->view('tipos_clustering', $data);
        $this->load->view('footer');
    }

    //Acerca de nosotros
    public function que_es_k_means()
    {
        $data['title'] = "Definición de K-Means";
        
        $this->load->view('header', $data);
        $this->load->view('navbar', $data);
        $this->load->view('que_es_k_means', $data);
        $this->load->view('footer');
    }

    // Ejemplo de K-Means
    public function ejemplo_k_means()
    {
        $data['title'] = "Ejemplo de K-Means";
        
        $this->load->view('header', $data);
        $this->load->view('navbar', $data);
        $this->load->view('ejemplo_k_means', $data);
        $this->load->view('footer');
    }

    // Codigo Fuente de K-Means
    public function codigo_fuente_k_means()
    {
        $data['title'] = "Codigo Fuente de K-Means";
        
        $this->load->view('header', $data);
        $this->load->view('navbar', $data);
        $this->load->view('codigo_fuente_k_means', $data);
        $this->load->view('footer');
    }


    // Codigo Fuente de K-Means
    public function que_es_hac()
    {
        $data['title'] = "Definición de HAC";
        
        $this->load->view('header', $data);
        $this->load->view('navbar', $data);
        $this->load->view('que_es_hac', $data);
        $this->load->view('footer');
    }

    // Codigo Fuente de K-Means
    public function ejemplo_hac()
    {
        $data['title'] = "Ejemplo de HAC";
        
        $this->load->view('header', $data);
        $this->load->view('navbar', $data);
        $this->load->view("ejemplo_hac", $data);
        $this->load->view('footer');
    }

    // Codigo Fuente de K-Means
    public function codigo_fuente_hac()
    {
        $data['title'] = "Codigo Fuente de HAC";
        
        $this->load->view('header', $data);
        $this->load->view('navbar', $data);
        $this->load->view('codigo_fuente_hac', $data);
        $this->load->view('footer');
    }

    //Referencias
    public function referencias()
    {
        $data['title'] = "Referencias";
        
        $this->load->view('header', $data);
        $this->load->view('navbar', $data);
        $this->load->view('referencias', $data);
        $this->load->view('footer');
    }

    //Acerca de nosotros
    public function acerca_de_nosotros()
    {
        $data['title'] = "Acerca de nosotros";
        
        $this->load->view('header', $data);
        $this->load->view('navbar', $data);
        $this->load->view('acerca_de_nosotros', $data);
        $this->load->view('footer');
    }

}
