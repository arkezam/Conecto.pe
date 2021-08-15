    <!-- carrusel 1 -->
    <main>
      <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner" style="height:60em; height:50vmax;">
          <div class="carousel-item active" data-bs-interval="5100">


            <img src="<?php echo base_url(); ?>/assets/img/slide4.jpeg" class="d-block w-100" style="height:50vmax;">

            <div class="container">
              <div class="carousel-caption text-end" style="color: #474747;" >
               <h1>Únete</h1>

                <p><a class="btn btn-lg btn-warning " href="https://api.whatsapp.com/send?phone=+51996970078"  >Llamanos!</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="5100">
            <img src="<?php echo base_url(); ?>/assets/img/slide2.png" class="d-block w-100" style="height:50vmax;">

          </div>
          <div class="carousel-item" data-bs-interval="5100">
            <img src="<?php echo base_url(); ?>/assets/img/slide4.png" class="d-block w-100" style="height:50vmax;">


            <div class="container" >
              <div class="carousel-caption text-start">
                <h1 >Correo: </h1>

                <p><a class="btn btn-lg btn-warning" href="mailto:atencionalcliente@conecto.pe">Enviar correo</a></p>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        </button>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="next">

        </button>
      </div>


      <!-- carrusel 2 
		
  <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10">


      <img src="<?php echo base_url(); ?>/assets/img/slide1.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
	  <h1>Another example headline.</h1>
            <p>Some representative placeholder content for the second slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="100">
      <img src="..." class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="100">
      <img src="..." class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">

  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">

  </button>
</div>
-->
      <!-- Marketing messaging and featurettes
  ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing" style="text-align: center; ">

        <!-- Three columns of text below the carousel -->

        <div class="row" style=" color:blueviolet; padding-top:30px;  ">

          <div class="col-12" style="text-align: center;">
            <h1>Planes Hogar</h1>
            <br>
          </div>
          <div class="col-lg-3" data-aos="flip-left" data-aos-duration="2000">
            <img src="<?php echo base_url(); ?>/assets/img/pl2.png" style="height: 200px;" >
            <h1>S/ 60.00 </h1>
            <p><a class="btn btn-warning" href="#">Lo Quiero! &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-3" data-aos="flip-left" data-aos-duration="2000">
            <img src="<?php echo base_url(); ?>/assets/img/pl3.png" style="height: 200px;">
            <h1>S/ 80.00 </h1>
            <p><a class="btn btn-primary" href="#">Lo Quiero! &raquo;</a></p>
          </div>
          <div class="col-lg-3" data-aos="flip-left" data-aos-duration="2000">
            <img src="<?php echo base_url(); ?>/assets/img/pl4.png" style="height: 200px;">
            <h1>S/ 100.00 </h1>
            <p><a class="btn btn-success" href="#">Lo Quiero! &raquo;</a></p>
          </div>
          <div class="col-lg-3" data-aos="flip-left" data-aos-duration="2000">
            <img src="<?php echo base_url(); ?>/assets/img/pl5.png" style="height: 200px;">
            <h1>S/ 140.00 </h1>
            <p><a class="btn btn-primary" href="#">Lo Quiero! &raquo;</a></p>
          </div>
        </div><!-- /.row -->
        <br><br>

        <div class="row" style="background-color: #800080; color:white; padding-top:30px; border-radius: 20px; " data-aos="fade-up"  data-aos-duration="2000">

          <div class="col-12" style="text-align: center;">
            <h1>Planes Empresa</h1>
            <br>
          </div>
          <div class="col-lg-4">
            <img src="<?php echo base_url(); ?>/assets/img/ple1.png" style="height: 200px;">
            <h1>S/ 100.00 </h1>
            <p><a class="btn btn-warning" href="#">Lo Quiero! &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img src="<?php echo base_url(); ?>/assets/img/ple20.png" style="height: 200px;">
            <h1>S/ 180.00 </h1>
            <p><a class="btn btn-primary" href="#">Lo Quiero! &raquo;</a></p>
          </div>
          <div class="col-lg-4">
            <img src="<?php echo base_url(); ?>/assets/img/ple30.png" style="height: 200px;">
            <h1>S/ 270.00 </h1>
            <p><a class="btn btn-success" href="#">Lo Quiero! &raquo;</a></p>
          </div>


          <!-- /.row -->

          <div class="col-12" style="text-align: center;">

            <br>
          </div>
          <div class="col-lg-4">
            <img src="<?php echo base_url(); ?>/assets/img/ple40.png" style="height: 200px;">
            <h1>S/ 360.00 </h1>
            <p><a class="btn btn-warning" href="#">Lo Quiero! &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img src="<?php echo base_url(); ?>/assets/img/ple50.png" style="height: 200px;">
            <h1>S/ 450.00 </h1>
            <p><a class="btn btn-primary" href="#">Lo Quiero! &raquo;</a></p>
          </div>
          <div class="col-lg-4">
            <img src="<?php echo base_url(); ?>/assets/img/ple60.png" style="height: 200px;">
            <h1>S/ 540.00 </h1>
            <p><a class="btn btn-success" href="#">Lo Quiero! &raquo;</a></p>
          </div>

        </div>
        <!-- /.row -->



        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7" >
            <h2 class="featurette-heading">#Ven, Únete Y Encuentra la velocidad que necesitas</h2>
            <p class="lead">Tenemos planes que se adaptan a tus necesidades, para hogar, oficina y clases virtuales,
               elige uno y se Parte Del Mundo Digital. Conecto, Te Conecta. </p>
          </div>
          <div class="col-md-5" data-aos="fade-up"  data-aos-duration="3000">
            <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="<?php echo base_url(); ?>/assets/img/card1.png" style="height: 5em;">

          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2" >
          <h2 class="featurette-heading">Usamos el Protocolo De Seguridad.</h2>
            <p class="lead">Cuida a los tuyos, utiliza nuestros números para contactarte con nosotros</p>
          </div>
          <div class="col-md-5 order-md-1" data-aos="fade-down"  data-aos-duration="3000">
            <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="<?php echo base_url(); ?>/assets/img/covid.jpg" style="height: 6em;">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette" >
          <div class="col-md-7">
           <h2 class="featurette-heading">Conecto.Pe</h2>
            <p class="lead"> Siempre Al Lado De Nuestros Clientes.</p>
            <p class="lead"> Llegamos a Puno y Juliaca, Internet Hogar y empresarial</p>
          </div>
          <div class="col-md-5"  data-aos="fade-down"  data-aos-duration="3000">
            <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="<?php echo base_url(); ?>/assets/img/logo2.jpeg" style="height: 6em;">

          </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

      </div><!-- /.container -->
