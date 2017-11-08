<?php

class Dashboard extends Admin_Controller {

    function __construct() {
        parent::__construct();
        remove_ssl();
    }

    function index() {
        $data = array();       

        $this->load->view($this->config->item('admin_folder') . '/dashboard', $data);
    }

}