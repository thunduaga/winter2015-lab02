<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Application
 *
 * @author Chris
 */
class Application extends CI_Controller 
{
    //put your code here
    protected $data = array();
    protected $id;
    protected $choices = array(
        'Home' => '/', 'Gallery' => '/gallery', 'About' => '/about'
    );
    //contstructor to establish view paramters and load common helpers
    function __contrsuct()
    {
        parent::__construct();
        $this->data = array();
        $this->data['pagetitle'] = 'Sample Image Gallery';   
    }
    
    //render this page
    function render()
    {
        $this->data['menubar'] = build_menu_bar($this->choices);
        $this->data['content'] = $this->parser->parse($this->data['pagebody'], $this->data, true);
        $this->data['data'] = &$this->data;
        $this->parser->parse('template', $this->data);
    }
}
