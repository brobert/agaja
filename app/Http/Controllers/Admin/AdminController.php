<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\AppController;

class AdminController extends AppController
{
    //
    protected $base = 'admin';

    public function __construct()
    {
        parent::__construct();
        $this->setData('banner_title', $this->base );

    }
}
