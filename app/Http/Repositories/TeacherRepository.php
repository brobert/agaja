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
        $data = [
            'id'    => (int) $teacherId,
            'name'  => 'Lorem Ipsum' . $teacherId,
            'photo' => $teacherId,
            'desc'  => 'Curabitur id mi eget arcu volutpat fermentum. Nulla facilisi. Praesent bibendum nibh quis purus tincidunt scelerisque. Vivamus tristique gravida est in sodales. Maecenas eget mauris',
            'skills' => 'Rehabilitant w USD Kraków-Prokocim',
            'degree' => 'Magister rehabilitacji, AWF Kraków',
            'courses' => 'Rehabilitacja dzieicęca',
            'social_media' => false,
        ];
        return (object) $data;
    }

    public function getAll() {

        $data = [];
        for ($i = 6; $i <= 11; $i++ ) {
            $data[] = $this->getById( $i );
        }

        return $data;

        return $this->model->get();
    }
}