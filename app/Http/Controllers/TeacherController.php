<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Repositories\TeacherRepository;

class TeacherController extends AgajaController {

    protected $base = 'teacher';

    public function __construct( TeacherRepository $repository )
    {
        parent::__construct($repository);
//         $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexData( Request $request )
    {
        $this->setData([
            'teachers' => $this->repository->getAll(),
        ]);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showData( $id, Request $request )
    {
        $this->setData('teacher', $this->repository->getById($id) );
    }


}
