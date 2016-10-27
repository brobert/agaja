<?php
namespace App\Http\Repositories;

use App\Models\Teacher;

class TeacherRepository extends ResourceRepository {

    /**
     * Create UnitRepository instance.
     *
     * @param App\Models\Theme $theme
     * @return void
     */
    public function __construct(Teacher $teacher) {
        $this->model = $teacher;
    }

    /**
     * getById
     * Zwraca dane jednostki dla podanego identyfkatora
     * {@inheritDoc}
     * @see \App\Repositories\ResourceRepository::getById()
     */
    public function getById( $teacherId ) {
        // temporary mock

        $teacher = $this->model->with('user')->find( $teacherId );
        return $teacher;

    }

    public function getAll() {

//         $data = [];
//         for ($i = 6; $i <= 11; $i++ ) {
//             $data[] = $this->getById( $i );
//         }

//         return $data;

        return $this->model->with('user')->get();
    }
}