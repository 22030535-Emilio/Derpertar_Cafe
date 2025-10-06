<?php include('header.php'); ?>

<div class="container my-5">
  <h2 class="text-center mb-4 animate__animated animate__fadeInDown">Galería <i class='bx bx-image'></i></h2>
  <div class="row g-4">
    <?php
    $imagenes = ["interior.jpg","interior2.jpg","interior3.jpg","interior4.jpg","interior5.jpg","interior6.jpg","interior7.jpg","interior8.jpg","interior9.jpg",];
    foreach ($imagenes as $img) {
      echo "
      <div class='col-md-4' data-aos='zoom-in'>
        <div class='card shadow-lg border-0'>
          <img src='{$img}' class='card-img-top' alt='Imagen'>
        </div>
      </div>";
    }
    ?>
  </div>
</div>

<?php include('footer.php'); ?>
