<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="src/styles/styles.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
  <title>AppExport</title>
</head>

<body>
  <header>
    <a href="#" class="logo">AppExport</a>
    <ul>
      <li><a href="#Home">Inicio</a></li>
      <li><a href="#about">AppExport</a></li>
      <li><a href="#tools">Herramientas</a></li>
      <li><a href="#contact">Contacto</a></li>
      <li><a href="view/login" class="nav-login">Iniciar</a></li>
    </ul>
  </header>
  <section class="banner" id="Home">
    <div class="start-banner">
      <p style="
            line-height: 1.4em;
            text-align: center;
            font-size: 17px;
            font-weight: 400;
          ">
        <span style="letter-spacing: 0.16em">LA SEGURIDAD DE SABER QUE PUEDES HACER LAS COSAS BIEN CON</span>
      </p>
    </div>
    <div class="sectionOneAppExport">
      <h3 style="          
            line-height: 1em;
            text-align: center;
            font-size: 120px;
            text-transform: uppercase;
            font-weight: bold;
          ">
        <span style="font-size: 105px; letter-spacing: 10px">AppExport</span>
      </h3>
    </div>
    <div>
      <button id="registerInit" style="
            cursor: pointer;
            font-size: 20px;
            text-transform: uppercase;
            padding: 10px 15px;
            color: #fff;
            background: #000;
            border-color: #000;
            border-radius: 25px;
          " onmouseover="this.style.color='black';this.style.background='#c79f8b';this.style.transition='0.25s';" onmouseout="this.style.color='white';this.style.background='black';">
        Registrate
      </button>
    </div>
  </section>
  <section class="AppExport" id="about">
    <div class="sectionOne">
      <h3>¿Qué es AppExport?</h3>
      <p>
        AppExport es un aplicativo web diseñado para determinar el potencial
        exportador que tienen las empresas. Para determinar dicho potencial se
        requiere seguir los siguientes procesos:
        <br />
        <br />
      </p>

      <ul>
        <li>Equipamiento de la empresa</li>
        <li>Análisiss del producto</li>
        <li>Marketing</li>
        <li>Situación financiera</li>
        <li>​Recursos humanos disponibles y necesarios</li>
      </ul>
      <button id="leermas">Leer mas</button>
    </div>
    <div class="img">
      <img src="src/styles/img/UGgx61V.png" />
    </div>
  </section>
  <section class="sectionTools" id="tools">
    <div class="probando">
      <h3>Herramientas</h3>
    </div>
    <div class="tools">
      <div class="container">
        <div class="card">
          <div class="img8x">
            <img src="src/styles/img/45EOvnN.png" />
          </div>
          <h3>Estrategias</h3>
          <div class="content">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas,
              omnis adipisci consequatur et at perferendis temporibus
              blanditiis dolorum quis dolor.
            </p>
          </div>
        </div>
        <div class="card">
          <div class="img8x">
            <img src="src/styles/img/bqiZS2U.png" />
          </div>
          <h3>Innovacion</h3>
          <div class="content">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas,
              omnis adipisci consequatur et at perferendis temporibus
              blanditiis dolorum quis dolor.
            </p>
          </div>
        </div>
        <div class="card">
          <div class="img8x">
            <img src="src/styles/img/Z3XMXnD.png" />
          </div>
          <h3>Asesorias</h3>
          <div class="content">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas,
              omnis adipisci consequatur et at perferendis temporibus
              blanditiis dolorum quis dolor.
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="buttonTools">
      <button id="registerTools">
        Registrate
      </button>
  </section>
  </div>
  <div class="container-footer" id="contact">
    <footer>
      <div class="footer-container">
        <div class="left-col">
          <div class="social-media">
            <a href="https://www.facebook.com/nakama.jewelry" target="_blank"><i class="fa fa-facebook-square"></i></a>
            <a href="https://twitter.com/Yuceno2000Yuli" target="_blank"><i class="fa fa-twitter-square"></i></a>
            <a href="https://www.instagram.com/nakama.jewelry/" target="_blank"><i class="fa fa-instagram" target="_blank"></i></a>
            <a href="https://api.whatsapp.com/message/56GRRG42RJ2DP1" target="_blank"><i class="fa fa-whatsapp"></i></a>
          </div>
          <p class="rights-text">© 2021 AppExport - Diseñado y desarrollado por AppExport</p>
        </div>

        <div class="right-col">
          <h1>¡Mantente activo!</h1>
          <div class="border"></div>
          <p>Escribe tu correo electrónico para que sepas sobre nuestras promociones</p>
          <form action="" class="newsletter-form">
            <input type="text" class="txtb" placeholder="Correo electrónico">
            <input type="submit" class="btn" value="Enviar">
          </form>
        </div>
      </div>
    </footer>
  </div>
  <script>
    let registerInit = document.querySelector("#registerInit");
    registerInit.addEventListener('click', (e) => {
      window.location.href = 'view/login';
    })
    document.querySelector("#leermas").addEventListener('click', (e) => {
      window.location.href = 'view/login';
    })
    document.querySelector("#registerTools").addEventListener('click', (e) => {
      window.location.href = 'view/login';
    })
  </script>
  <script src="src/function/index.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15.0.0/dist/smooth-scroll.polyfills.min.js"></script>
</body>

</html>