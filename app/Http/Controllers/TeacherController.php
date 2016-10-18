<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Repositories\TeacherRepository;

class TeacherController extends AppController
{
    protected $base = 'teacher';

    public function __construct( TeacherRepository $repository )
    {
        parent::__construct($repository);
        $this->setData('banner_title', 'teacher');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected function indexData( Request $request )
    {
        $this->setData('teachers', $this->repository->getAll());
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    protected function showData( $id, Request $request )
    {
        $teacher_data = $this->repository->getById($id);
        $this->setData('teacher', $teacher_data );

        // add breadcrumb
        $this->addCrumb( $teacher_data->name );
    }


}
