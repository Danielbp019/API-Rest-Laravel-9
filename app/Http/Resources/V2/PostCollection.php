<?php

namespace App\Http\Resources\V2;

use Illuminate\Http\Resources\Json\ResourceCollection;

class PostCollection extends ResourceCollection
{
    /* public $collects = PostResource::class; esto se agregava en versiones antiguas de laravel8 para que se apliquen los estilos a los datos pero ya no se usa, el estilo se aplica solo. Dejo esata linea como referencia */
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'data'=>$this->collection,
            'meta'=>[
                'organization' => 'Evil Genius',
                'authors' => [
                    'Dr Malito',
                    'Evil Genius'
                ]
                ],
                'type' => 'articles'
        ];
    }
}
