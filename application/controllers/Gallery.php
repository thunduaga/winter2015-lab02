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
            //get all the images from our model
            $pix = $this->images->all();
            
            //build an array of formatted cells for them
            foreach ($pix as $picture)
                $cells[] = $this->parser->parse('_cell', (array) $picture, true);
        
            //prime the table class
            $this->load->library('table');
            $parms = array(
                'table_open' => '<table class="gallery">',
                'cell_start' => '<td class="oneimage">',
                'cell_alt_start' => '<td class="oneimage">'
            );
            $this->table->set_template($parms);
            
            //finally gen the table
            $rows = $this->table->make_columns($cells, 3);
            $this->data['thetable'] = $this->table->generate($rows);
            
            //old stuff
            $this->data['pagebody'] = 'gallery';
            $this->render();
	}
}
