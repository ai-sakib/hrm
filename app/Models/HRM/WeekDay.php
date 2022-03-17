<?php

namespace App\Models\HRM;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class WeekDay extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $timestamps = false;
}