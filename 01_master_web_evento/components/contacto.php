<section id="contacto" class="section-bg">

    <div class="container" data-aos="fade-up">
        <div class="section-header">
            <h2>Contactos</h2>
            <p>Dudas o consultas</p>
        </div>
        <div class="row contacto-info">
            <div class="col-md-4">
                <div class="contacto-address">
                    <i class="bx bx-map"></i>
                    <h3>Dirección</h3>
                    <address>NNNNNNNNNNNNNNNNNN</address>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contacto-phone">
                    <i class="bx bx-mobile"></i>
                    <h3>Numero de Celular</h3>
                    <p>000 000 000</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contacto-email">
                    <i class="bx bx-envelope"></i>
                    <h3>Email</h3>
                    <p>nombre_congreso@numero.com</p>
                </div>
            </div>
        </div>

        <div class="formulario">
            <form class="row g-3 needs-validation" novalidate>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="cliente_nombre" placeholder="Su nombre" required>
                    <div class="invalid-feedback">
                        Por favor, introduzca al menos 4 caracteres
                    </div>
                </div>
                <div class="col-md-6">
                    <input type="email" class="form-control" id="cliente_correo" placeholder="Su correo electrónico"
                        required>
                    <div class="invalid-feedback">
                        Por favor, introduzca una dirección de correo electrónico válida
                    </div>
                </div>

                <div class="col-md-12">
                    <input type="text" class="form-control" id="cliente_asunto" placeholder="Asunto" required>
                    <div class="invalid-feedback">
                        Por favor, introduzca al menos 8 caracteres de asunto
                    </div>
                </div>

                <div class="col-md-12">
                    <textarea class="form-control" name="" id="cliente_mensaje" rows="5" placeholder="Mensaje"
                        required></textarea>
                    <div class="invalid-feedback">
                        Por favor, escriba algo para nosotros
                    </div>
                </div>

                <div class="col-12 text-center">
                    <button class="btn btn-primary" type="submit">Enviar mensaje</button>
                </div>

            </form>
        </div>

    </div>
</section>