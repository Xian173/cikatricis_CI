<?php

class MY_Controller extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->module('Template');
        $this->load->module('Agentury');
    }

    function home_run()
    {
        $this->template->call_admin_template();
    }
}