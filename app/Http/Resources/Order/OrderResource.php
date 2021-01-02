<?php

namespace App\Http\Resources\Order;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Order\OrderItemResource;
use App\Http\Resources\User\UserResource;
use Carbon\Carbon;

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
            'id'=> $this->id,
            'customer'=> new UserResource($this->user),
            'status'=> 'p',
            'totalcost'=> $this->totalcost,
            'items' => OrderItemResource::collection($this->orderitems),
            'created_at' => Carbon::parse($this->created_at)->format('D M j Y')

        ];
    }
}
