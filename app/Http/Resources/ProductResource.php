<?php

namespace App\Http\Resources;

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
        return [
            'id' => $this->id,
            'title'=> $this->title,
            'description' => $this->description,
            'user_id' => $this->user_id,
            'images' => $this->images,
            'price' => $this->prices->sortByDesc('created_at')->first(),
            'likes' => $this->likes_count,
            'is_liked' => $this->is_liked,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
