<?php
class View
{	
    private $navItems; //Todas mis vistas van a tener un menú
    public function __construct($navItems){
        $this->navItems = $navItems;
    }
    public function printFullHTML(){
        $content = $this->getHead();
        $content .= $this->getMain();
        $content .= $this->getFoot();
        echo $content;   
    }
    private function getHead(){ //Este html podría también ser recuperado de plantillas en fichero .html presentes en el sistema de ficheros...
        return '<html lang="es">
                    <head>
                        <title>Adoptemus</title>
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
                        <script src="https://kit.fontawesome.com/ad8a05d601.js" crossorigin="anonymous"></script>
                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                        <link rel="preconnect" href="https://fonts.googleapis.com">
						<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
						<link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet"> 
                        <link rel="stylesheet" href="css/style.css">
                        <link rel="stylesheet" href="css/sliderInicio.css">
                        <link rel="stylesheet" href="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.3.0/css/ol.css" type="text/css">
                        <link rel="icon" href="imagenes/icono.png">
                    </head>
                    <body>
                       
                        <nav><span><a href="index.php" title="Inicio" id = "title" role="heading" aria-level="1">ADOPTEMUS <img src=imagenes/icono.png width=50px heigth=50px alt="Adoptemus Logo" style="margin-bottom:-10px"></a></span>'.$this->getPrincipalMenu().'</nav>
                        ';
    }
    private function getPrincipalMenu(){
        $menu = '<ul id="navBar">';
        
        foreach($this->navItems as $element){
            $menu .= '<li class="navBarLi"><a  class="navBarLi" href="'.$element->link.'">'.$element->title.'</a></li>';
        }
        $menu .= "</ul>";
        return $menu;
    }
    protected function getMain(){
        return '<div class="main" role="heading" aria-level="1">
					<h2>Adopta 
					una sonrisa</h2>
					<img id="portada" src="imagenes/inicio.jpeg" alt="Inicio Picture"><br>
					En construcción...
				</div>';
    }
    private function getFoot(){
        return '  <script src="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.3.0/build/ol.js"></script>

                <script
 src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
  integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI="
  crossorigin="anonymous"></script>
                <script type="text/javascript" src="js/contacto.js"></script>
                <script type="text/javascript" src="js/comoAdoptar.js"></script>
                <script type="text/javascript" src="js/animales.js"></script>


                    <script type="text/javascript" src="js/script.js"></script>

                </body>
                <footer id="foot"> 
					<span id="copyright">2022 &copy Ainhoa Quintana, Ander Flores & Chrysoula Oikonomou</span>     

                </footer>
                </html>
                ';                    
    }
}


