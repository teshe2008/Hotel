<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Feedback
 * @package App\Models
 * @version October 14, 2021, 4:27 am UTC
 *
 * @property string $feedback
 * @property string $image
 * @property integer $user_id
 * @property integer $hotel_id
 */
class Feedback extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'feedback';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'feedback',
        'image',
        'user_id',
        'hotel_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'feedback' => 'string',
        'image' => 'string',
        'user_id' => 'integer',
        'hotel_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'feedback' => 'required|min:50'
    ];

    
}
