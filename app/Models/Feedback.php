<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Feedback
 * @package App\Models
 * @property string firstname
 * @property string comment
 */
class Feedback extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = "feedbacks";

    /**
     * @var string[]
     */
    protected $fillable = [
        'firstname',
        'comment'
    ];

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public static function rules()
    {
        return [
            'firstname' => 'required',
            'comment' => 'required'
        ];
    }
}
