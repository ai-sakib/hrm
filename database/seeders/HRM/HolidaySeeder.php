<?php

namespace Database\Seeders\HRM;

use App\Models\HRM\Holiday;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HolidaySeeder extends Seeder
{
    
    public function run()
    {
        $holidays = [
            [
                'date' => '2022-02-21',
                'description' => 'Mother Language Day',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'date' => '2022-03-17',
                'description' => 'Birthday of Bangabandhu',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'date' => '2022-03-19',
                'description' => 'Shab-E-Barat',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'date' => '2022-03-26',
                'description' => 'Independece Day',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'date' => '2022-04-14',
                'description' => 'পহেলা বৈশাখ',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'date' => '2022-04-29',
                'description' => 'Shab-E-Qadar',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'date' => '2022-05-01',
                'description' => 'May Day',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'date' => '2022-05-02',
                'description' => 'Eid-Ul-Fitr',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'date' => '2022-05-03',
                'description' => 'Eid-Ul-Fitr',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'date' => '2022-05-04',
                'description' => 'Eid-Ul-Fitr',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'date' => '2022-05-15',
                'description' => 'Buddha Purnima',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'date' => '2022-07-09',
                'description' => 'Eid-Ul-Azha',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'date' => '2022-07-10',
                'description' => 'Eid-Ul-Azha',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'date' => '2022-07-11',
                'description' => 'Eid-Ul-Azha',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'date' => '2022-08-09',
                'description' => 'Ashura',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'date' => '2022-10-05',
                'description' => 'বিজয়া দশমী',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'date' => '2022-10-09',
                'description' => 'Eid-E-Miladunnabi',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'date' => '2022-12-16',
                'description' => 'Victory Day',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'date' => '2022-12-25',
                'description' => 'Christmas Day',
                'created_at' => now(),
                'updated_at' => now()
            ],

            // 2023
            [
                'date' => '2023-02-21',
                'description' => 'Mother Language Day',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'date' => '2023-03-17',
                'description' => 'Birthday of Bangabandhu',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'date' => '2023-03-26',
                'description' => 'Independece Day',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'date' => '2023-04-14',
                'description' => 'পহেলা বৈশাখ',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'date' => '2023-05-01',
                'description' => 'May Day',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'date' => '2023-12-16',
                'description' => 'Victory Day',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'date' => '2023-12-25',
                'description' => 'Christmas Day',
                'created_at' => now(),
                'updated_at' => now()
            ],


            // 2024
            [
                'date' => '2024-02-21',
                'description' => 'Mother Language Day',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'date' => '2024-03-17',
                'description' => 'Birthday of Bangabandhu',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'date' => '2024-03-26',
                'description' => 'Independece Day',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'date' => '2024-04-14',
                'description' => 'পহেলা বৈশাখ',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'date' => '2024-05-01',
                'description' => 'May Day',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'date' => '2024-12-16',
                'description' => 'Victory Day',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'date' => '2024-12-25',
                'description' => 'Christmas Day',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        Holiday::insert($holidays);

        // $years = range(2022,2023);
        // $months = range(1,12);
        // $descriptions = ['Govt Holiday', 'Independece Day', 'Victory Day', 'Mother Language Day', 'Eid'];
        // $dates = range(1,28);

        // $i = 0;
        // while($i < 100){

        //     $year = $years[array_rand($years)];
        //     $month = str_pad($months[array_rand($months)] , 2 , "0", STR_PAD_LEFT );
        //     $date = str_pad($dates[array_rand($dates)] , 2, "0", STR_PAD_LEFT);

        //     $yearMonthDate = $year . '-' . $month . '-' . $date;

        //     $isHolidayFound = in_array($yearMonthDate, array_column($holidays, 'date'));

        //     // $isHolidayFound = false;
        //     // foreach($holidays as $key => $holiday){
        //     //     if($holiday["date"] === $yearMonthDate){
        //     //         $isHolidayFound = true;
        //     //     }
        //     // }
            
        //     if($isHolidayFound) continue;

        //     $holidays[] = [
        //         'date' => $yearMonthDate,
        //         'description' => $descriptions[array_rand($descriptions)],
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ];

        //     $i++;
        // }
    }
}
