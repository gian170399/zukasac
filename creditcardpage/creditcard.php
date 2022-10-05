<!DOCTYPE html>
<html lang="es">
<head>
meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../footer/footer.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/pagos.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inconsolata&amp;family=Open+Sans&amp;display=swap">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <script src="https://use.fontawesome.com/8ed3a36f97.js"></script>
    <style>
        .contacto .row .enviar{
            border-radius: 50px;
            padding:15px 20px;
            font-size: 18px;
        }
        .contacto .row .input{
            border-radius: 15px;
        }
        .titulo{
            font-family: 'Bree Serif', serif;   
        }
    </style>
    <title>ZUKA SAC-Modificar Productos</title>
</head>
   
    
<body>
    <header>
    <nav class="navbar fixed-top navbar-expand-lg navbar bg scrolling-navbar"  style="background-color: #FFFFFF;">

<div class="container">
    <a href="../index.php" class="navbar-brand" style="color: black"> ZUKA S.A.C.</a>

    <button class="navbar-toggler" 
    type="button" data-toggle="collapse" 
    data-target="#navegacion" 
    aria-expanded="false" 
    aria-label="Alternar Menu">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" 
    id="navegacion">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a href="../index.php" class="nav-link" style="color: black">Inicio <i class="fa fa-refresh fa-spin fa-fw"></i></a>
            </li>
            <li class="nav-item dropdown">
                <a href="#"  style="color: black"
                class="nav-link dropdown-toggle"
                id="navbarDropdown"
                data-toggle="dropdown">
                    Categoria
                </a>
                <div class="dropdown-menu"
                aria-labelledby="navbarDropdown">
                    <a href="../categorias/backend/faro.php" class="dropdown-item">Faros</a>
                    <a href="../categorias/backend/neblinero.php" class="dropdown-item">Neblineros</a>
                    <a href="../categorias/backend/foco.php" class="dropdown-item">Focos</a>
                    <a href="../categorias/backend/aro.php" class="dropdown-item">Aros</a>
                    <a href="../categorias/backend/equipo.php" class="dropdown-item">Equipos</a>
                    <a href="../categorias/backend/parlante.php" class="dropdown-item">Parlantes</a>
                    <a href="../categorias/backend/piso.php" class="dropdown-item">Pisos</a>
                    <a href="../categorias/backend/asiento.php" class="dropdown-item">Asientos</a>
                    <a href="../categorias/backend/sirena.php" class="dropdown-item">Sirenas</a>
                    <a href="../categorias/backend/accesorio.php" class="dropdown-item">Accesorios</a>
                    <!-- <a href="../404/404.php" class="dropdown-item">Accesorios</a> -->
                </div>
            </li>
        </ul>

        <form action="../archivos/buscar.php" class="form-inline my-2 my-lg-0" name="busqueda" method="get">
            <input type="text" class="form-control mr-sm-2"type="search" placeholder="Buscar" name="busqueda">
            <button class="btn btn-primary my-sm-0 my-2" type="submit"><i class="fa fa-search" aria-hidden="true"></i> Buscar</button>
        </form>
        
        
        <a href="../VerCarta.php" class="btn btn-outline-dark ml-lg-5 "><i class="fas fa-shopping-cart"></i> Carrito</a>

        <a href="../admin/login.php" class="btn btn-outline-success ml-lg-5 "><i class="fa fa-user" aria-hidden="true"></i> Mi cuenta</a>
    </div>
</div>
</nav>
    </header>

