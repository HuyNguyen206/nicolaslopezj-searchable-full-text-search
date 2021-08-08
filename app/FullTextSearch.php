<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;

class FullTextSearch extends Model
{
    //
    use SearchableTrait;
    protected $searchable = [
      'columns' => [
          'full_text_searches.customer_name' => 10,
          'full_text_searches.gender' => 10,
          'full_text_searches.address' => 10,
          'full_text_searches.city' => 10,
          'full_text_searches.postal_code' => 10,
          'full_text_searches.country' => 10,
      ]
    ];

    protected $guarded = [];
}
