<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Task;

class Task extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $guarded = ['id'];
}
