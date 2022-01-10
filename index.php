Oggi pomeriggio provate ad immaginare alcune classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.Strutturare le classi gestendo l’ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.Eseguire poi degli output istanziando oggetti delle varie classi.

<?php

#classe padre principale
class Book {
    public $title;
    public $author;
    public $price;

//metodi

public function __construct($title, $author, $price){
    $this->title = $title;
    $this->author = $author;
    $this->price = $price;
}

public function getSales($sale) {
    $discount = $this->price -($this-> price * $sale / 100);
    return number_format($discount, 2);

}
}

#classe figlio/eredito
class LonelyPlanet extends Book{
    //proprietà
    public $lastUpdate;
     
    //costruttore richiamando parametri padre più quelli aggiunti nel figlio
    public function __construct($title,$author,$price,$lastUpdate) {

        parent::__construct($title,$author,$price);

        $this->lastUpdate = $lastUpdate;
    }
    
    #sovrascrittura parziale per le guide turistiche
    public function getSales($sale) {
        $discount = parent::getSales($sale);

        return $discount - 3;
    }

}

class Comics extends Book{

    public $genre;

    public function __construct($title,$author,$price,$genre) {

        parent::__construct($title,$author,$price);

        $this->genre = $genre;
    }

    public function getSales($sale) {
        $discount = parent::getSales($sale);

        return $discount - 1.5;
    }
}

//instanza da padre
$book = new Book ('CUJO','Stephen King',15);
var_dump($book);

echo 'Prezzo scontato:' . $book->getSales(10);

//instanza da figlio/eredito
$Japan = new LonelyPlanet('Giappone','LonelyPlanet', 34, 2018);
var_dump($Japan);
echo "Prezzo scontato LonelyPlanet:" . $Japan->getSales(25) . '<br>';

$Vietnam = new LonelyPlanet('Vietnam','LonelyPlanet',31,2020);

echo "Prezzo scontato LonelyPlanet:" . $Vietnam->getSales(25);

$Manga = new Comics('CITY HUNTER','Tsukasa Ohio',15,'Manga');
var_dump($Manga);




?>