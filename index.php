<?php
if (is_file('../debugger.php')) {
  include '../debugger.php';
}

include './db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous' />
  <link rel="stylesheet" href="./css/style.css">
  <title>Boolean Pet Shop</title>
  <link rel="icon" type="image/png" href="./assets/pet.png">
</head>
<body>
  <header>
    <nav class="navbar bg-light">
      <div class="container-fluid">
        <a href="#">
          <img src="./assets/pet.png" alt="Logo" width="45" height="45" class="d-inline-block align-text-top">
        </a>
        <h2>Boolean Pet Shop</h2>
      </div>
    </nav>
  </header>
  <main>
    <div class="container-fluid">
      <div class="row justify-content-evenly">
        <?php  foreach($products as $product):  ?>
          <div class="card p-1 col-2 dc-card">
            <h4 class="d-flex justify-content-between align-items-center">
            <div class="dc-icon">
                <img src="<?php  echo $product->category->icon ?>" alt="<?php  echo $product->name ?>">
            </div>
            <?php  echo get_class($product) ?></h4>
            <img src="<?php  echo $product->image ?>" class="card-img-top" alt="...">
            <div class="card-body text-center p-1">
              <h5 class="card-title"><?php  echo $product->name ?></h5>
              <h6 class="dc-green"><?php  echo $product->brand ?></h6>
              <div class="details">
              
                <?php if(get_class($product)=='Food'): ?>
                  <p> <?php echo "<strong>Cibo: </strong>$product->format || <strong>Gusto: </strong>$product->flavour"?></p>
                <?php elseif(get_class($product)=='Toy'): ?>
                  <p><?php echo "<strong>Materiale: </strong>$product->material || <strong>Colore: </strong>$product->color"?></p>
                <?php else: ?>
                  <p><?php echo "<strong>Materiali: </strong>$product->material || <strong>Dimensioni: </strong>$product->size"?></p>
                <?php endif; ?>
              
              </div>
              <p style="color:grey;" class="mb-0"><strong><?php  echo $product->price ?>€</strong></p>
              <a class="dc-green" href="#">Scopri il prodotto >></a>
              <?php if($product->is_available): ?>
                <div class="available triangle p-0"></div>
                <div>Disponibile</div>
              <?php else: ?>
                <div class="not-available triangle"></div>
                <div>Non<br>disponibile</div>
                <?php endif; ?>
            </div>
            
          </div>
        <?php endforeach; ?>
        
      </div>
    </div>
  </main>
</body>
</html>