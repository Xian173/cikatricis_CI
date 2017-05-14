<?php

class Admin extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->module([
            'Agentury'
        ]);
    }

    function index()
    {
        $this->template->call_admin_template();
    }

    function agentury()
    {
        $this->agentury->display_agentury();
    }

    function addAgentura()
    {
        $this->agentury->addAgentura();
    }
}