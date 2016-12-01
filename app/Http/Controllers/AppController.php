<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Log;
use Route;
use App\Models\Teacher;
use App\Http\Repositories\TeacherRepository;

use App\Traits\ResponseTrait;
use App\Traits\CrudTrait;

class AppController extends Controller
{
    use ResponseTrait,      // respons options
        CrudTrait           // CRUD helpers
    ;

    /**
     *
     */
    protected $base = '';

    protected $repository;
    protected $request;

    /**
     *
     * @method __construct
     * AppController
     */
    public function __construct( $request, $repository = null )
    {
        $this->repository   = $repository;
        $this->request      = $request;

        $this->setData('banner_title', '');
        $this->addCrumb( trans ('page.menu.home'), route('home') );
        $this->load_menu_teachers();

        if ( $this->base && Route::has( $this->base )) {
            $this->addCrumb( trans ('page.menu.' . $this->base ), route( $this->base ) );
        }
    }

    protected function addCrumb( $text, $url = null )
    {
        if ( !isset( $this->data['bread_crumbs']))
        {
            $this->data['bread_crumbs'] = [];
        }


        $this->data['bread_crumbs'][] = [
            'url'   => $url,
            'text'  => $text,
        ];
    }

    private function load_menu_teachers() {
        $teacherRepo = new TeacherRepository( new Teacher() );
        $this->setData('menu_teachers', $teacherRepo->get_for_menu() );
    }
}
