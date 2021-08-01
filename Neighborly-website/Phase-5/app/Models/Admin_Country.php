<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin_Country extends Model
{
    use HasFactory;
    protected $table="countries";
    protected $guarded=["id"];
    public $timestamps = false;
}
