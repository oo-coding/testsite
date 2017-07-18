<?php 
namespace PMAN\models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Tmp extends Eloquent
{

    //Eloquent expects created_at, updated_at fields
    public $timestamps = false;
}
