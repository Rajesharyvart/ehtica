<?php

class Attributes extends Admin_Controller {

    //this is used when editing or adding a provider
    var $tag_id = false;
    var $condition = array();

    function __construct() {
        parent::__construct();

        $this->load->model(array('attributes_model'));
        $this->load->helper('url');
        $this->session->unset_userdata('site_lang');
      
    }

    function index() {


        $this->listing();
    }


  function form($attribute_value_id = false) {
        //force_ssl();       // 
        $this->attribute_value_id = $attribute_value_id;
        $this->load->helper('form');
        $this->load->library('form_validation');
        //default values are empty if the provider is new
        $data['attribute_value_id'] = '';
        $data['attribute_id'] = '';
        $data['attribute_value'] = '';
        $attribute_option = array('' => 'attribute_id');
        //$data['attribute'] = $this->category_model->fetchcategory();
	
	if($attribute_value_id!='')
	{
	    $attributes_values = $this->attributes_model->get_attributes_values($attribute_value_id);
	    $data['attribute_value_id'] = $attributes_values['attribute_value_id'];
	    $data['attribute_id'] = $attributes_values['attribute_id'];
	    $data['attribute_value'] = $attributes_values['attribute_value'];
	}
        if ($this->input->post('attribute_value_id') != '') {

            $attributes_values = $this->attributes_model->get_attributes_values($this->input->post('attribute_value_id'));
            $data['attribute_value_id'] = $this->input->post('attribute_value_id');
            $data['attribute_id'] = $this->input->post('attribute_id');
            $data['attribute_value'] = $this->input->post('attribute_value');
	    $attributes_id = $this->attributes_model->update_attribute($data);
        }
	if ($this->input->post('attribute_id') != '' && $this->input->post('attribute_value_id') == '')        {

	$save['attribute_id'] = $this->input->post('attribute_id');
        $save['attribute_value'] = $this->input->post('attribute_value');
        $attributes_id = $this->attributes_model->save_attributes($save);
        $this->session->set_flashdata('message', ('The Attributes detail has been saved!'));
        
        }
      


        $data['attri'] = $this->attributes_model->get_attribute();
        $data['attributes'] = $this->attributes_model->get_attributes_values();
        //print_r( $data['attributes']); exit;
        $this->load->view($this->config->item('admin_folder') . '/attributes_values', $data);
    }
    }


?>