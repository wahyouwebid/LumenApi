<?php

/*
 * @Author: Ujang Wahyu 
 * @Date: 2018-09-04 11:45:04 
 * @Last Modified by: Ujang Wahyu
 * @Last Modified time: 2018-09-04 12:27:36
 */

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;

class Photo360 extends Model{
    
    public $timestamps = false;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'photo360';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'p_url', 'cover_url','description','scrolling_enabled', 'min_distance_to_enable_scrolling', 'accelerometer_enabled','interval', 'sensitivity', 'left_right_enabled','up_down_enabled'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function region()
    {
        return $this->belongsTo('App\Models\Tour');
    }
}