<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AgajaController extends Controller
{
    use ResponseTrait,      // respons options
        CrudTrait           // CRUD helpers
    ;

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




}
