<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Repositories\TherapyRepository;
use App\Http\Repositories\TeacherRepository;

class HomeController extends AppController
{
    // handler for repositories
    private $res = [];

    public function __construct(
        TherapyRepository $resTherapy,
        TeacherRepository $resTeacher)
    {
        parent::__construct( null );

        $this->res['therapy'] = $resTherapy;
        $this->res['teacher'] = $resTeacher;
    }

    public function indexData( Request $request )
    {
        $this->setData([
            'therapies' => $this->res['therapy']->getAll( $request ),
            'teachers' => $this->res['teacher']->getAll( $request ),
        ]);
    }
}
