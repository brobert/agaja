<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Log;

class Teacher extends Model
{
    protected $guarded = [];

    // Mutators
    public function setSkillsAttribute( $value ) {
        $this->attributes['skills'] = implode( '-|-', $value );
    }

    public function getSkillsAttribute( $value ) {
        return !$value? []: explode( '-|-', $value );
    }

    public function setCoursesAttribute( $value ) {
        $this->attributes['courses'] = implode( '-|-', $value );
    }

    public function getCoursesAttribute( $value ) {
        return !$value? []: explode( '-|-', $value );
    }

    public function setEducationAttribute( $value ) {
        $this->attributes['education'] = implode( '-|-', $value );
    }

    public function getEducationAttribute( $value ) {
        return !$value? []: explode( '-|-', $value );
    }
}
