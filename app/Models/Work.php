<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['number', 'description', 'location', 'municipality', 'ibge_code', 'latitude', 'longitude'])]
class Work extends Model
{
    //
}
