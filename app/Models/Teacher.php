<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Log;

class Teacher extends Model
{
    private $mutator = '-|-';

    protected $guarded = [];

    protected $fillable = [
        'photo',
        'position',
        'education',
        'skills',
        'courses',
        'description'
    ];

    public function getFullName() {
        return $this->user->getFullName();
    }

    /***********************************************************
     ************************ RELATIONS ************************
     ***********************************************************/
    public function user() {
        return $this->belongsTo('App\User', 'id');
    }

    /***********************************************************
     ************************ MUTATORS *************************
     ***********************************************************/
    public function setSkillsAttribute( $value ) {
        $this->attributes['skills'] = implode( $this->mutator, $value );
    }

    public function getSkillsAttribute( $value ) {
        return !$value? []: explode( $this->mutator, $value );
    }

    public function setCoursesAttribute( $value ) {
        $this->attributes['courses'] = implode( $this->mutator, $value );
    }

    public function getCoursesAttribute( $value ) {
        return !$value? []: explode( $this->mutator, $value );
    }

    public function setEducationAttribute( $value ) {
        $this->attributes['education'] = implode( $this->mutator, $value );
    }

    public function getEducationAttribute( $value ) {
        return !$value? []: explode( $this->mutator, $value );
    }
}
