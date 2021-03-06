<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Sushi\Sushi;

class Series extends Model
{
    use Sushi;

    public function screencasts()
    {
        return $this->hasMany(Screencast::class);
    }

    public function getRows()
    {
        return [
            [ 'id' => 1, 'title' => 'Getting Started' ],
        ];
    }
}
