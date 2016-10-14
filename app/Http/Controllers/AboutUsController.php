<?php

namespace App\Http\Controllers;

class AboutUsController extends AgajaController
{

    protected $base = 'about';

    public function __construct()
    {
        parent::__construct();

        $this->setData('banner_title', 'about');
    }
}
