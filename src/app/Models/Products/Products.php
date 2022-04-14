<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models;

class Products extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'type',
        'brand_id',
        'model',
        'description',
        'serial_number',
        'image'
    ];

    public function brand () {
        return $this->belongsTo(ProductBrands::class, 'brand_id', 'id');
    }

    public function type () {
        return $this->belongsTo(ProductType::class, 'type_id', 'id');
    }
}
