<?php
namespace App\Http\Utilities;

class Method {
  protected static $methods = [

  "Choose a Print Method"                  => "000",
  "Gravure"                                => "001",
  "Offset Litho"                           => "002",
  "Dry Litho"                              => "003",
  "Flexo"                                  => "004",
  "Screenprint"                            => "005",
  "Digital"                                => "006"
  ];

  public static function all()
    {
     return static::$methods; 
    }

  }