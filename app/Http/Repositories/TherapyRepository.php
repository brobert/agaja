<?php
namespace App\Http\Repositories;

use App\Models\Therapy;

class TherapyRepository extends ResourceRepository {

    // TEMPORARY MOCK
    private $data = [
        1 => [
            'therapists' => [
                [
                    'id'    => 6,
                    'name'  => 'Lorem Ipsum 6',
                    'photo' => 6,
                    'desc'  => 'Curabitur id mi eget arcu volutpat fermentum. Nulla facilisi. Praesent bibendum nibh quis purus tincidunt scelerisque. Vivamus tristique gravida est in sodales. Maecenas eget mauris',
                    'skills' => 'Rehabilitant w USD Kraków-Prokocim',
                    'degree' => 'Magister rehabilitacji, AWF Kraków',
                    'courses' => 'Rehabilitacja dzieicęca',
                    'social_media' => false,
                ],
                [
                    'id'    => 7,
                    'name'  => 'Lorem Ipsum 7',
                    'photo' => 7,
                    'desc'  => 'Curabitur id mi eget arcu volutpat fermentum. Nulla facilisi. Praesent bibendum nibh quis purus tincidunt scelerisque. Vivamus tristique gravida est in sodales. Maecenas eget mauris',
                    'skills' => 'Rehabilitant w USD Kraków-Prokocim',
                    'degree' => 'Magister rehabilitacji, AWF Kraków',
                    'courses' => 'Rehabilitacja dzieicęca',
                    'social_media' => false,
                ],
            ],
            'id' => 1,
            'name' => 'Terapia neurologopedyczna',
            'cost' => '70 zł / 50 min'
        ],
        2 => [
            'therapists' => [
                [
                    'id'    => 6,
                    'name'  => 'Lorem Ipsum 6',
                    'photo' => 6,
                    'desc'  => 'Curabitur id mi eget arcu volutpat fermentum. Nulla facilisi. Praesent bibendum nibh quis purus tincidunt scelerisque. Vivamus tristique gravida est in sodales. Maecenas eget mauris',
                    'skills' => 'Rehabilitant w USD Kraków-Prokocim',
                    'degree' => 'Magister rehabilitacji, AWF Kraków',
                    'courses' => 'Rehabilitacja dzieicęca',
                    'social_media' => false,
                ],
                [
                    'id'    => 6,
                    'name'  => 'Lorem Ipsum 6',
                    'photo' => 6,
                    'desc'  => 'Curabitur id mi eget arcu volutpat fermentum. Nulla facilisi. Praesent bibendum nibh quis purus tincidunt scelerisque. Vivamus tristique gravida est in sodales. Maecenas eget mauris',
                    'skills' => 'Rehabilitant w USD Kraków-Prokocim',
                    'degree' => 'Magister rehabilitacji, AWF Kraków',
                    'courses' => 'Rehabilitacja dzieicęca',
                    'social_media' => false,
                ],
            ],
            'id' => 2, 'name' => 'Terapia psychologiczna', 'cost' => '80 zł / 50 min'],
        3 => [
            'therapists' => [
                [
                    'id'    => 6,
                    'name'  => 'Lorem Ipsum 6',
                    'photo' => 6,
                    'desc'  => 'Curabitur id mi eget arcu volutpat fermentum. Nulla facilisi. Praesent bibendum nibh quis purus tincidunt scelerisque. Vivamus tristique gravida est in sodales. Maecenas eget mauris',
                    'skills' => 'Rehabilitant w USD Kraków-Prokocim',
                    'degree' => 'Magister rehabilitacji, AWF Kraków',
                    'courses' => 'Rehabilitacja dzieicęca',
                    'social_media' => false,
                ],
                [
                    'id'    => 6,
                    'name'  => 'Lorem Ipsum 6',
                    'photo' => 6,
                    'desc'  => 'Curabitur id mi eget arcu volutpat fermentum. Nulla facilisi. Praesent bibendum nibh quis purus tincidunt scelerisque. Vivamus tristique gravida est in sodales. Maecenas eget mauris',
                    'skills' => 'Rehabilitant w USD Kraków-Prokocim',
                    'degree' => 'Magister rehabilitacji, AWF Kraków',
                    'courses' => 'Rehabilitacja dzieicęca',
                    'social_media' => false,
                ],
            ],

            'id' => 3, 'name' => 'Terapia Procesów Integracji Sensorycznej', 'cost' => '70 zł / 50 min'],
        4 => [
            'therapists' => [
                [
                    'id'    => 6,
                    'name'  => 'Lorem Ipsum 6',
                    'photo' => 6,
                    'desc'  => 'Curabitur id mi eget arcu volutpat fermentum. Nulla facilisi. Praesent bibendum nibh quis purus tincidunt scelerisque. Vivamus tristique gravida est in sodales. Maecenas eget mauris',
                    'skills' => 'Rehabilitant w USD Kraków-Prokocim',
                    'degree' => 'Magister rehabilitacji, AWF Kraków',
                    'courses' => 'Rehabilitacja dzieicęca',
                    'social_media' => false,
                ],
                [
                    'id'    => 6,
                    'name'  => 'Lorem Ipsum 6',
                    'photo' => 6,
                    'desc'  => 'Curabitur id mi eget arcu volutpat fermentum. Nulla facilisi. Praesent bibendum nibh quis purus tincidunt scelerisque. Vivamus tristique gravida est in sodales. Maecenas eget mauris',
                    'skills' => 'Rehabilitant w USD Kraków-Prokocim',
                    'degree' => 'Magister rehabilitacji, AWF Kraków',
                    'courses' => 'Rehabilitacja dzieicęca',
                    'social_media' => false,
                ],
            ],

            'id' => 4, 'name' => 'Terapia pedagogiczna, dysleksji i trudności szkolnych', 'cost' => '65 zł / 50 min'],
        5 => [
            'therapists' => [
                [
                    'id'    => 6,
                    'name'  => 'Lorem Ipsum 6',
                    'photo' => 6,
                    'desc'  => 'Curabitur id mi eget arcu volutpat fermentum. Nulla facilisi. Praesent bibendum nibh quis purus tincidunt scelerisque. Vivamus tristique gravida est in sodales. Maecenas eget mauris',
                    'skills' => 'Rehabilitant w USD Kraków-Prokocim',
                    'degree' => 'Magister rehabilitacji, AWF Kraków',
                    'courses' => 'Rehabilitacja dzieicęca',
                    'social_media' => false,
                ],
                [
                    'id'    => 6,
                    'name'  => 'Lorem Ipsum 6',
                    'photo' => 6,
                    'desc'  => 'Curabitur id mi eget arcu volutpat fermentum. Nulla facilisi. Praesent bibendum nibh quis purus tincidunt scelerisque. Vivamus tristique gravida est in sodales. Maecenas eget mauris',
                    'skills' => 'Rehabilitant w USD Kraków-Prokocim',
                    'degree' => 'Magister rehabilitacji, AWF Kraków',
                    'courses' => 'Rehabilitacja dzieicęca',
                    'social_media' => false,
                ],
            ],

            'id' => 5, 'name' => 'Integracja Odruchów Twarzy i Posturalnych wg Masgutowej', 'cost' => '90 zł / 50 min'],
        6 => [
            'therapists' => [
                [
                    'id'    => 6,
                    'name'  => 'Lorem Ipsum 6',
                    'photo' => 6,
                    'desc'  => 'Curabitur id mi eget arcu volutpat fermentum. Nulla facilisi. Praesent bibendum nibh quis purus tincidunt scelerisque. Vivamus tristique gravida est in sodales. Maecenas eget mauris',
                    'skills' => 'Rehabilitant w USD Kraków-Prokocim',
                    'degree' => 'Magister rehabilitacji, AWF Kraków',
                    'courses' => 'Rehabilitacja dzieicęca',
                    'social_media' => false,
                ],
                [
                    'id'    => 6,
                    'name'  => 'Lorem Ipsum 6',
                    'photo' => 6,
                    'desc'  => 'Curabitur id mi eget arcu volutpat fermentum. Nulla facilisi. Praesent bibendum nibh quis purus tincidunt scelerisque. Vivamus tristique gravida est in sodales. Maecenas eget mauris',
                    'skills' => 'Rehabilitant w USD Kraków-Prokocim',
                    'degree' => 'Magister rehabilitacji, AWF Kraków',
                    'courses' => 'Rehabilitacja dzieicęca',
                    'social_media' => false,
                ],
            ],

            'id' => 6, 'name' => 'Neurologiczna Terapia PNF', 'cost' => '80 zł / 50 min'],
        7 => [
            'therapists' => [
                [
                    'id'    => 6,
                    'name'  => 'Lorem Ipsum 6',
                    'photo' => 6,
                    'desc'  => 'Curabitur id mi eget arcu volutpat fermentum. Nulla facilisi. Praesent bibendum nibh quis purus tincidunt scelerisque. Vivamus tristique gravida est in sodales. Maecenas eget mauris',
                    'skills' => 'Rehabilitant w USD Kraków-Prokocim',
                    'degree' => 'Magister rehabilitacji, AWF Kraków',
                    'courses' => 'Rehabilitacja dzieicęca',
                    'social_media' => false,
                ],
                [
                    'id'    => 6,
                    'name'  => 'Lorem Ipsum 6',
                    'photo' => 6,
                    'desc'  => 'Curabitur id mi eget arcu volutpat fermentum. Nulla facilisi. Praesent bibendum nibh quis purus tincidunt scelerisque. Vivamus tristique gravida est in sodales. Maecenas eget mauris',
                    'skills' => 'Rehabilitant w USD Kraków-Prokocim',
                    'degree' => 'Magister rehabilitacji, AWF Kraków',
                    'courses' => 'Rehabilitacja dzieicęca',
                    'social_media' => false,
                ],
            ],

            'id' => 7, 'name' => 'Kinesiology Taping', 'cost' => '40 zł | 30 zł)'],
        8 => [
            'therapists' => [
                [
                    'id'    => 6,
                    'name'  => 'Lorem Ipsum 6',
                    'photo' => 6,
                    'desc'  => 'Curabitur id mi eget arcu volutpat fermentum. Nulla facilisi. Praesent bibendum nibh quis purus tincidunt scelerisque. Vivamus tristique gravida est in sodales. Maecenas eget mauris',
                    'skills' => 'Rehabilitant w USD Kraków-Prokocim',
                    'degree' => 'Magister rehabilitacji, AWF Kraków',
                    'courses' => 'Rehabilitacja dzieicęca',
                    'social_media' => false,
                ],
                [
                    'id'    => 6,
                    'name'  => 'Lorem Ipsum 6',
                    'photo' => 6,
                    'desc'  => 'Curabitur id mi eget arcu volutpat fermentum. Nulla facilisi. Praesent bibendum nibh quis purus tincidunt scelerisque. Vivamus tristique gravida est in sodales. Maecenas eget mauris',
                    'skills' => 'Rehabilitant w USD Kraków-Prokocim',
                    'degree' => 'Magister rehabilitacji, AWF Kraków',
                    'courses' => 'Rehabilitacja dzieicęca',
                    'social_media' => false,
                ],
            ],

            'id' => 8, 'name' => 'Terapia tkanek miękkich', 'cost' => '80 zł / 60 min'],
        9 => [
            'therapists' => [
                [
                    'id'    => 6,
                    'name'  => 'Lorem Ipsum 6',
                    'photo' => 6,
                    'desc'  => 'Curabitur id mi eget arcu volutpat fermentum. Nulla facilisi. Praesent bibendum nibh quis purus tincidunt scelerisque. Vivamus tristique gravida est in sodales. Maecenas eget mauris',
                    'skills' => 'Rehabilitant w USD Kraków-Prokocim',
                    'degree' => 'Magister rehabilitacji, AWF Kraków',
                    'courses' => 'Rehabilitacja dzieicęca',
                    'social_media' => false,
                ],
                [
                    'id'    => 6,
                    'name'  => 'Lorem Ipsum 6',
                    'photo' => 6,
                    'desc'  => 'Curabitur id mi eget arcu volutpat fermentum. Nulla facilisi. Praesent bibendum nibh quis purus tincidunt scelerisque. Vivamus tristique gravida est in sodales. Maecenas eget mauris',
                    'skills' => 'Rehabilitant w USD Kraków-Prokocim',
                    'degree' => 'Magister rehabilitacji, AWF Kraków',
                    'courses' => 'Rehabilitacja dzieicęca',
                    'social_media' => false,
                ],
            ],

            'id' => 9, 'name' => 'Terapia ręki, terapia grafomotoryczna', 'cost' => '70 zł / 50 min'],
        10 => [
            'therapists' => [
                [
                    'id'    => 6,
                    'name'  => 'Lorem Ipsum 6',
                    'photo' => 6,
                    'desc'  => 'Curabitur id mi eget arcu volutpat fermentum. Nulla facilisi. Praesent bibendum nibh quis purus tincidunt scelerisque. Vivamus tristique gravida est in sodales. Maecenas eget mauris',
                    'skills' => 'Rehabilitant w USD Kraków-Prokocim',
                    'degree' => 'Magister rehabilitacji, AWF Kraków',
                    'courses' => 'Rehabilitacja dzieicęca',
                    'social_media' => false,
                ],
                [
                    'id'    => 6,
                    'name'  => 'Lorem Ipsum 6',
                    'photo' => 6,
                    'desc'  => 'Curabitur id mi eget arcu volutpat fermentum. Nulla facilisi. Praesent bibendum nibh quis purus tincidunt scelerisque. Vivamus tristique gravida est in sodales. Maecenas eget mauris',
                    'skills' => 'Rehabilitant w USD Kraków-Prokocim',
                    'degree' => 'Magister rehabilitacji, AWF Kraków',
                    'courses' => 'Rehabilitacja dzieicęca',
                    'social_media' => false,
                ],
            ],

            'id' => 10, 'name' => 'Terapia taktylna', 'cost' => '60 zł / 50 min'],
        11 => [
            'therapists' => [
                [
                    'id'    => 6,
                    'name'  => 'Lorem Ipsum 6',
                    'photo' => 6,
                    'desc'  => 'Curabitur id mi eget arcu volutpat fermentum. Nulla facilisi. Praesent bibendum nibh quis purus tincidunt scelerisque. Vivamus tristique gravida est in sodales. Maecenas eget mauris',
                    'skills' => 'Rehabilitant w USD Kraków-Prokocim',
                    'degree' => 'Magister rehabilitacji, AWF Kraków',
                    'courses' => 'Rehabilitacja dzieicęca',
                    'social_media' => false,
                ],
                [
                    'id'    => 6,
                    'name'  => 'Lorem Ipsum 6',
                    'photo' => 6,
                    'desc'  => 'Curabitur id mi eget arcu volutpat fermentum. Nulla facilisi. Praesent bibendum nibh quis purus tincidunt scelerisque. Vivamus tristique gravida est in sodales. Maecenas eget mauris',
                    'skills' => 'Rehabilitant w USD Kraków-Prokocim',
                    'degree' => 'Magister rehabilitacji, AWF Kraków',
                    'courses' => 'Rehabilitacja dzieicęca',
                    'social_media' => false,
                ],
            ],
            'id' => 11, 'name' => 'Masaż Shantala', 'cost' => '30 zł / 30 min'],
        12 => [
            'therapists' => [
                [
                    'id'    => 6,
                    'name'  => 'Lorem Ipsum 6',
                    'photo' => 6,
                    'desc'  => 'Curabitur id mi eget arcu volutpat fermentum. Nulla facilisi. Praesent bibendum nibh quis purus tincidunt scelerisque. Vivamus tristique gravida est in sodales. Maecenas eget mauris',
                    'skills' => 'Rehabilitant w USD Kraków-Prokocim',
                    'degree' => 'Magister rehabilitacji, AWF Kraków',
                    'courses' => 'Rehabilitacja dzieicęca',
                    'social_media' => false,
                ],
                [
                    'id'    => 6,
                    'name'  => 'Lorem Ipsum 6',
                    'photo' => 6,
                    'desc'  => 'Curabitur id mi eget arcu volutpat fermentum. Nulla facilisi. Praesent bibendum nibh quis purus tincidunt scelerisque. Vivamus tristique gravida est in sodales. Maecenas eget mauris',
                    'skills' => 'Rehabilitant w USD Kraków-Prokocim',
                    'degree' => 'Magister rehabilitacji, AWF Kraków',
                    'courses' => 'Rehabilitacja dzieicęca',
                    'social_media' => false,
                ],
            ],
            'id' => 12, 'name' => 'Masaż klasyczny dla dzieci', 'cost' => '30 zł / 30 min'],
        13 => [
            'therapists' => [
                [
                    'id'    => 6,
                    'name'  => 'Lorem Ipsum 6',
                    'photo' => 6,
                    'desc'  => 'Curabitur id mi eget arcu volutpat fermentum. Nulla facilisi. Praesent bibendum nibh quis purus tincidunt scelerisque. Vivamus tristique gravida est in sodales. Maecenas eget mauris',
                    'skills' => 'Rehabilitant w USD Kraków-Prokocim',
                    'degree' => 'Magister rehabilitacji, AWF Kraków',
                    'courses' => 'Rehabilitacja dzieicęca',
                    'social_media' => false,
                ],
                [
                    'id'    => 6,
                    'name'  => 'Lorem Ipsum 6',
                    'photo' => 6,
                    'desc'  => 'Curabitur id mi eget arcu volutpat fermentum. Nulla facilisi. Praesent bibendum nibh quis purus tincidunt scelerisque. Vivamus tristique gravida est in sodales. Maecenas eget mauris',
                    'skills' => 'Rehabilitant w USD Kraków-Prokocim',
                    'degree' => 'Magister rehabilitacji, AWF Kraków',
                    'courses' => 'Rehabilitacja dzieicęca',
                    'social_media' => false,
                ],
            ],
            'id' => 13, 'name' => 'Masaż sportowy', 'cost' => '60 zł / 50 min'],
        14 => [
            'therapists' => [
                [
                    'id'    => 6,
                    'name'  => 'Lorem Ipsum 6',
                    'photo' => 6,
                    'desc'  => 'Curabitur id mi eget arcu volutpat fermentum. Nulla facilisi. Praesent bibendum nibh quis purus tincidunt scelerisque. Vivamus tristique gravida est in sodales. Maecenas eget mauris',
                    'skills' => 'Rehabilitant w USD Kraków-Prokocim',
                    'degree' => 'Magister rehabilitacji, AWF Kraków',
                    'courses' => 'Rehabilitacja dzieicęca',
                    'social_media' => false,
                ],
                [
                    'id'    => 6,
                    'name'  => 'Lorem Ipsum 6',
                    'photo' => 6,
                    'desc'  => 'Curabitur id mi eget arcu volutpat fermentum. Nulla facilisi. Praesent bibendum nibh quis purus tincidunt scelerisque. Vivamus tristique gravida est in sodales. Maecenas eget mauris',
                    'skills' => 'Rehabilitant w USD Kraków-Prokocim',
                    'degree' => 'Magister rehabilitacji, AWF Kraków',
                    'courses' => 'Rehabilitacja dzieicęca',
                    'social_media' => false,
                ],
            ],
            'id' => 14, 'name' => 'Psychoterapia rodzinna', 'cost' => '120 zł / 90 min'],
        15 => [
            'therapists' => [
                [
                    'id'    => 6,
                    'name'  => 'Lorem Ipsum 6',
                    'photo' => 6,
                    'desc'  => 'Curabitur id mi eget arcu volutpat fermentum. Nulla facilisi. Praesent bibendum nibh quis purus tincidunt scelerisque. Vivamus tristique gravida est in sodales. Maecenas eget mauris',
                    'skills' => 'Rehabilitant w USD Kraków-Prokocim',
                    'degree' => 'Magister rehabilitacji, AWF Kraków',
                    'courses' => 'Rehabilitacja dzieicęca',
                    'social_media' => false,
                ],
                [
                    'id'    => 6,
                    'name'  => 'Lorem Ipsum 6',
                    'photo' => 6,
                    'desc'  => 'Curabitur id mi eget arcu volutpat fermentum. Nulla facilisi. Praesent bibendum nibh quis purus tincidunt scelerisque. Vivamus tristique gravida est in sodales. Maecenas eget mauris',
                    'skills' => 'Rehabilitant w USD Kraków-Prokocim',
                    'degree' => 'Magister rehabilitacji, AWF Kraków',
                    'courses' => 'Rehabilitacja dzieicęca',
                    'social_media' => false,
                ],
            ],
            'id' => 15, 'name' => 'Grupy psychoterapeutyczne', 'cost' => '50 zł / 50 min'],
        16 => [

            'therapists' => [
                [
                    'id'    => 6,
                    'name'  => 'Lorem Ipsum 6',
                    'photo' => 6,
                    'desc'  => 'Curabitur id mi eget arcu volutpat fermentum. Nulla facilisi. Praesent bibendum nibh quis purus tincidunt scelerisque. Vivamus tristique gravida est in sodales. Maecenas eget mauris',
                    'skills' => 'Rehabilitant w USD Kraków-Prokocim',
                    'degree' => 'Magister rehabilitacji, AWF Kraków',
                    'courses' => 'Rehabilitacja dzieicęca',
                    'social_media' => false,
                ],
                [
                    'id'    => 6,
                    'name'  => 'Lorem Ipsum 6',
                    'photo' => 6,
                    'desc'  => 'Curabitur id mi eget arcu volutpat fermentum. Nulla facilisi. Praesent bibendum nibh quis purus tincidunt scelerisque. Vivamus tristique gravida est in sodales. Maecenas eget mauris',
                    'skills' => 'Rehabilitant w USD Kraków-Prokocim',
                    'degree' => 'Magister rehabilitacji, AWF Kraków',
                    'courses' => 'Rehabilitacja dzieicęca',
                    'social_media' => false,
                ],
            ],
            'id' => 16, 'name' => 'Kynoterapia', 'cost' => '70 zł / 50 min'],
        17 => [
            'therapists' => [
                [
                    'id'    => 6,
                    'name'  => 'Lorem Ipsum 6',
                    'photo' => 6,
                    'desc'  => 'Curabitur id mi eget arcu volutpat fermentum. Nulla facilisi. Praesent bibendum nibh quis purus tincidunt scelerisque. Vivamus tristique gravida est in sodales. Maecenas eget mauris',
                    'skills' => 'Rehabilitant w USD Kraków-Prokocim',
                    'degree' => 'Magister rehabilitacji, AWF Kraków',
                    'courses' => 'Rehabilitacja dzieicęca',
                    'social_media' => false,
                ],
                [
                    'id'    => 6,
                    'name'  => 'Lorem Ipsum 6',
                    'photo' => 6,
                    'desc'  => 'Curabitur id mi eget arcu volutpat fermentum. Nulla facilisi. Praesent bibendum nibh quis purus tincidunt scelerisque. Vivamus tristique gravida est in sodales. Maecenas eget mauris',
                    'skills' => 'Rehabilitant w USD Kraków-Prokocim',
                    'degree' => 'Magister rehabilitacji, AWF Kraków',
                    'courses' => 'Rehabilitacja dzieicęca',
                    'social_media' => false,
                ],
            ],
            'id' => 17, 'name' => 'EEG-biofeedback', 'cost' => '60 zł / sesja'],
        18 => [
            'therapists' => [
                [
                    'id'    => 6,
                    'name'  => 'Lorem Ipsum 6',
                    'photo' => 6,
                    'desc'  => 'Curabitur id mi eget arcu volutpat fermentum. Nulla facilisi. Praesent bibendum nibh quis purus tincidunt scelerisque. Vivamus tristique gravida est in sodales. Maecenas eget mauris',
                    'skills' => 'Rehabilitant w USD Kraków-Prokocim',
                    'degree' => 'Magister rehabilitacji, AWF Kraków',
                    'courses' => 'Rehabilitacja dzieicęca',
                    'social_media' => false,
                ],
                [
                    'id'    => 6,
                    'name'  => 'Lorem Ipsum 6',
                    'photo' => 6,
                    'desc'  => 'Curabitur id mi eget arcu volutpat fermentum. Nulla facilisi. Praesent bibendum nibh quis purus tincidunt scelerisque. Vivamus tristique gravida est in sodales. Maecenas eget mauris',
                    'skills' => 'Rehabilitant w USD Kraków-Prokocim',
                    'degree' => 'Magister rehabilitacji, AWF Kraków',
                    'courses' => 'Rehabilitacja dzieicęca',
                    'social_media' => false,
                ],
            ],
            'id' => 18, 'name' => 'Fizjoterapia', 'cost' => '80 zł / 50 min'],
        19 => [
            'therapists' => [
                [
                    'id'    => 6,
                    'name'  => 'Lorem Ipsum 6',
                    'photo' => 6,
                    'desc'  => 'Curabitur id mi eget arcu volutpat fermentum. Nulla facilisi. Praesent bibendum nibh quis purus tincidunt scelerisque. Vivamus tristique gravida est in sodales. Maecenas eget mauris',
                    'skills' => 'Rehabilitant w USD Kraków-Prokocim',
                    'degree' => 'Magister rehabilitacji, AWF Kraków',
                    'courses' => 'Rehabilitacja dzieicęca',
                    'social_media' => false,
                ],
                [
                    'id'    => 6,
                    'name'  => 'Lorem Ipsum 6',
                    'photo' => 6,
                    'desc'  => 'Curabitur id mi eget arcu volutpat fermentum. Nulla facilisi. Praesent bibendum nibh quis purus tincidunt scelerisque. Vivamus tristique gravida est in sodales. Maecenas eget mauris',
                    'skills' => 'Rehabilitant w USD Kraków-Prokocim',
                    'degree' => 'Magister rehabilitacji, AWF Kraków',
                    'courses' => 'Rehabilitacja dzieicęca',
                    'social_media' => false,
                ],
            ],
            'id' => 19, 'name' => 'Terapia Metodą Carla Delacato', 'cost' => '120 zł |  60 zł'],
        20 => [
            'therapists' => [
                [
                    'id'    => 6,
                    'name'  => 'Lorem Ipsum 6',
                    'photo' => 6,
                    'desc'  => 'Curabitur id mi eget arcu volutpat fermentum. Nulla facilisi. Praesent bibendum nibh quis purus tincidunt scelerisque. Vivamus tristique gravida est in sodales. Maecenas eget mauris',
                    'skills' => 'Rehabilitant w USD Kraków-Prokocim',
                    'degree' => 'Magister rehabilitacji, AWF Kraków',
                    'courses' => 'Rehabilitacja dzieicęca',
                    'social_media' => false,
                ],
                [
                    'id'    => 6,
                    'name'  => 'Lorem Ipsum 6',
                    'photo' => 6,
                    'desc'  => 'Curabitur id mi eget arcu volutpat fermentum. Nulla facilisi. Praesent bibendum nibh quis purus tincidunt scelerisque. Vivamus tristique gravida est in sodales. Maecenas eget mauris',
                    'skills' => 'Rehabilitant w USD Kraków-Prokocim',
                    'degree' => 'Magister rehabilitacji, AWF Kraków',
                    'courses' => 'Rehabilitacja dzieicęca',
                    'social_media' => false,
                ],
            ],
            'id' => 20, 'name' => 'Grupowe zajęcia z fizjoterapii', 'cost' => '50 zł / 50 min'],
        21 => [
            'therapists' => [
                [
                    'id'    => 6,
                    'name'  => 'Lorem Ipsum 6',
                    'photo' => 6,
                    'desc'  => 'Curabitur id mi eget arcu volutpat fermentum. Nulla facilisi. Praesent bibendum nibh quis purus tincidunt scelerisque. Vivamus tristique gravida est in sodales. Maecenas eget mauris',
                    'skills' => 'Rehabilitant w USD Kraków-Prokocim',
                    'degree' => 'Magister rehabilitacji, AWF Kraków',
                    'courses' => 'Rehabilitacja dzieicęca',
                    'social_media' => false,
                ],
                [
                    'id'    => 6,
                    'name'  => 'Lorem Ipsum 6',
                    'photo' => 6,
                    'desc'  => 'Curabitur id mi eget arcu volutpat fermentum. Nulla facilisi. Praesent bibendum nibh quis purus tincidunt scelerisque. Vivamus tristique gravida est in sodales. Maecenas eget mauris',
                    'skills' => 'Rehabilitant w USD Kraków-Prokocim',
                    'degree' => 'Magister rehabilitacji, AWF Kraków',
                    'courses' => 'Rehabilitacja dzieicęca',
                    'social_media' => false,
                ],
            ],
            'id' => 21, 'name' => 'Terapia ortoptyczna', 'cost' => '80 zł / 50 min'],
        22 => [
            'therapists' => [
                [
                    'id'    => 6,
                    'name'  => 'Lorem Ipsum 6',
                    'photo' => 6,
                    'desc'  => 'Curabitur id mi eget arcu volutpat fermentum. Nulla facilisi. Praesent bibendum nibh quis purus tincidunt scelerisque. Vivamus tristique gravida est in sodales. Maecenas eget mauris',
                    'skills' => 'Rehabilitant w USD Kraków-Prokocim',
                    'degree' => 'Magister rehabilitacji, AWF Kraków',
                    'courses' => 'Rehabilitacja dzieicęca',
                    'social_media' => false,
                ],
                [
                    'id'    => 6,
                    'name'  => 'Lorem Ipsum 6',
                    'photo' => 6,
                    'desc'  => 'Curabitur id mi eget arcu volutpat fermentum. Nulla facilisi. Praesent bibendum nibh quis purus tincidunt scelerisque. Vivamus tristique gravida est in sodales. Maecenas eget mauris',
                    'skills' => 'Rehabilitant w USD Kraków-Prokocim',
                    'degree' => 'Magister rehabilitacji, AWF Kraków',
                    'courses' => 'Rehabilitacja dzieicęca',
                    'social_media' => false,
                ],
            ],
            'id' => 22, 'name' => 'GPS', 'cost' => '80 zł / 50 min'],
        23 => [
            'therapists' => [
                [
                    'id'    => 6,
                    'name'  => 'Lorem Ipsum 6',
                    'photo' => 6,
                    'desc'  => 'Curabitur id mi eget arcu volutpat fermentum. Nulla facilisi. Praesent bibendum nibh quis purus tincidunt scelerisque. Vivamus tristique gravida est in sodales. Maecenas eget mauris',
                    'skills' => 'Rehabilitant w USD Kraków-Prokocim',
                    'degree' => 'Magister rehabilitacji, AWF Kraków',
                    'courses' => 'Rehabilitacja dzieicęca',
                    'social_media' => false,
                ],
                [
                    'id'    => 6,
                    'name'  => 'Lorem Ipsum 6',
                    'photo' => 6,
                    'desc'  => 'Curabitur id mi eget arcu volutpat fermentum. Nulla facilisi. Praesent bibendum nibh quis purus tincidunt scelerisque. Vivamus tristique gravida est in sodales. Maecenas eget mauris',
                    'skills' => 'Rehabilitant w USD Kraków-Prokocim',
                    'degree' => 'Magister rehabilitacji, AWF Kraków',
                    'courses' => 'Rehabilitacja dzieicęca',
                    'social_media' => false,
                ],
            ],
            'id' => 23, 'name' => 'Terapia metodą Warnkego', 'cost' => '60 zł'],
        24 => [
            'therapists' => [
                [
                    'id'    => 6,
                    'name'  => 'Lorem Ipsum 6',
                    'photo' => 6,
                    'desc'  => 'Curabitur id mi eget arcu volutpat fermentum. Nulla facilisi. Praesent bibendum nibh quis purus tincidunt scelerisque. Vivamus tristique gravida est in sodales. Maecenas eget mauris',
                    'skills' => 'Rehabilitant w USD Kraków-Prokocim',
                    'degree' => 'Magister rehabilitacji, AWF Kraków',
                    'courses' => 'Rehabilitacja dzieicęca',
                    'social_media' => false,
                ],
                [
                    'id'    => 6,
                    'name'  => 'Lorem Ipsum 6',
                    'photo' => 6,
                    'desc'  => 'Curabitur id mi eget arcu volutpat fermentum. Nulla facilisi. Praesent bibendum nibh quis purus tincidunt scelerisque. Vivamus tristique gravida est in sodales. Maecenas eget mauris',
                    'skills' => 'Rehabilitant w USD Kraków-Prokocim',
                    'degree' => 'Magister rehabilitacji, AWF Kraków',
                    'courses' => 'Rehabilitacja dzieicęca',
                    'social_media' => false,
                ],
            ],
            'id' => 24, 'name' => 'Terapia kamertonami', 'cost' => '80 zł'],
        25 => [
            'therapists' => [
                [
                    'id'    => 6,
                    'name'  => 'Lorem Ipsum 6',
                    'photo' => 6,
                    'desc'  => 'Curabitur id mi eget arcu volutpat fermentum. Nulla facilisi. Praesent bibendum nibh quis purus tincidunt scelerisque. Vivamus tristique gravida est in sodales. Maecenas eget mauris',
                    'skills' => 'Rehabilitant w USD Kraków-Prokocim',
                    'degree' => 'Magister rehabilitacji, AWF Kraków',
                    'courses' => 'Rehabilitacja dzieicęca',
                    'social_media' => false,
                ],
                [
                    'id'    => 6,
                    'name'  => 'Lorem Ipsum 6',
                    'photo' => 6,
                    'desc'  => 'Curabitur id mi eget arcu volutpat fermentum. Nulla facilisi. Praesent bibendum nibh quis purus tincidunt scelerisque. Vivamus tristique gravida est in sodales. Maecenas eget mauris',
                    'skills' => 'Rehabilitant w USD Kraków-Prokocim',
                    'degree' => 'Magister rehabilitacji, AWF Kraków',
                    'courses' => 'Rehabilitacja dzieicęca',
                    'social_media' => false,
                ],
            ],
            'id' => 25, 'name' => 'Akupunktura', 'cost' => '130zł | 80zł '],
    ];

    /**
     * Create UnitRepository instance.
     *
     * @param App\Models\Theme $theme
     * @return void
     */
    public function __construct(Therapy $therapy) {
        $this->model = $therapy;
    }

    /**
     * getById
     * Zwraca dane jednostki dla podanego identyfkatora
     * {@inheritDoc}
     * @see \App\Repositories\ResourceRepository::getById()
     */
    public function getById( $id ) {

        $therapy = $this->model->findOrFail( $id );
        return $therapy;
    }

    public function getAll( $request ) {
        return $this->model->get();
    }

    private function _searchItem($_search, $item) {
        return preg_match('/' . $_search .'/i',$item->name);
    }
}