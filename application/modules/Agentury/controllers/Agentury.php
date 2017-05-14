<?php

class Agentury extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    function display_agentury()
    {
        $data['page_header'] = 'Agentúry';
        $data['description'] = 'Zobrazí všekty agentúry v databáze';
        $data['content_view'] = 'Agentury/agentury_v';
        $data['agentury_table'] = $this->create_agentury_table();
        $this->template->call_admin_template($data);
    }

    function addAgentura()
    {
        $data['page_header'] = 'Pridaj agentúru';
        $data['description'] = 'Pridaj agentúru do databázy';
        $data['content_view'] = 'Agentury/pridaj_agenturu_v';
        $this->template->call_admin_template($data);
    }

    function post_book()
    {

    }

    function create_agentury_table()
    {
        $agentury = $this->M_Agentura->get_all_agentury();
        $agentury_table = "";

        if(count($agentury))
        {
            $counter = 1;
            foreach ($agentury as $key => $value)
            {
                $agentury_table .= "<tr>";
                $agentury_table .= "<td>{$counter}</td>>";
                $agentury_table .= "<td>{$value->Nazov}</td>>";
                $agentury_table .= "</tr>";
            }
        }
    }
}