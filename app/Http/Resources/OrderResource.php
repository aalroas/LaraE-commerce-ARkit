<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
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
            'name' =>  $this->product->name,
            'total' => $this->total,
            'status'=> $this->status,
            'qty'=> $this->qty,
            'image'=>  $this->product->image,
        ];
        // return parent::toArray($request);
    }
}
