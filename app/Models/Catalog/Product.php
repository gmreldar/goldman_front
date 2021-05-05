<?php

declare(strict_types=1);

namespace App\Models\Catalog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * Class Product
 * @package App\Models
 */
class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'category_id',
        'description',
        'keywords',
        'slug',
        'img',
        'price',
        'product_type',
        'size',
        'metal_type',
        'gender_type',
        'standard',
        'is_sold',
        'is_active',
    ];

    /**
     * @param $query
     * @return mixed
     */
    public function scopeLastSecondHand($query)
    {
        return $query->whereRaw("created_at BETWEEN date_add(curdate(), interval -6 day) AND NOW()");
    }

    /**
     * @param $query
     * @return mixed
     */
    public function scopeLastSecondHandDay($query)
    {
        return $query->whereRaw('created_at BETWEEN date_add(curdate(), interval -6 day) '
            . 'AND date_add(curdate(), interval -5 day)');
    }

    /**
     * @return HasOne
     */
    public function category()
    {
        return $this->hasOne(Category::class);
    }
}