<div class="checkout" style="margin-top: 300px;">
    <div class="credit-card-box">
      <div class="flip">
        <div class="front">
          <div class="chip"></div>
          <div class="logo">
            <svg version="1.1" id="visa" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 width="47.834px" height="47.834px" viewBox="0 0 47.834 47.834" style="enable-background:new 0 0 47.834 47.834;">
              <g>
                <g>
                  <path d="M44.688,16.814h-3.004c-0.933,0-1.627,0.254-2.037,1.184l-5.773,13.074h4.083c0,0,0.666-1.758,0.817-2.143
                           c0.447,0,4.414,0.006,4.979,0.006c0.116,0.498,0.474,2.137,0.474,2.137h3.607L44.688,16.814z M39.893,26.01
                           c0.32-0.819,1.549-3.987,1.549-3.987c-0.021,0.039,0.317-0.825,0.518-1.362l0.262,1.23c0,0,0.745,3.406,0.901,4.119H39.893z
                           M34.146,26.404c-0.028,2.963-2.684,4.875-6.771,4.875c-1.743-0.018-3.422-0.361-4.332-0.76l0.547-3.193l0.501,0.228
                           c1.277,0.532,2.104,0.747,3.661,0.747c1.117,0,2.313-0.438,2.325-1.393c0.007-0.625-0.501-1.07-2.016-1.77
                           c-1.476-0.683-3.43-1.827-3.405-3.876c0.021-2.773,2.729-4.708,6.571-4.708c1.506,0,2.713,0.31,3.483,0.599l-0.526,3.092
                           l-0.351-0.165c-0.716-0.288-1.638-0.566-2.91-0.546c-1.522,0-2.228,0.634-2.228,1.227c-0.008,0.668,0.824,1.108,2.184,1.77
                           C33.126,23.546,34.163,24.783,34.146,26.404z M0,16.962l0.05-0.286h6.028c0.813,0.031,1.468,0.29,1.694,1.159l1.311,6.304
                           C7.795,20.842,4.691,18.099,0,16.962z M17.581,16.812l-6.123,14.239l-4.114,0.007L3.862,19.161
                           c2.503,1.602,4.635,4.144,5.386,5.914l0.406,1.469l3.808-9.729L17.581,16.812L17.581,16.812z M19.153,16.8h3.89L20.61,31.066
                           h-3.888L19.153,16.8z"/>
                </g>
              </g>
            </svg>
          </div>
          <div class="number"></div>
          <div class="card-holder">
            <label>Card holder</label>
            <div></div>
          </div>
          <div class="card-expiration-date">
            <label>Expires</label>
            <div></div>
          </div>
        </div>
        <div class="back">
          <div class="strip"></div>
          <div class="logo">
            <svg version="1.1" id="visa" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 width="47.834px" height="47.834px" viewBox="0 0 47.834 47.834" style="enable-background:new 0 0 47.834 47.834;">
              <g>
                <g>
                  <path d="M44.688,16.814h-3.004c-0.933,0-1.627,0.254-2.037,1.184l-5.773,13.074h4.083c0,0,0.666-1.758,0.817-2.143
                           c0.447,0,4.414,0.006,4.979,0.006c0.116,0.498,0.474,2.137,0.474,2.137h3.607L44.688,16.814z M39.893,26.01
                           c0.32-0.819,1.549-3.987,1.549-3.987c-0.021,0.039,0.317-0.825,0.518-1.362l0.262,1.23c0,0,0.745,3.406,0.901,4.119H39.893z
                           M34.146,26.404c-0.028,2.963-2.684,4.875-6.771,4.875c-1.743-0.018-3.422-0.361-4.332-0.76l0.547-3.193l0.501,0.228
                           c1.277,0.532,2.104,0.747,3.661,0.747c1.117,0,2.313-0.438,2.325-1.393c0.007-0.625-0.501-1.07-2.016-1.77
                           c-1.476-0.683-3.43-1.827-3.405-3.876c0.021-2.773,2.729-4.708,6.571-4.708c1.506,0,2.713,0.31,3.483,0.599l-0.526,3.092
                           l-0.351-0.165c-0.716-0.288-1.638-0.566-2.91-0.546c-1.522,0-2.228,0.634-2.228,1.227c-0.008,0.668,0.824,1.108,2.184,1.77
                           C33.126,23.546,34.163,24.783,34.146,26.404z M0,16.962l0.05-0.286h6.028c0.813,0.031,1.468,0.29,1.694,1.159l1.311,6.304
                           C7.795,20.842,4.691,18.099,0,16.962z M17.581,16.812l-6.123,14.239l-4.114,0.007L3.862,19.161
                           c2.503,1.602,4.635,4.144,5.386,5.914l0.406,1.469l3.808-9.729L17.581,16.812L17.581,16.812z M19.153,16.8h3.89L20.61,31.066
                           h-3.888L19.153,16.8z"/>
                </g>
              </g>
            </svg>
  
          </div>
          <div class="ccv">
            <label>CCV</label>
            <div></div>
          </div>
        </div>
      </div>
    </div>
    <form class="form" autocomplete="off" novalidate>
      <fieldset>
        <label for="card-number">Card Number</label>
        <input type="num" id="card-number" class="input-cart-number" maxlength="4" />
        <input type="num" id="card-number-1" class="input-cart-number" maxlength="4" />
        <input type="num" id="card-number-2" class="input-cart-number" maxlength="4" />
        <input type="num" id="card-number-3" class="input-cart-number" maxlength="4" />
      </fieldset>
      <fieldset>
        <label for="card-holder">Card holder</label>
        <input type="text" id="card-holder" />
      </fieldset>
      <fieldset class="fieldset-expiration">
        <label for="card-expiration-month">Expiration date</label>
        <div class="select">
          <select id="card-expiration-month">
            <option></option>
            <option>01</option>
            <option>02</option>
            <option>03</option>
            <option>04</option>
            <option>05</option>
            <option>06</option>
            <option>07</option>
            <option>08</option>
            <option>09</option>
            <option>10</option>
            <option>11</option>
            <option>12</option>
          </select>
        </div>
        <div class="select">
          <select id="card-expiration-year">
            <option>2022</option>
            <option>2023</option>
            <option>2024</option>
            <option>2025</option>
            <option>2026</option>
            <option>2027</option>
            <option>2028</option>
          </select>
        </div>
      </fieldset>
      <fieldset class="fieldset-ccv">
        <label for="card-ccv">CCV</label>
        <input type="text" id="card-ccv" maxlength="3" />
      </fieldset>
      <br>
      <br>
      <br>
      <br>
      <br>
      <!-- <button href="AccionCarta.php?action=placeOrder" class="btn"><i class="fa fa-lock"></i> submit</button> -->
      <!-- <a href="../AccionCarta.php?action=placeOrder" class="btn btn-success orderBtn">Realizar pedido <i class="glyphicon glyphicon-menu-right"></i></a> -->
      <div class="buy">
        <i style="margin-right:10px;" class="fa fa-check" aria-hidden="true"></i>
        <span>Proceder Pago</span>
          <a href="../AccionCarta.php?action=placeOrder">
          <div class="download"></div>
          </a>
      </div>
    </form>
  </div>

  <script type="creditcard.js"></script>
  <script src="../js/pagos.js"></script>
</body>
</html>