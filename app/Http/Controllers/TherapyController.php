<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Repositories\TherapyRepository;

class TherapyController extends AppController
{
    protected $base = 'therapy';

    public function __construct( TherapyRepository $repository )
    {
        parent::__construct($repository);
        $this->setData('banner_title', 'therapy');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected function indexData(Request $request)
    {
        $this->setData( 'therapies', $this->repository->getAll($request) );
        $this->setData( '_search', $request->input('_search', ''));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    protected function showData($id, Request $request)
    {
        $data = $this->repository->getById( $id );
        $this->setData( 'therapy', $data );

        $this->addCrumb($data->name, \route('therapy_show', ['id' => $id]));
    }
}
