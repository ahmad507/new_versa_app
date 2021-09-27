<?php

namespace App\Repositories\Partials;

use App\Models\Partial\Product;
use App\Services\Partials\FooterInterface;


class FooterRepository implements FooterInterface
{
    /**++++++++++++++++++++++++++++++++++++++++++++++ */
    public function formatDataProduct($productItems)
    {
        return [
            'product' => $productItems->product_name,
            'category' => $productItems->category->category_name
        ];
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++ */
    public function transportation()
    {
        $productItems = Product::orderBy('category_id', 'asc')
            ->with('category')
            ->get()
            ->map(function ($productItems) {
                return $this->formatDataProduct($productItems);
            })
            ->where('category', 'Transportation');
        $newproductItems = json_decode($productItems);
        return $newproductItems;
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++ */
    public function hotel()
    {
        $productItems = Product::orderBy('category_id', 'asc')
            ->with('category')
            ->get()
            ->map(function ($productItems) {
                return $this->formatDataProduct($productItems);
            })
            ->where('category', 'Hotel');
        $newproductItems = json_decode($productItems);
        return $newproductItems;
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++ */
    public function vacation()
    {
        $productItems = Product::orderBy('category_id', 'asc')
            ->with('category')
            ->get()
            ->map(function ($productItems) {
                return $this->formatDataProduct($productItems);
            })
            ->where('category', 'Vacation');
        $newproductItems = json_decode($productItems);
        return $newproductItems;
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++ */
    public function special_trip()
    {
        $productItems = Product::orderBy('category_id', 'asc')
            ->with('category')
            ->get()
            ->map(function ($productItems) {
                return $this->formatDataProduct($productItems);
            })
            ->where('category', 'Special Trip');
        $newproductItems = json_decode($productItems);
        return $newproductItems;
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++ */
    public function payment()
    {
        $productItems = Product::orderBy('category_id', 'asc')
            ->with('category')
            ->get()
            ->map(function ($productItems) {
                return $this->formatDataProduct($productItems);
            })
            ->where('category', 'Payment');
        $newproductItems = json_decode($productItems);
        return $newproductItems;
    }
    /**++++++++++++++++++++++++++++++++++++++++++++++ */
}
