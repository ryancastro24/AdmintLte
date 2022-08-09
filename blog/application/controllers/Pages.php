<?php

class Pages extends CI_Controller{


    public function view(){

        $page = 'home';

         if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
            show_404();
         }



         //$data['title'] = 'New posts';
         //$data['document'] = 'this is a document';



         $this->load->view('templates/header');
         $this->load->view('pages/'.$page);
         $this->load->view('templates/footer');

        
        }

        
}

?>