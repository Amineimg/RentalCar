<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        if (isset($this->image)) {
            $imageURL = asset($this->image);
        } else {
            $imageURL = asset('no_image.jpg');
        }

        return [
            'id'          => $this->id,
            'image'       => $imageURL,
            'alias'       => $this->alias,
            'title'       => Str::words($this->contentload->title, '10'),
            'content'     => $this->contentload->content,
            // 'content'     => strip_tags(Str::words($this->contentload->content, '15')),
            'username'    => $this->user->username,
            'created_at'  => $this->created_at,
        ];
    }
}
