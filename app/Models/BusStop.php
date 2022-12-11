<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use MStaack\LaravelPostgis\Eloquent\PostgisTrait;

class BusStop extends Model
{
    use HasFactory, PostgisTrait;

    protected $fillable = [

    ];
}
