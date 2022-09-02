<?php

namespace App\Http\Resources\V2;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [//se traducen los nombres de los campos, izquierda datos para el frontend y derecha datos de la base de datos. Tambien se toca el modelo para agregar los campos virtuales
            'id'=>$this->id,
            'post_name'=>$this->title,
            'slug'=>$this->slug,
            'content'=>$this->content,
            'autor'=> [
                'autor' => $this->user->name,
                'email' => $this->user->email,
            ],
            'created_at' => $this->published_at
        ];
    }
}
