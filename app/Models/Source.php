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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public static function rules()
    {
        return [
            'description' => 'required'
        ];
    }
}
