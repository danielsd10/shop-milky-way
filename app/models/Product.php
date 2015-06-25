<?php

class Product extends Eloquent {

    // database table
	protected $table = 'products';

    // attributes
    protected $fillable = ['name', 'category', 'description', 'image', 'price', 'rate'];

    // timestamps
    public $timestamps = true;

}
