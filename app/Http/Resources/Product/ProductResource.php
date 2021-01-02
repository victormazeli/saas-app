<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
       
        return [
            'id'=> $this->id,
            'name' => $this->name,
            'short_description'=> $this->description,
            'price' => $this->price,
            'stock' => $this->quantity,
            'sold' => $this->sales,
            'product_detail' => $this->product_detail,
            'image' => $this->image,
            'slug' => $this->slug 
        ];
    }
}
