<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Reservation
 * @package App\Models
 * @version October 14, 2021, 6:21 am UTC
 *
 * @property string $name
 * @property string $job
 * @property string $checkin
 * @property string $checkout
 * @property integer $room_id
 * @property integer $user_id
 */
class Reservation extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'reservations';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'job',
        'checkin',
        'checkout',
        'room_id',
        'user_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'job' => 'string',
        'checkin' => 'datetime',
        'checkout' => 'datetime',
        'room_id' => 'integer',
        'user_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required'
    ];

    
}