class IndexView extends View{   
    public function __construct($navItems){
        parent::__construct($navItems);
    }
    protected function getMain(){
        return ' <button type="button" class="accessibilityBtn" aria-label="accessibility button"><i class="fa-solid fa-universal-access"></i></button>
        <div class="contentAcc">
            <button type="button" id="contrastBtn" onclick="contrastClicked(1)"><i class="fa-solid fa-circle-half-stroke"></i> Contrast</button>
            <button type="button" id="textZoomBtn" onclick="zoomClicked(1)"><i class="fa-solid fa-text-height"></i> Text Size</button>
            <button type="button" id="resetBtn" onclick="resetClicked(1)"><i class="fa-solid fa-arrow-rotate-left"></i> Reset</button>
        </div>

        <div class="slider-container" aria-label="slider container">
            <div class="slider">
                <div class="slides" aria-label="slides">
                    <div id="slides__1" class="slide" >
                        <picture>
                            <source media="(max-width:768px)" srcset="imagenes/adoptarMob.jpg" alt="adoptar mobile version">
                            <img src="imagenes/adoptar.jpg" alt="Imagen Adoptar">
                        </picture>
                        <div id="centroSlide">
                            <span class="slide__text" role="heading" aria-level="2">ADOPTA UNA SONRISA</span>
                            <a href="adoptarPageController.php"><button class="botonSlide">ADOPTAR</button></a>                       
                        </div>    
                        <a class="slide__prev" href="#slides__5" title="Anterior"></a>
                        <a class="slide__next" href="#slides__2" title="Siguiente"></a>
                    </div>
                    <div id="slides__2" class="slide" >
                        <picture>
                            <source media="(max-width:768px)" srcset="imagenes/comoadoptarMob.jpg" alt="como adoptar mobile version">
                            <img src="imagenes/comoAdoptar.jpg" alt="Imagen Cómo Adoptar">
                        </picture>
                        <div id="centroSlide">
                            <span class="slide__text" role="heading" aria-level="2">¿CÓMO LO HAGO?</span>
                            <a href="comoadoptarPageController.php"><button class="botonSlide">COMO ADOPTAR</button></a>                       
                        </div>    
                        <a class="slide__prev" href="#slides__1" title="Anterior"></a>
                        <a class="slide__next" href="#slides__3" title="Siguiente"></a>
                    </div>
                    <div id="slides__3" class="slide" >
                        <picture>
                            <source media="(max-width:768px)" srcset="imagenes/serviciosOriginal.jpg" alt="Servicios image mobile version">
                            <img src="imagenes/servicios.jpg" alt="Imagen Servicios">
                        </picture>             
                        <div id="centroSlide">
                            <span class="slide__text" role="heading" aria-level="2">SERVICIOS</span>
                            <a href="serviciosPageController.php"><button class="botonSlide">SERVICIOS</button></a>                       
                        </div>    
                        <a class="slide__prev" href="#slides__2" title="Anterior"></a>
                        <a class="slide__next" href="#slides__4" title="Siguiente"></a>
                    </div>
                    <div id="slides__4" class="slide" >
                        <picture>
                            <source media="(max-width:768px)" srcset="imagenes/tigreujerMob.jpg" alt="animales especiales image mobile version">
                            <img src="imagenes/animalesEspeciales.jpg" alt="Imagen Animales Especiales">
                        </picture>   
                        <div id="centroSlide">
                            <span class="slide__text" role="heading" aria-level="2">QUIERO ADOPTAR UN ANIMAL ESPECIAL</span>
                            <a href="animalesespecialesPageController.php"><button class="botonSlide">ANIMALES ESPECIALES</button></a>                       
                        </div>    
                        <a class="slide__prev" href="#slides__3" title="Anterior"></a>
                        <a class="slide__next" href="#slides__5" title="Siguiente"></a>
                    </div>
                    <div id="slides__5" class="slide" >
                        <picture>
                            <source media="(max-width:768px)" srcset="imagenes/chicoyperroMob.jpg" alt="contacto image mobile version">
                            <img src="imagenes/chicoyperro.jpg" alt="Imagen Contacto">
                        </picture>
                        <div id="centroSlide">
                            <span class="slide__text" role="heading" aria-level="2">PREGÚNTANOS LO QUE QUIERAS</span>
                            <a href="contactoPageController.php"><button class="botonSlide">CONTACTO</button></a>                       
                        </div>    
                        <a class="slide__prev" href="#slides__4" title="Anterior"></a>
                        <a class="slide__next" href="#slides__1" title="Siguiente"></a>
                    </div>
                </div>
                <div class="slider__nav" role="navigation" aria-label="home screen navigation slideshow">
                    <a class="slider__navlink" href="#slides__1"></a>
                    <a class="slider__navlink" href="#slides__2"></a>
                    <a class="slider__navlink" href="#slides__3"></a>
                    <a class="slider__navlink" href="#slides__4"></a>
                    <a class="slider__navlink" href="#slides__5"></a>
                </div>
            </div>
      </div>
      
     ';
    }
}

class AnimalsView extends View{   
    private $animalsList;

    public function __construct($navItems, $animalsList){
        parent::__construct($navItems);
        $this->animalsList = $animalsList;
    }
    protected function getMain(){
        $mainContent='<button type="button" class="accessibilityBtn" aria-label="accessibility button"><i class="fa-solid fa-universal-access"></i></button>
        <div class="contentAcc" aria-label="accessibility options">
            <button type="button" id="contrastBtn" onclick="contrastClicked(2)"><i class="fa-solid fa-circle-half-stroke"></i> Contrast</button>
            <button type="button" id="textZoomBtn" onclick="zoomClicked(2)"><i class="fa-solid fa-text-height"></i> Text Size</button>
            <button type="button" id="resetBtn" onclick="resetClicked(2)"><i class="fa-solid fa-arrow-rotate-left"></i> Reset</button>
        </div>

        <div class="container" role="img" aria-label="Animales backround image">
        <picture>
            <source media="(max-width:768px)" srcset="imagenes/adoptarMob.jpg" alt="Animales Image mobile version">
            <img src="imagenes/gatofeliz.jpg" alt="Animales Image">
        </picture>

       

        <div class="tituloPagina" role="heading" aria-level="1">ANIMALES</div>
        <div class="note">Animales listos para adoptar.</div>
        </div>
        <div id="animalitos" aria-label="animals for adoption">';
        foreach($this->animalsList as $animal){
            $mainContent .= 
            '<div class="animal" aria-label="animals details">
                <a href="animalPageController.php?id='.$animal->id.'"><img src="imagenes/'.$animal->imagen.'" alt="Animal imagen"/></a>
                <p class="nombre" >
                <h3>'
                .$animal->nombre.
                '</h3>
				</p>
                <p class="description" aria-label="description of the animal">'
                .$animal->descripcion.
                '</p>
            </div>';
        }
        $mainContent .= '</div>
        <div id="meetus" aria-label="meet us button"> Póngase en contacto con nosotros para reservar una cita y conocer a los animales.<br>
        <button type="button" id="contactBtn" onClick="contactUsClicked()">CONTACT US!</button></div>';
        return $mainContent;
    }
}

