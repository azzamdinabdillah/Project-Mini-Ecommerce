<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_model extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'product';

    public function categories()
    {
        return $this->belongsTo(category_model::class, 'category_model_id', 'id');
    }
    public function stores()
    {
        return $this->belongsTo(Store::class, 'store_id');
    }
}
