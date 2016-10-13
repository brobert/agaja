<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Repositories\TeacherRepository;

class ContactController extends AgajaController {

    protected $base = 'contact';

    public function __construct(  )
    {
        parent::__construct();
        $this->setData('banner_title', 'contact');
    }

}
