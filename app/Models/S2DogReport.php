<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class S2DogReport extends Model
{
    use HasFactory;

    protected $connection = 'pgsql_db2';

}
