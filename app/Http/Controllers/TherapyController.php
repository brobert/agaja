<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Repositories\TherapyRepository;

class TherapyController extends AgajaController
{
    protected $base = 'therapy';

    public function __construct( TherapyRepository $repository )
    {
        parent::__construct($repository);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected function indexData(Request $request)
    {
        $this->setData([
            'therapies' => $this->repository->getAll($request),
            '_search' => $request->input('_search', ''),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    protected function showData($id, Request $request)
    {
        $this->setData( 'therapy', $this->repository->getById( $id ) );
    }
}
