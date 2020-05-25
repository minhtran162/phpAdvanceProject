<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    public $timestamps = false;
    protected $dateFormat = 'U';

    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';

    protected $fillable =[
        'name',
        'desc',
        'price',
        'brand_id',
        'nation_id',
        'type_id'
    ];

    function brand(){
        return $this->belongsTo('App\Models\Brand', 'brand_id');
    }
    function nation(){
        return $this->belongsTo('App\Models\Nation', 'nation_id');
    }
    function types(){
        return $this->belongsTo('App\Models\Type', 'type_id');
    }
    
}
