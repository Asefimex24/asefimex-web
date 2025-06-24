<section id="about" class="contact section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Solicitud de Crédito</h2>
            <p>Solicita tu Crédito Aquí</p>
        </div>

        <div class="row ">
            <div class="col-lg-6">
                <p>
                    A continuación, llena los datos requeridos para iniciar el trámite de tu crédito, recuerda que después de enviar la solicitud
                    uno de nuestros ejecutivos se pondrá en contacto contigo para continuar el proceso.
                </p>
                <p>
                    Recomendaciones
                </p>
                <ul>
                    <li><i class="ri-check-double-line"></i> Escribir tu Nombre correctamente</li>
                    <li><i class="ri-check-double-line"></i> Deberás escribir correctamente tu número de telefono para poder localizarte</li>

                </ul>
            </div>
            <div class="col-lg-6">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="form-group mt-3">
                        <label for="banco">En que estado radicas</label>
                        <select class="form-control" id="estado" name="bank" placeholder="Estado de Residencia">
                            <option value="1">Chiapas</option>
                            <option value="2">Tabasco</option>
                            <option value="3">Campeche</option>
                            <option value="4">Oaxaca</option>
                            <option value="5">Yucatan</option>
                            <option value="6">Quintana Roo</option>
                        </select>
                    </div> <br>

                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Escribe tu nombre" required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="text" class="form-control" name="email" id="email" placeholder="Ingrese su Teléfono" required>
                        </div>
                    </div>

                    <div class="form-group mt-3">
                        <label for="banco">Que tipo de Unidad te interesa</label>
                        <select class="form-control" id="estado" name="bank" placeholder="Estado de Residencia">
                            <option value="1">Vehículo Comercial de Pasajeros</option>
                            <option value="2">Vehículo Comercial de Carga</option>
                        </select>
                    </div>
                    <div class="form-group mt-3">
                        <label for="banco">En que horario podemos agendar una llamada?:</label>
                        <select class="form-control" id="estado" name="bank" placeholder="Estado de Residencia">
                            <option value="1">09:00 am - 11:00 am</option>
                            <option value="1">11:00 am - 01:00 pm</option>
                            <option value="1">02:00 pm - 04:00 pm</option>
                            <option value="1">04:00 pm - 05:00 pm</option>
                        </select>
                    </div>
                    <div class="form-group mt-3"><button type="submit">Enviar Solicitud</button></div>
                </form>
            </div>


        </div>

    </div>

</section>