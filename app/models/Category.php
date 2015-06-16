<?php

class Category extends Eloquent {

    // database table
	protected $table = 'categories';

    // attributes
    protected $fillable = ['name', 'image'];

    // timestamps
    public $timestamps = true;

}
