<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = ['link', 'product_id'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
