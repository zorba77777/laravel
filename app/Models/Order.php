<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Order
 * @package App\Models
 * @property string firstname
 * @property string phonenumber
 * @property string email
 * @property string requestedinfo
 */
class Order extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = "orders";

    /**
     * @var string[]
     */
    protected $fillable = [
        'firstname',
        'phonenumber',
        'email',
        'requestedinfo',
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
            'phonenumber' => 'required',
            'email' => 'required',
            'requestedinfo' => 'required'
        ];
    }
}
