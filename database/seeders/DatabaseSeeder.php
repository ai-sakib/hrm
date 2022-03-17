<?php

namespace Database\Seeders;

use App\Models\HRM\Holiday;
use App\Models\HRM\Employee;
use App\Models\HRM\Designation;
use Illuminate\Database\Seeder;
use Database\Seeders\HRM\UserSeeder;
use Database\Seeders\HRM\ShiftSeeder;
use Database\Seeders\HRM\HolidaySeeder;
use Database\Seeders\HRM\OTLevelSeeder;
use Database\Seeders\HRM\WeekDaySeeder;
use Database\Seeders\HRM\EmployeeSeeder;
use Database\Seeders\HRM\WorkTypeSeeder;
use Database\Seeders\HRM\DesignationSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(HolidaySeeder::class);
        $this->call(UserSeeder::class);
        $this->call(DesignationSeeder::class);
        $this->call(EmployeeSeeder::class);
        $this->call(WeekDaySeeder::class);
        $this->call(OTLevelSeeder::class);
        $this->call(WorkTypeSeeder::class);
        $this->call(ShiftSeeder::class);
    }
}
