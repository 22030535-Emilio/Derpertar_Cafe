<?php include('header.php'); ?>

<!-- Librerías extras -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"/>
<link href="https://cdn.jsdelivr.net/npm/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
  AOS.init({ duration: 1000 });
</script>

<div class="container my-5">
  <h2 class="text-center mb-4 animate__animated animate__fadeInDown">Nuestro Menú <i class='bx bx-coffee'></i></h2>
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <?php
    $menu = [
      ["Café Americano", "Clásico y aromático.", 30, "americano.jpg"],
      ["Capuchino", "Con espuma de leche y canela.", 40, "capuchino.jpg"],
      ["Latte Vainilla", "Dulce toque de vainilla natural.", 45, "latte_vainilla.png"],
      ["Frappé de Mocha", "Helado con chocolate.", 50, "frappe_mocha.jpg"],
      ["Té Chai", "Exótico y especiado.", 38, "te_chai.jpg"],
      ["Pan de Plátano", "Recién horneado cada día.", 25, "pan_platano.jpg"],
      ["Croissant de Mantequilla", "Perfecto para acompañar tu café.", 30, "croissant.jpg"],
      ["Cheesecake", "Suave y cremoso.", 45, "cheesecake.jpg"],
      ["Brownie de Nuez", "Chocolate y textura perfecta.", 35, "brownie.png"],
      ["Ensalada Fresca", "Ligera y saludable.", 55, "ensalada.jpg"],
      ["Sandwich Gourmet", "Jamón serrano, queso y pesto.", 60, "sandwich.jpg"],
      ["Smoothie Frutas", "Natural y refrescante.", 42, "smothie.jpg"],
    ];

    foreach ($menu as $item) {
      echo "
      <div class='col' data-aos='fade-up'>
        <div class='card h-100 shadow-lg border-0 animate__animated animate__fadeIn'>
          <img src='{$item[3]}' class='card-img-top' alt='{$item[0]}'>
          <div class='card-body text-center'>
            <h5 class='card-title fw-bold'>{$item[0]}</h5>
            <p class='card-text text-muted'>{$item[1]}</p>
            <p class='fw-bold text-success fs-5'>\${$item[2]} MXN</p>
            <button class='btn btn-warning btn-sm' onclick='pedido(\"{$item[0]}\", {$item[2]})'>Añadir</button>
          </div>
        </div>
      </div>";
    }
    ?>
  </div>
</div>

<?php include('footer.php'); ?>
<script>
function pedido(nombre, precio) {
  Swal.fire({
    title: '¡Pedido agregado!',
    html: `<strong>${nombre}</strong> por <span style="color:green;">$${precio} MXN</span>`,
    icon: 'success',
    confirmButtonText: 'Aceptar'
  });
}
</script>
