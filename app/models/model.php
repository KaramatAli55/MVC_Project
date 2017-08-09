<?php

abstract  class Model
{
  public $name;
  public $id;
  public abstract function add();
  public abstract function update();
  public abstract function delete();

}

 ?>
