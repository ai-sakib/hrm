<?php

namespace App\Models\HRM;

use App\Models\HRM\Designation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];

    public function designation(){
        return $this->belongsTo(Designation::class);
    }
}
