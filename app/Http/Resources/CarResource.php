<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CarResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {   
        if (isset($this->front_image) && isset($this->front_image->image)) {
            $imageURL = asset('images/data/' . $this->front_image->image);
        } else {
            $imageURL = asset('images/no_image.jpg');
        }

        return [
            'id'                => $this->id,
            'd_11'              => $this->d_11,
            'image'             => $imageURL,
            'alias'             => $this->alias,
            'doors'             => $this->doors,
            'featured'          => $this->featured,
            'suitcases'         => $this->suitcases,
            'franchise'         => $this->franchise,
            'carburant'         => $this->carburant,
            'price_from'        => $this->price_from,
            'description'       => $this->contentload->description,
            'transmission'      => $this->transmission,
            'airconditioner'    => $this->airconditioner,
            'price_per_night'   => $this->price_per_night,
            'passengers_number' => $this->passengers_number,
        ];
    }
}
