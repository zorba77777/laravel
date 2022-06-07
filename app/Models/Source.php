<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Source
 * @package App\Models
 * @property string description
 */
class Source extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = "sources";

    /**
     * @var string[]
     */
    protected $fillable = [
        'description'
    ];
}
