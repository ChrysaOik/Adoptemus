<?php
    // Soy un page controller, para una página específica
    include 'model.php';
    include 'view.php';

    
    //Como soy un controlador, me encargo de la inteligenica e interacción.
    // por ejemplo, si tengo una sesión de usuario iniciada para aplicar descuentos...
    // o si hay un parametro $_GET['filtroPrenda'] para pedir al modelo solo info de una prenda en concreto
    
    // En este punto ya sé qué información le debo pedir al modelo. Me voy a crear representaciones en objetos de todos esto. No sé si por detrás está mySQL o mongoDB o cualquer otra...
    // A) El listado de elementos de navegación que quiero mostrar en el menú principal
    $navItemsModule = new NavItemsModule();
    
    // Voy a crear mediante la VISTA un objeto especifico para visualizar productos. Le voy a proporcionar la info que he solicitado al modelo
    $vista = new ServiciosView($navItemsModule->getNavItemsList());
    // Le pido a este objeto de la vista que dibuje su contenido
    $vista->printFullHTML();

?>
