<?php

require 'Icecream.php';

class VanillaIcecream implements Icecream {
  public String getName(){
    return 'バニラアイスクリーム';
  }
  public String howSweet(){
    return 'バニラ味';
  }
}