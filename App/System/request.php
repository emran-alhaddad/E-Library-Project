<?php

namespace coding\app\system;

class Request
{


  public function getRoute()
  {
    return $_SERVER["REQUEST_URI"];
  }

  public function setRoute($rout)
  {
    $_SERVER["REQUEST_URI"] = $rout;
  }
  public function getRequestMethod()
  {
    return $_SERVER["REQUEST_METHOD"];
  }

  public function setRequestMethod($method)
  {
    $_SERVER["REQUEST_METHOD"] = $method;
  }
}
