<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tebs Technologies</title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
    />

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css"
    />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="./assets/css/style.css" />
    <script src="https://www.google.com/recaptcha/api.js?render=6Le8XEohAAAAAEFK-hcSl2viYQiGK1TB_cP0CAhv"></script>
    
  </head>
  
  <body id="home">
    <nav class="nav">
      <div class="container">
        <div class="d-flex align-items-center">
          <a href="#home" class="nav__logo d-inline-flex">
            <img class="img-fluid logo" src="images/tebs/logo.png" />
          </a>
          <div class="nav__menu d-md-flex align-items-center ml-auto">
            <a href="#home" class="nav__menu__item goToHome">Home</a>
            <a href="#about_us" class="nav__menu__item goToAboutUs">About us</a>
            <a href="#contact_us" class="nav__menu__item goTotebs"
              >Contact Us</a
            >
          </div>
          <div class="toggle-menu d-block d-md-none ml-auto">
            <span></span>
          </div>
        </div>
      </div>
    </nav>

    <section class="cover_1 d-md-none">
      <img
        class="img-fluid w-100 d-md-none"
        src="./images/tebs/products/product1-mini.png"
      />
    </section>
    <section class="cover_1 d-sm-none d-none d-md-block">
      <img class="img-fluid w-100" src="./images/tebs/products/product1.png" />
    </section>
    <section class="cover_1">
      <img class="img-fluid w-100" src="./images/tebs/products/product-2.gif" />
    </section>

    <section class="cover_4">
      <img class="img-fluid w-100" src="./images/tebs/products/product4.png" />
    </section>
    <section class="cover_5">
      <img class="img-fluid w-100" src="./images/tebs/products/product5.png" />
    </section>

    <section class="cover_6 banner-1-cover">
      <img
        class="img-fluid w-100 banner-1"
        src="./images/tebs/background.png"
      />
    </section>

    <section class="who-we-are" id="about_us">
      <div class="container">
        <h2>WHO WE ARE</h2>
        <p>
          Welcome to Tebs Technologies, where innovation meets precision in
          electronic design. We are a pioneering technology company dedicated to
          pushing the boundaries of electronic engineering. With a passion for
          cutting-edge solutions, we specialize in creating bespoke designs that
          redefine industry standards. At Tebs Technologies, we understand that
          every project is unique, requiring tailored approaches to achieve
          optimal results. Our team of expert engineers combines creativity with
          technical expertise to deliver solutions that exceed expectations.
          From concept to completion, we work closely with our clients to
          understand their needs and deliver innovative electronic designs that
          meet and surpass their requirements. With a commitment to excellence
          and a drive for innovation, we continue to shape the future of
          electronic design. Join us on the journey as we transform ideas into
          reality and empower businesses to thrive in an increasingly connected
          world.
        </p>
      </div>
    </section>

    <section class="partners">
      <div class="container">
        <h2 class="d-none d-md-block">Quality Components</h2>

        <div class="row">
          <div class="col-6 col-md-3">
            <div class="partners__item h-100" style="min-height: 270px">
              <img
                class="img-fluid"
                src="./images/tebs/component/Samsung-Logo.png"
              />
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="partners__item h-100" style="min-height: 270px">
              <img
                class="img-fluid"
                src="./images/tebs/component/LG_Chem_logo_english.png"
              />
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="partners__item h-100" style="min-height: 270px">
              <img
                class="img-fluid"
                src="./images/tebs/component/Panasonic_logo_Blue.png"
              />
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="partners__item h-100" style="min-height: 270px">
              <img
                class="img-fluid"
                src="./images/tebs/component/Tesla_logo.png"
              />
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="partners__item h-100" style="min-height: 270px">
              <img
                class="img-fluid"
                src="./images/tebs/component/Linde-Logo-1998.png"
              />
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="partners__item h-100" style="min-height: 270px">
              <img
                class="img-fluid"
                src="./images/tebs/component/Contemporary_Amperex_Tech.png"
              />
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="partners__item h-100" style="min-height: 270px">
              <img
                class="img-fluid"
                src="./images/tebs/component/Hyundai_Motor_Company_log.png"
              />
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="partners__item h-100" style="min-height: 270px">
              <img
                class="img-fluid"
                src="./images/tebs/component/Bosch-logo.svg.png"
              />
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="contact" id="contact_us">
      <div class="container">
        <div class="contact__social text-center">
          <h3>Contact us</h3>
          <p class="mb-5"><a href="tel:02034733316">0203 473 3316</a></p>
          <div class="d-flex justify-content-center">
            <form class="col-9 text-left" action="./contact.php" method="GET" >
            <input type="hidden" name="token" class="token" >

              <div class="row">
                <div class="form-group col">
                  <label for="exampleFormControlInput1" class="text-white"
                    >Name</label
                  >
                  
                  <input class="form-control" type="text" name="name" required />
                </div>
                <div class="form-group col">
                  <label for="exampleFormControlInput1" class="text-white"
                    >Email</label
                  >
                  <input
                    type="email"
                    class="form-control"
                    name="email"
                    required
                  />
                </div>
                
              </div>

              <div class="row">
              <div class="form-group col">
                  <label for="exampleFormControlInput1" class="text-white"
                    >Phone</label
                  >
                  
                  <input class="form-control" type="text" name="phone" required />
                </div>
              <div class="form-group col">
                <label for="exampleFormControlTextarea1" class="text-white"
                  >Message</label
                >
                <textarea
                  class="form-control"
                  id="exampleFormControlTextarea1"
                  rows="1"
                  name="message"
                  required
                ></textarea>
              </div>
                
              </div>

              
              <div class="col-12 text-center mt-5">
                <input
                  type="submit"
                  class="btn btn-light pl-5 pr-5"
                  value="Send"
                />
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <footer class="text-white text-center">
      &copy; Tebs.co.uk all right reserved.
    </footer>
    
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="./assets/scripts/script.js"></script>
    <script>
    jQuery(document).ready(function($) {
        grecaptcha.ready(function() {
            grecaptcha.execute('6Le8XEohAAAAAEFK-hcSl2viYQiGK1TB_cP0CAhv', {
                action: 'submit'
            }).then(function(token) {
                //var response = document.getElementsByClassName('token');
                var response = $('.token');
                response.val(token);

            });
        });

        function captchaReload() {
            grecaptcha.execute('6Le8XEohAAAAAEFK-hcSl2viYQiGK1TB_cP0CAhv', {
                action: 'submit'
            }).then(function(token) {
                //var response = document.getElementsByClassName('token');
                var response = $('.token');
                response.val(token);

            });
        }

        $('.next-butto').click(function() {
            captchaReload();
        });


    });
</script>
<style>
    .grecaptcha-badge {
        visibility: hidden;
    }
</style>
<?php

// Check if the "success" session variable is set
if (isset($_SESSION['success'])) {
  ?>
                  <script>
                jQuery(document).ready(function($) {
                  Swal.fire({
                    title: "Message Send!",
                    text: "We'll get back to you as soon as possible.",
                    icon: "success"
  });


                });
            </script>
                    <?php

  // Unset or clear the session variable to avoid showing the message again
  //unset($_SESSION['success']);
}
?>
  </body>
</html>
