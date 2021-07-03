<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class add_admin extends Model
{
    use HasFactory;

    public $table='admininfo';
    public $primaryKey='email';
    public $incrementing=false;
    public $keyType='';
    public  $timestamps=false;
}
