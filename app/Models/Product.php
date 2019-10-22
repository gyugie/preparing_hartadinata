<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Product extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'product_master';
    protected $fillable = ['title', 'description','price', 'created_by'];
    protected $dates = ['deleted_at'];
}
