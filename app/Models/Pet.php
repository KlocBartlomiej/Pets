<?php

namespace App\Models;

class Pet{
    public $id;
    public $category = [];
    public $name;
    public $photoUrls = [];
    public $tags = [];
    public $status;
}

class Category{
    public $id;
    public $name;
}

class Tag{
    public $id;
    public $name;
}