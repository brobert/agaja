<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Repositories\TherapyRepository;

class HomeController extends Controller
{
    // handler for repositories
    private $res = [];

    public function __construct( TherapyRepository $resTherapy )
    {
        $this->res['therapy'] = $resTherapy;
    }

    public function index()
    {
        $data = [
            'therapies' => $this->res['therapy']->getAll(),
        ];

        return view('techedu/pages/index', $data);
    }
}
