<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use MStaack\LaravelPostgis\Eloquent\PostgisTrait;

class BusStop extends Model
{
    use HasFactory, PostgisTrait;

    protected $postgisFields = [
        'location'
    ];

    protected $postgisTypes = [
        'location' => [
            'geomtype' => 'geography',
            'srid' => 4326
        ]
    ];

    protected $fillable = [
        'name', 'location', 'is_active'
    ];
}
