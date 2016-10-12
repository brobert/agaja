<?php

namespace App\Http\Controllers;


trait ResponseTrait {

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
     * AgajaController
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
        return
        response()
        ->view($this->view, $this->data, $httpCode);
    }

}