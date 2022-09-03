<?php

namespace App\Http\Resources\V1;

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
        return[
            'title'=>$this->title,
            'slug'=>$this->slug,
            'excerpt'=>$this->excerpt,
            'content'=>$this->content
        ];//se traducen los nombres de los campos, izquierda datos para el frontend y derecha datos de la base de datos. Tambien se toca el modelo para agregar los campos virtuales
    }
}
