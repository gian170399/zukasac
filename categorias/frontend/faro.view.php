    <?php include '../frontend/cabeceraCategoria.php'?>

            <div class="row">
                <div class="col">
                    <div class="py-4 border-bottom">
                        
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../index.php">Inicio</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Faros</li>
                        </ol>
                    </nav>
                        <h2 class="m-auto"><?php echo $titulo?></h2>
                        <!-- <h1 class="text-center">Productos</h1> -->
                    </div>
                </div>
            </div>
            <?php include '../frontend/cardCateg.php'?>
            
            <?php include '../frontend/pageforpageCateg.php'?>
        </main>
    </div>


    


   

    

    

    <!-- Logo de whatsapp flotante-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <a href="https://api.whatsapp.com/send?phone=51985368257&amp;text=Hola,%20me%20podria%20ayudar?%20,tengo%20una%20consulta." class="float" target="_blank">
    <i class="fa fa-whatsapp fa-2x my-float"></i>
    </a>
    
    
    <br>
    
    <!-- Load Facebook SDK for JavaScript -->
    <div class="fei">
      <div id="fb-root"></div>
        <script>
            window.fbAsyncInit = function() {
              FB.init({
                xfbml            : true,
                version          : 'v7.0'
              });
            };
    
            (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/es_ES/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
          }(document, 'script', 'facebook-jssdk'));</script>
    
          <!-- Your customer chat code -->
            <div class="fb-customerchat"
            attribution=setup_tool
            page_id="2006071546273734"
            theme_color="#0084ff"
            logged_in_greeting="Hola! En qué podemos ayudarte?"
            logged_out_greeting="Hola! En qué podemos ayudarte?">
            </div>
    </div>
    
    <?php include '../../footer/footer.view.php'?>      
    <script src="../js/jquery-3.4.1.min.js"></script>
	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>

    
</body>
</html>