<?php

namespace Database\Seeders;

use App\Models\TodoList;
use Illuminate\Database\Seeder;

class ToDoListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                "name" => "Bermain Play Station"
            ],
            [
                "name" => "Sholat"
            ],
            [
                "name" => "Mukbang"
            ]
        ];

        for ($i = 0; $i < count($data); $i++) {
            TodoList::create(
                [
                    'task_name' => $data[$i]['name']
                ]
            );
        }
    }
}
