<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Gallery
 *
 * @author Chris
 */
class Gallery extends Application{
    //put your code here
    public function index()
	{
		//$this->load->view('welcome_message');
                //$this->load->view('welcome');
                $this->data['pagebody'] = 'gallery';
                $this->render();
	}
}
