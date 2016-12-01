<?php

namespace App\Traits;

use Illuminate\Http\Request;

trait CrudTrait {

    /*************************************************************************************************************************************************
     * CRUD sections
     *************************************************************************************************************************************************/

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request )
    {
        $this->setView('index');
        $this->indexData( $request );
        return $this->respond();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
        $this->setView('show');
        $res = $this->showData( $id, $request );
        return $res? $res: $this->respond();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /************************************************************************************************************************************************
     * CRUD HELPERS section
     *************************************************************************************************************************************************/

    /**
     *
     * @method indexData
     * AppController
     * Retrieve data required to displaing index page
     * @param Request $request
     */
    protected function indexData( Request $request )
    {
        return;
    }

    /**
     *
     * @method showData
     * AppController
     * Retrieve data required to displaing detail page
     * @param Request $request
     */
    protected function showData( $id, Request $request )
    {
        return;
    }

    /**
     *
     * @method editData
     * AppController
     * Retrieve data required to displaing edit form page
     * @param Request $request
     */
    protected function editData ( $id, Request $request )
    {
        return;
    }

}
