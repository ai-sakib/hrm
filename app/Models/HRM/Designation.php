<?php

namespace App\Models\HRM;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Database\Factories\HRM\DesignationFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Designation extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];
}