<?php

require_once ('Icecream.php');
require_once ('GreenTeaIcecream.php');
require_once ('VanillaIcecream.php');
require_once ('CashewNutsToppingIcecream.php');

// バニラアイスにカシューナッツをトッピング
Icecream ice1 = new CashewNutsToppingIcecream(new VanillaIcecream());

// 抹茶アイスにカシューナッツをトッピング
Icecream ice2 = new CashewNutsToppingIcecream(new GreenTeaIcecream());

// バニラアイスにスライスアーモンドをトッピング
Icecream ice3 = new SliceAlmondToppingIcecream(new CashewNutsToppingIcecream(new VanillaIcecream()));