Oggi pomeriggio provate ad immaginare alcune classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da ///acquistare e degli utenti che fanno shopping.Strutturare le classi gestendo l’ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.Eseguire poi degli output istanziando oggetti delle varie classi.

<?php

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

$book = new Book ('CUJO','Stephen King',15);

echo 'Prezzo scontato:' . $book->getSales(10);

?>