<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\AppController;

class AccountController extends AdminController
{
    //
    protected $base = 'account';

    public function __construct()
    {
        parent::__construct();
        $this->setData('banner_title', $this->base );
    }
}
