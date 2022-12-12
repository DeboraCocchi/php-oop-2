<?php

// Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
// - L’e-commerce vende **prodotti** per animali.
// - I prodotti sono categorizzati, le **categorie** sono Cani o Gatti.
// - I prodotti saranno oltre al **cibo**, anche **giochi**, **cucce**, etc.
// Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).


require_once './Models/Product.php';
require_once './Models/Category.php';
require_once './Models/Food.php';
require_once './Models/Toy.php';
require_once './Models/Accessory.php';

// food
$crocchettePolloG = new Food('Crocchette al pollo', 'Ultima', new Category('cat'),8, true, 'secco', 'pollo');
$crocchettePolloG->category->setIcon('cat');
$crocchettePolloG->setBarcode();
$crocchettePolloG->setImage('https://shop-cdn-m.mediazs.com/bilder/ultima/cat/adult/pollo/crocchette/per/gatti/7/400/1605610951013_1_7.jpg');


$crocchetteConiglioG = new Food('Crocchette al coniglio', 'Coshiba', new Category('cat'),8, false, 'secco', 'coniglio');
$crocchetteConiglioG->category->setIcon('cat');
$crocchetteConiglioG->setBarcode();
$crocchetteConiglioG->getImage();

// dump($crocchetteConiglioG);


$moussePesceG = new Food('Mousse al pesce azzurro', 'Purina', new Category('cat'),10,true, 'umido', 'pesce azzurro');
$moussePesceG->category->setIcon('cat');
$moussePesceG->setBarcode();
$moussePesceG->setImage('https://www.purinashop.it/media/catalog/product/cache/c4218f1997800f206b38e4323d8d1cf4/P/U/PURINA_PRO_PLAN_Adult_7__Gatto_Mousse_con_Tonno_85g_1_12171996_1.png');


$crocchettePolloC = new Food('Crocchette al pollo', 'Royal Canine', new Category('dog'),10,true, 'secco', 'pollo');
$crocchettePolloC->category->setIcon('dog');
$crocchettePolloC->setBarcode();
$crocchettePolloC->setImage('https://shop-cdn-m.mediazs.com/bilder/royal/canin/mini/adult/crocchette/per/cani/3/800/icon_topseller_1_2022_02_24t120049_096_3.jpg');

$crocchetteVitelloC = new Food('Crocchette al vitello', 'Royal Canine', new Category('dog'),10,false, 'secco', 'vitello e verdure');
$crocchetteVitelloC->category->setIcon('dog');
$crocchetteVitelloC->setBarcode();
$crocchetteVitelloC->setImage('https://shop-cdn-m.mediazs.com/bilder/royal/canin/medium/adult/crocchette/per/cani/4/800/icon_topseller_1_2022_02_24t120615_324_4.jpg');

$foodCollection=[$crocchettePolloG, $crocchetteConiglioG, $moussePesceG, $crocchettePolloC, $crocchetteVitelloC];

//toys

$pallinaSonoraG=new Toy('Pallina colorata con sonaglio', 'Trixie', new Category('cat'), 3, true, 'spugna', 'multicolor');
$pallinaSonoraG->category->setIcon('cat');
$pallinaSonoraG->setBarcode();
$pallinaSonoraG->setImage('https://lallohallo.com/wp-content/uploads/2022/07/SET-DI-PALLINE-ARCOBALENO-TRIXIE-1658153585.jpg');

$topolinoG=new Toy('Topolino sonoro', 'Paco', new Category('cat'), 5, true, 'gomma e peluche', 'grigio');
$topolinoG->category->setIcon('cat');
$topolinoG->setBarcode();
$topolinoG->setImage('https://shop-cdn-m.mediazs.com/bilder/topini/di/peluche/trixie/7/400/42535_pla_trixie_plueschmaus_grau_und_weiss_ret_01_7.jpg');

$pallinaSonoraC=new Toy('Pallina colorata con sonaglio', 'Hagen', new Category('dog'), 6, true, 'silicone', 'multicolor');
$pallinaSonoraC->category->setIcon('dog');
$pallinaSonoraC->setBarcode();
$pallinaSonoraC->setImage('https://tcdn.storeden.com/gallery/5f9b01525fb8e001494ddc4c/file.jpg');

$toys=[$pallinaSonoraC, $pallinaSonoraG, $topolinoG];


//accessori

$tiragraffiG=new Accessory('Tiragraffi a colonna', 'Paco',new Category('cat'),20, true, 'iuta e legno', '20cm x 20cm x 40cm');
$tiragraffiG->category->setIcon('cat');
$tiragraffiG->setBarcode();
$tiragraffiG->setImage('https://shop-cdn-m.mediazs.com/bilder/colonna/tiragraffi/olga/8/400/6_top_seller_1000x1000_8.jpg');

$lettieraAutopulG=new Accessory('Lettiera Autopulente', 'Paco',new Category('cat'),500, false, 'plastica rinforzata', '30cm x 50cm x 40cm');
$lettieraAutopulG->category->setIcon('cat');
$lettieraAutopulG->setBarcode();
$lettieraAutopulG->getImage();

$guinzaglioFissoC=new Accessory('Guinzaglio 1.5m', 'Paco', new Category('dog'),8,true,'stoffa e metallo','1,5 mt');
$guinzaglioFissoC->category->setIcon('dog');
$guinzaglioFissoC->setBarcode();
$guinzaglioFissoC->setImage('https://m.media-amazon.com/images/I/51fr1ONWQRL.__AC_SX300_SY300_QL70_ML2_.jpg');

$guinzaglioRegolabileC=new Accessory('Guinzaglio a fettuccia fino a 5m', 'Paco', new Category('dog'),15,true,'stoffa e plastica','5 mt');
$guinzaglioRegolabileC->category->setIcon('dog');
$guinzaglioRegolabileC->setBarcode();
$guinzaglioRegolabileC->setImage('https://shop-cdn-m.mediazs.com/bilder/guinzaglio/avvolgibile/a/fettuccia/flexi/xtreme/arancione/m/8/400/252396_flexi_xtreme_urtleine_orange_5m_hs_02_8.jpg');

$spazzolaC=new Accessory('Spazzola catturapeli', 'Paco', new Category('dog'),10,true,'metallo e bambù','16cm');
$spazzolaC->category->setIcon('dog');
$spazzolaC->setBarcode();
$spazzolaC->setImage('https://media.mediazs.com/bilder/9/140/1_252334_pla_kooa_zupfb_rste_aus_bambus_4_res_9.jpg');

$accessories=[$guinzaglioFissoC, $guinzaglioRegolabileC, $lettieraAutopulG, $spazzolaC, $tiragraffiG];

$products=[$crocchettePolloG, $crocchetteConiglioG, $moussePesceG, $crocchettePolloC, $crocchetteVitelloC,$guinzaglioFissoC, $guinzaglioRegolabileC, $lettieraAutopulG, $spazzolaC, $tiragraffiG, $pallinaSonoraC, $pallinaSonoraG, $topolinoG];
