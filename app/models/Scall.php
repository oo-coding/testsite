<?php 
namespace PMAN\models;

use Illuminate\Database\Eloquent\Model as Eloquent;

//Eloquent expects table to be plural in lowercase, and class to be singular in Titlecase
class Tmp extends Eloquent
{

    //Eloquent expects created_at, updated_at fields
    public $timestamps = false;
}
