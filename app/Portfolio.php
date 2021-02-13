<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $fillable= ['title','image','client','skill','description','project_link','facebook','twitter','linkedin'];

}
