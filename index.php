<?php

class Prodotto{
    public $id;
    public $nome;
    public $prezzo;
    public $immagine;
    public $categoria;
    public $tipo;

    public function __construct($id,$nome,$prezzo,$immagine,$categoria,$tipo){
        $this->id = $id;
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->immagine = $immagine;
        $this->categoria = $categoria;
        $this->tipo = $tipo;
    }
}

class Categoria{
    public  $id;
    public  $nome;
    

    public function __construct($id,$nome){
        $this->id = $id;
        $this->nome = $nome;
    }
}

//creazione istanza categoria
$categoriaCani = new Categoria(1,'Cane');
$categoriaGatti = new Categoria(2,'Gatto');

//instanza Prodotti
$prodotti = [
    new Prodotto(1,'Cibo cani',20,"https://picsum.photos/id/237/200/300",$categoriaCani,'cibo'),
    new Prodotto(2,'Cibo gatti',18,"https://picsum.photos/id/237/200/300",$categoriaGatti,'cibo'),
    new Prodotto(3,'Cibo cani',12,"https://picsum.photos/id/237/200/300",$categoriaCani,'Palla'),
    new Prodotto(4,'Cibo gatti',10,"https://picsum.photos/id/237/200/300",$categoriaGatti,'Spago'),
];
var_dump($prodotti);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="row">
        <?php  foreach ($prodotti as $key => $elem) {?> 
        <div class="card" style="width: 18rem;">
            <img src="<?php echo $elem->immagine ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $elem->nome?></h5>
                <p class="card-text"><?php echo $elem->categoria->nome?></p>
                <p class="card-text"><?php echo $elem->prezzo?></p>
                <p class="card-text"><?php echo $elem->tipo?></p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        <?php } ?>
    </div>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>