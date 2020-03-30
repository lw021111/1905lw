<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    public $primaryKey='id';
    protected $table='search';
    public $timestamps=false;
    protected $guarded = [];
}