class AnimalView extends View{   
    private $animal;

    public function __construct($navItems, $animal){
        parent::__construct($navItems);
        $this->animal = $animal;
    }
    protected function getMain(){
        return '<button type="button" class="accessibilityBtn" aria-label="accessibility button"><i class="fa-solid fa-universal-access"></i></button>
        <div class="contentAcc" aria-label="accessibility options">
            <button type="button" id="contrastBtn" onclick="contrastClicked(3)"><i class="fa-solid fa-circle-half-stroke"></i> Contrast</button>
            <button type="button" id="textZoomBtn" onclick="zoomClicked(3)"><i class="fa-solid fa-text-height"></i> Text Size</button>
            <button type="button" id="resetBtn" onclick="resetClicked(3)"><i class="fa-solid fa-arrow-rotate-left"></i> Reset</button>
        </div>

        <div id="animalitos" aria-label="details of the animal">
                    <div class="animal info" aria-label="all the information of the animal">
                        <img src="imagenes/'.$this->animal->imagen.'" alt="Animal imagen" />
                        <div class="datos" aria-label="data of the animal">
                            <p class="nombre">
                            <h3>'
                            .$this->animal->nombre.
                            '</h3>
                            </p>
                            <p class="raza" aria-label="breed of the animal">Raza: '
                            .$this->animal->raza.
                            '</p>
                            <p class="sexo" aria-label="sex of the animal">Sexo: '
                            .$this->animal->sexo.
                            '</p>
                            <p class="edad" aria-label="age of the animal">Edad: '
                            .$this->animal->edad.
                            '</p>
                            <p class="description" aria-label="description of the animal">Descripcion: '
                            .$this->animal->descripcion.
                            '</p>
                        </div>
                    </div>
                </div>';
    }
}

class ContactView extends View{   
    public function __construct($navItems){
        parent::__construct($navItems);
    }
    protected function getMain(){
        return '<button type="button" class="accessibilityBtn" aria-label="accessibility button"><i class="fa-solid fa-universal-access"></i></button>
                <div class="contentAcc" aria-label="accessibility options">
                    <button type="button" id="contrastBtn" onclick="contrastClicked(4)"><i class="fa-solid fa-circle-half-stroke"></i> Contrast</button>
                    <button type="button" id="textZoomBtn" onclick="zoomClicked(4)"><i class="fa-solid fa-text-height"></i> Text Size</button>
                    <button type="button" id="resetBtn" onclick="resetClicked(4)"><i class="fa-solid fa-arrow-rotate-left"></i> Reset</button>
                </div>
        
                <div class="container" role="img" aria-label="Contact backround image">
                <picture>
                    <source media="(max-width:768px)" srcset="imagenes/chicoyperroMob.jpg" alt="ImagenContacto mobile version">
                    <img src="imagenes/contacto.jpg" alt="ImagenContacto">
                </picture>
                    <div class="tituloPagina role="heading" aria-level="1">CONTACTO</div>
                </div>
                <div class="cuerpoContacto" aria-label="Contact form">
                    <form id="contacto" action="contactoPageController.php" method="POST" aria-label="Send us a message form">           
                        <input name="nombre" type="text" class="inputContacto" placeholder="Nombre" />   
                        <input name="email" type="text" class="inputContacto" placeholder="Email" />
                        <textarea name="mensaje" class="inputContacto" placeholder="Escribe tu mensaje..."></textarea><br>
                        <input type="submit" id="submitButton" value="ENVIAR"/>
                    </form>
                    <p id="cuerpoP" aria-label="Website description">Bienvenido a la página de contacto de Adoptemus.<br><br>Para cualquier tipo de duda o consulta que pueda tener, póngase 
                        en contacto con nosotros mediante este formulario o llamando al siguiente teléfono.<br><br>
                        <i class="fa fa-phone" style="font-size:20px"></i>  948 16 90 00<br>
                        <i class="fa fa-map-marker" style="font-size:20px"></i>  Grand-Place-Grote Markt, s/n, Bruselas, Bélgica
                    </p>
                    <div id="mapa" aria-label="Explore area map"></div>
                    
                </div>';
    }
}


