<?php

class Register extends CI_Controller {
 
    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *      http://example.com/index.php/blog
     *  - or - 
     *      http://example.com/index.php/blog/index
     *  - or - 
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/blog/&lt;method_name&gt;
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    function __construct()
	{
	   parent::__construct();
	} 
   
    public function index()
    {                   
       
       $this->load->helper(array('form'));
	   $this->load->view('blog/register');   
    }
}
