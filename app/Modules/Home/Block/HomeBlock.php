<?php

declare(strict_types=1);

namespace App\Modules\Home\Block;

use App\Models\Catalog\Product;

/**
 * Class HomeBlock
 * @package App\Http\Controllers\Home\Block
 */
class HomeBlock
{
    /**
     * @param Product $secondHandProduct
     * @return string
     */
    public function convertDays(Product $secondHandProduct)
    {
        $publishDate = $secondHandProduct->created_at;
        $publishDate->setTime(0, 0);
        $daysLeft = 7 - now()->diffInDays($publishDate);
        return $daysLeft . ' ' . trans_choice('product.days', $daysLeft);
    }

    /**
     * @param Product $secondHandProduct
     * @return float|int|string
     */
    public function discount(Product $secondHandProduct)
    {
        $defaultPercent = 5;
        $createdAt = $secondHandProduct->created_at;
        $createdAt->setTime(0, 0);
        $diffInDays = now()->diffInDays($createdAt);
        $discount = round($secondHandProduct->price * ($defaultPercent * $diffInDays) / 100);
        return $diffInDays == 0
            ? $secondHandProduct->price
            : sprintf('<s>%s</s> %s', $secondHandProduct->price, $secondHandProduct->price - $discount);
    }
}
