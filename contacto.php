<?php include('header.php'); ?>

<div class="container my-5">
  <h2 class="text-center mb-4 animate__animated animate__fadeInDown">Contacto <i class='bx bx-envelope'></i></h2>
  <div class="row">
    <div class="col-md-6" data-aos="fade-right">
      <form>
        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre</label>
          <input type="text" class="form-control" id="nombre">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Correo electrónico</label>
          <input type="email" class="form-control" id="email">
        </div>
        <div class="mb-3">
          <label for="mensaje" class="form-label">Mensaje</label>
          <textarea class="form-control" id="mensaje" rows="4"></textarea>
        </div>
        <button type="submit" class="btn btn-warning" onclick="Swal.fire('Gracias','Tu mensaje ha sido enviado','success');return false;">Enviar</button>
      </form>
    </div>
    <div class="col-md-6" data-aos="fade-left">
      <img src="contacto.jpg" class="img-fluid rounded shadow" alt="Contacto">
    </div>
  </div>
</div>

<?php include('footer.php'); ?>
