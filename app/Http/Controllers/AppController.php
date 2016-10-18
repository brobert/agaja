<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AppController extends Controller
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
     * AppController
     */
    public function __construct( $repository = null )
    {
        $this->repository = $repository;

        $this->setData('banner_title', '');
        $this->addCrumb( trans ('page.menu.home'), route('home') );

        if ( $this->base ) {
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


}
