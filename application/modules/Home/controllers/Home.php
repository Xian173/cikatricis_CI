<?php

class Home extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        echo "We are home";
    }
}