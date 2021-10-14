<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Hotel
 * @package App\Models
 * @version October 11, 2021, 7:18 pm UTC
 *
 * @property string $name
 * @property string $location
 * @property string $HotelClass
 * @property string $image
 * @property integer $restaurant
 * @property integer $Indoor_ATM
 * @property integer $Free_Wifi
 */
class Hotel extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'hotels';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'location',
        'HotelClass',
        'image',
        'restaurant',
        'Indoor_ATM',
        'Free_Wifi'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'location' => 'string',
        'HotelClass' => 'string',
        'image' => 'string',
        'restaurant' => 'integer',
        'Indoor_ATM' => 'integer',
        'Free_Wifi' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'location' => 'required',
        'Free_Wifi' => 'Free_cancellation integer:yes,no select:yes,no'
    ];

    
}
