<?php

class M_Agentura extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function get_all_agentury()
    {
        $query = $this->db->get('agentura');

        return $query->result();
    }
}