<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function __invoke()
    {
        $persons = [
            [
                'id' => 1,
                'name' => 'Oleg',
                'age' => 23,
                'job' => 'job 1',
            ],
            [
                'id' => 2,
                'name' => 'Masha',
                'age' => 29,
                'job' => 'job 2',
            ],
            [
                'id' => 3,
                'name' => 'Petr',
                'age' => 42,
                'job' => 'job 3',
            ],
            [
                'id' => 4,
                'name' => 'Yasha',
                'age' => 17,
                'job' => 'job 4',
            ],
            [
                'id' => 5,
                'name' => 'Anna',
                'age' => 45,
                'job' => 'job 5',
            ],
        ];

        return $persons;
    }
}
