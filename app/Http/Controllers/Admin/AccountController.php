<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\AppController;
use Auth;
use Log;

use App\Http\Repositories\TeacherRepository;

class AccountController extends AdminController
{
    //
    protected $base = 'account';

    public function __construct( TeacherRepository $repository )
    {
        parent::__construct($repository);
        $this->setData('banner_title', $this->base );
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected function indexData( Request $request )
    {
        Log::debug('AAAAAAAAAAAAAAAAAAAAAAAAAAAA ' . Auth::user()->id );
        $this->setData('teacher', $this->repository->getById( Auth::user()->id ) );
    }
}
