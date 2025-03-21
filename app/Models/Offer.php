<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    public $timestamps = false;
   protected $tabls = "offers";
   protected $fillable = ['name','price','detels','created_at','updetd_at'];
   protected $hidden = ['created_at','updetd_at'];
}
