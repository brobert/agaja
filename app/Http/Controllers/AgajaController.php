<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AgajaController extends Controller
{

    use ResponseTrait;
    use CrudTrait;

    /**
     * handler for respons data ( for view or JSON )
     * @var $data {array}
     */
    private $data = [];

    private $view = '';
    /**
     *
     */
    protected $base = '';

    protected $repository;

    /**
     *
     * @method __construct
     * AgajaController
     */
    public function __construct( $repository )
    {
        $this->repository = $repository;
//         parent::__construct();
    }


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
        $this->showData( $id, $request );
        return $this->respond();
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
     * AgajaController
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
     * AgajaController
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
     * AgajaController
     * Retrieve data required to displaing edit form page
     * @param Request $request
     */
    protected function editData ( $id, Request $request )
    {
        return;
    }


}
