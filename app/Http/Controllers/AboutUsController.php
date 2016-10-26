<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Repositories\TeacherRepository;

class AboutUsController extends AppController
{

    protected $base = 'about';

    public function __construct( TeacherRepository $teacherRepo)
    {
        parent::__construct();

        $this->repo[ 'teacher' ] = $teacherRepo;

        $this->setData('banner_title', 'about');
    }

    protected function indexData( Request $request) {

        $this->setData('teachers', $this->repo[ 'teacher' ]->getAll());
    }
}
