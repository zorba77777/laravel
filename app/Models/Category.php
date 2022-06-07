<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 * @package App\Models
 * @property string name
 */
class Category extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = "categories";

    /**
     * @var string[]
     */
    protected $fillable = [
        'name'
    ];
}
