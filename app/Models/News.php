<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class News
 * @package App\Models
 * @property int category_id
 * @property int source_id
 * @property string text
 */
class News extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = "news";

    /**
     * @var string[]
     */
    protected $fillable = [
        'category_id',
        'source_id',
        'text'
    ];

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public static function rules()
    {
        return [
            'category_id' => 'required',
            'source_id' => 'required',
            'text' => 'required'
        ];
    }
}
