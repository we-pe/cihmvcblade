<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Jenssegers\Blade\Blade;

class MY_Controller extends MX_Controller {
	
	protected $views = APPPATH.'views';
	protected $cache = APPPATH.'cache';
	protected $blade;
	protected $data = array();
	
	function __construct(){
		parent::__construct();
		$this->blade = new Blade($this->views, $this->cache);
	}
	
	protected function load_page($content=null){
		$this->output->set_output($this->blade->render($content, $this->data));
	}

}