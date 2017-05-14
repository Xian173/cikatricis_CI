<?php

class Template extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    function call_admin_template($data = NULL)
    {
        $this->load->view('admin_template_v', $data);
    }
}