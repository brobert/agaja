<?php
namespace App\Http\Repositories;

use App\Models\Teacher;
use Log;

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

    /**
     *
     * @method getAll
     * TeacherRepository
     */
    public function getAll() {

        return $this->model->with('user')->get();
    }

    public function get_for_menu() {
        return $this->getAll()->sortBy('surname')->take(3);
    }

    public function update($id, Array $inputs) {

        $teacher = $this->getById($id);
        Log::debug('TeacherRepository::update::ID:'.$id);
        Log::debug('TeacherRepository::update::getFillable:'.print_r( $teacher->getFillable(), true ));
        Log::debug('TeacherRepository::update::getAttributes:'.print_r( $teacher->getAttributes(), true ));
        return $this->getById($id)->fill($inputs)->save();
    }
}