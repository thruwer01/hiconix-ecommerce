<?php

namespace App\Http\Resources\Product;

use App\Models\PropertiesToProduct;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $textPrice = null;
        if ($this->brand->id === 2071 || ($this->brand->id === 2070 && $this->status == 'on_order2') || $this->getParentCategory() === 2) {
            $textPrice = "<span class=\"text-muted\">цена по запросу</span>";
        }

        $ricPrice = intval($this->ric_current);
        $productsInCart = [$this->id];
        if ($this->getParentCategory() == 26 && $this->block_type?->id == 2 && count($this->sets()) > 0) {
            $set = $this->sets()[0];

            $ricPrice += intval($set->ric_current);
            $productsInCart[] = $set->id;
        }
        
        
        if ($this->getParentCategory() == 117 && count($this->sets()) > 0 && count($this->options_in_sets()) > 0 && $this->block_type->id == 2) {
            $set = $this->sets()[0];
            $option = $this->options_in_sets()[0];
            $ricPrice += intval($set->ric_current);
            $ricPrice += intval($option->ric_current);

            $productsInCart[] = $set->id;
            $productsInCart[] = $option->id;
        }

        

        return [
            "id" => $this->id,
            "brand" => $this->brand,
            "category" => $this->category,
            "images" => $this->images,
            "model" => $this->model,
            "squere" => $this->squere,
            "human_stock" => $this->human_stock,
            "status" => $this->status_new,
            "is_in_stock" => $this->is_in_stock,
            "in_way" => $this->in_way,
            "article" => $this->article,
            "ric_current" => number_format($ricPrice, 0, " ", " "),
            "slug" => $this->slug,
            "badges" => $this->getBadges(),
            "block_type_id" => $this->block_type_id,
            "anons_props" => PropertiesToProduct::where('product_id', $this->id)->get(),
            "stock_html" => $this->getStockHTML(),
            "statuses" => $this->getStatusHTML(),
            "text_price" => $textPrice,
            "prodInCart" => implode(',', $productsInCart),
            "parentCategory" => $this->getParentCategory(),
        ];
    }

    public $filters = [];
}
