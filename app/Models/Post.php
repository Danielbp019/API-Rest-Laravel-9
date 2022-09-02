<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function getExcerptAttribute(){
        return substr($this->content, 0, 120);
    }/* Campo virtual para mostar el estracto en la vista usando $post->excerpt sacando los datos del campo content en la DB solo las primeras de 0 a 120 letras*/

    public function getPublishedAtAttribute(){
        return $this->created_at->format('Y-m-d');
    }/* se trae el campo created_at de la db y se muestra en la vista con $post->published_at usando getPublishedAtAttribute de la funcion */
}