class ComoAdoptarView extends View{
    public function __construct($navItems){
        parent::__construct($navItems);
    }
    protected function getMain(){
        return '<button type="button" class="accessibilityBtn" aria-label="accessibility button"><i class="fa-solid fa-universal-access"></i></button>
                <div class="contentAcc" aria-label="accessibility options">
                    <button type="button" id="contrastBtn" onclick="contrastClicked(5)"><i class="fa-solid fa-circle-half-stroke"></i> Contrast</button>
                    <button type="button" id="textZoomBtn" onclick="zoomClicked(5)"><i class="fa-solid fa-text-height"></i> Text Size</button>
                    <button type="button" id="resetBtn" onclick="resetClicked(5)"><i class="fa-solid fa-arrow-rotate-left"></i> Reset</button>
                </div>
        
                <div class="container" role="img" aria-label="Como adoptar backround image">
                    <picture>
                        <source media="(max-width:768px)" srcset="imagenes/perroalparcoMob.jpg" alt="Como adoptar Image mobile version">
                        <img src="imagenes/perroalparco.jpg" alt="Como adoptar Image">
                    </picture>
                    <div class="tituloPagina" role="heading" aria-level="1">COMO ADOPTAR</div>
                    <div class="note"  >¿Quieres adoptar un animal y no sabes cómo? Te lo explicamos</div>
                </div>
        
                <button class="collapsible">Analiza qué animal de compañía se adapta mejor a tu hogar</button>
                <div class="content" aria-label="como adoptar information">
                <p aria-label="first step">Antes de iniciar el proceso de adopción debes reflexionar y estar seguro o segura de qué tipo de animal de compañía quieres acoger. Cada animal tiene unas necesidades diferentes (no es lo mismo adoptar un perro, un gato o una tortuga). Es importante que evites dejarte llevar por impulsos pasajeros y que medites muy bien cuál es el animal apropiado para tu hogar. Pregúntate esto cuando vayas a adoptar un animal de compañía.</p>
                </div>
                <button class="collapsible">Busca tu animal de compañía en nuestra web</button>
                <div class="content" aria-label="como adoptar information">
                <p aria-label="second step">Cuando ya tengas claro qué animal de compañía es el que se adapta a ti y a tu familia, puedes iniciar la búsqueda.</p>
                </div>
                <button class="collapsible">Contacta con nosotros</button>
                <div class="content" aria-label="como adoptar information">
                <p aria-label="third step">Una vez hayas encontrado tu animal de compañía ideal, escribenos un mensaje para que nos pongamos en contacto contigo y veamos si eres apto para cuidar de él. ¡Seguro que sí!</p>
                </div>
                <button class="collapsible">Firma el contrato de adopción</button>
                <div class="content" aria-label="como adoptar information">
                <p aria-label="fourth step">Por último firmaremos el contrato y tu nuevo amigo podrá irse a vivir contigo</p>
                </div>';
    }   
}

class ServiciosView extends View {
    public function __construct($navItems){
        parent::__construct($navItems);
    }
    protected function getMain() {
        return '<button type="button" class="accessibilityBtn" aria-label="accessibility button"><i class="fa-solid fa-universal-access"></i></button>
        <div class="contentAcc" aria-label="accessibility options">
            <button type="button" id="contrastBtn" onclick="contrastClicked(6)"><i class="fa-solid fa-circle-half-stroke"></i> Contrast</button>
            <button type="button" id="textZoomBtn" onclick="zoomClicked(6)"><i class="fa-solid fa-text-height"></i> Text Size</button>
            <button type="button" id="resetBtn" onclick="resetClicked(6)"><i class="fa-solid fa-arrow-rotate-left"></i> Reset</button>
        </div>
        
        
        <div class="container" role="img" aria-label="Servicios backround image">
        <picture>
            <source media="(max-width:768px)" srcset="imagenes/vetMob.jpg" alt="Servicios Image mobile version">
            <img src="imagenes/vet.jpg" alt="Servicios Image">
        </picture>
        <div class="tituloPagina" role="heading" aria-level="1">SERVICIOS</div>
        <div class="note" >A continuación se muestran todos servicios que ofrecemos.</div>
        </div>
        <div id="list-centered">
            <ul id="serUl">
                <li id="li1" class="serLi"></li>
                <li id="li2" class="serLi"></li>
                <li id="li3" class="serLi"></li>
                <li id="li4" class="serLi"></li>
            </ul>
        </div>';
    }
}
?>
