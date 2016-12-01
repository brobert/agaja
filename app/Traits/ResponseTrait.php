<?php

namespace App\Traits;

use Illuminate\Support\Facades\View;
use Log;

trait ResponseTrait {

    /**
     * handler for respons data ( for view or JSON )
     * @var $data {array}
     */
    protected $data = [];

    protected $view = '';

    /**
     *
     */
    protected function setView( $viewName )
    {

        $format = 'techedu.pages.%s%s';
        $this->view = sprintf($format, $this->base? $this->base .'.': '', $viewName );
    }

    /**
     *
     * @method setData
     * AppController
     * @param string|array $keyOrData
     * @param unknown $data
     */
    protected function setData( $keyOrData, $data = null )
    {
        if ( $data === null )
        {
            $this->data = $keyOrData;
        }
        else if ( is_string( $keyOrData ) && $data !== null )
        {
            $this->data[ $keyOrData ] = $data;
        }
    }

    protected function respond( $httpCode = 200 )
    {
        if ( !View::exists($this->view)) {
            $this->view = 'errors.503';
            $httpCode = 404;
        }
//         Log::debug('try to load view: ' . $this->view . print_r($this->data, 1) );
        return response()->view($this->view, $this->data, $httpCode);
    }

}