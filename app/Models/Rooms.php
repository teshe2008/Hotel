<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Rooms
 * @package App\Models
 * @version October 14, 2021, 4:19 am UTC
 *
 * @property string $name
 * @property integer $room_number
 * @property string $room_type
 * @property number $price
 * @property integer $hotel_id
 */
class Rooms extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'rooms';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'room_number',
        'room_type',
        'price',
        'hotel_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'room_number' => 'integer',
        'room_type' => 'string',
        'price' => 'float',
        'hotel_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|min:5|max:50',
        'room_number' => 'required',
        'price' => 'required'
    ];

    
}
