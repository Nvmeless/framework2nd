<?php
namespace Jin\Controllers;

class HomeController
{
    public function test()
    {
        var_dump("HELLO");
        // die();
    }

    public function message($str)
    {
        var_dump($str);
        return $this;
    }
}