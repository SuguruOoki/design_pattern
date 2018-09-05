<?php

abstract Icecream{
  public String getName(); // オーバーライドして使う
  public String howSweet(); // オーバーライドして使う
}

class VanillaIcecream extends Icecream {
  public String getName(){
    return 'バニラアイスクリーム';
  }
  public String howSweet(){
    return 'バニラ味';
  }
}


class GreenTeaIcecream extends Icecream {
  public String getName(){
    return '抹茶アイスクリーム';
  }
  public String howSweet(){
    return '抹茶味';
  }
}

class CashewNutsGreenTeaIcecream extends GreenTeaIcecream {
  // オーバーライド
  public String getName(){
    return 'カシューナッツ抹茶アイスクリーム';
  }
}

class CashewNutsVanillaIcecream extends VanillaIcecream {
  public String getName(){
    return 'カシューナッツバニラアイスクリーム';
  }
}

class CashewNutsToppingVanillaIcecream extends Icecream {
  private Icecream ice = null;
  public CashewNutsToppingIcecream(Icecream ice) {
    this.ice = ice;
  }
  public String getName() {
    String name = 'カシューナッツ';
    name += ice.getName();
    return name;
  }
  public String howSweet() {
    return ice.howSweet();
  }
}
