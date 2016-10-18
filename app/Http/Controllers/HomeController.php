<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Repositories\TherapyRepository;

class HomeController extends AppController
{
    // handler for repositories
    private $res = [];

    public function __construct( TherapyRepository $resTherapy )
    {
        parent::__construct( null );

        $this->res['therapy'] = $resTherapy;
    }

    public function indexData( Request $request )
    {
        $this->setData([
            'therapies' => $this->res['therapy']->getAll( $request ),
        ]);
    }
}
