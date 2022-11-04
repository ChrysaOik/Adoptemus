<?php
class Model {
    public function __construct(){
        require_once 'DatabaseConnSingleton.php';
    }
}
class NavItem {
    public $prioridad;
    public $link;
    public $title;
    public function __construct($prioridad, $link, $title){
        $this->prioridad = $prioridad;
        $this->link = $link;
        $this->title = $title;
    }
}
class NavItemsModule extends Model{
    public function getNavItemsList(){
        // obtengo mi conexión singleton
        $conn = DatabaseConnSingleton::getConn();
        // Inicializo mi lista de elementos del MenuPrincipal
        $navItemList = array();
        // preparo la query 
        $query = "SELECT * FROM MenuPrincipal ORDER BY prioridad DESC";
        //lanzo la query y devuelvo su resultado
        if ($res = $conn->query("$query")) {
            while ($row = $res->fetch_assoc()) {
                array_push($navItemList, new NavItem($row["prioridad"],$row["link"],$row["title"]));
            }
            $res->free();
            return $navItemList;
        }
    }
}

class Contacto{
    public $nombre;
    public $email;
    public $mensaje;
    
    public function __construct($nombre,$email,$mensaje){
        $this->nombre = $nombre;
        $this->email = $email;
        $this->mensaje = $mensaje;
    }
}

class ContactoModule extends Model{
    public function sendMessageToBD($contacto){
        // obtengo mi conexión singleton
        $conn = DatabaseConnSingleton::getConn();
        // preparo la query 
        $query = "INSERT INTO contacto VALUES ('".$contacto->nombre."', '".$contacto->email."', '".$contacto->mensaje."')";
        //lanzo la query y devuelvo su resultado
        $conn->query("$query");
    }
}


class Animal{
    public $id;
    public $nombre;
    public $raza;
    public $sexo;
    public $edad;
    public $descripcion;
    public $imagen;
    public $especial;
    public function __construct($id, $nombre, $raza, $sexo, $edad, $descripcion, $imagen, $especial){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->raza = $raza;
        $this->sexo = $sexo;
        $this->edad = $edad;
        $this->descripcion = $descripcion;
        $this->imagen = $imagen;
        $this->especial = $especial;
    }
}

class AnimalsModule extends Model{
    public function getNormalAnimalsOrderedBy($orderby){
        // obtengo mi conexión singleton
        $conn = DatabaseConnSingleton::getConn();
        // preparo la query 
        $query = "SELECT * FROM Animales WHERE especial = 0 ORDER BY ".$orderby." ASC";
        //lanzo la query y devuelvo su resultado
        if ($res = $conn->query("$query")) {
            return $this->getAnimalsList($res);
        }
    }
    public function getSpecialAnimalsOrderedBy($orderby){
        // obtengo mi conexión singleton
        $conn = DatabaseConnSingleton::getConn();
        // preparo la query 
        $query = "SELECT * FROM Animales WHERE especial = 1 ORDER BY ".$orderby." ASC";
        //lanzo la query y devuelvo su resultado
        if ($res = $conn->query("$query")) {
            return $this->getAnimalsList($res);
        }
    }
    private function getAnimalsList($res) {
        // Inicializo mi lista de productos
        $animalsList = array();
        while ($row = $res->fetch_assoc()) {
            array_push($animalsList, new Animal($row["id"], $row["nombre"], $row["raza"], $row["sexo"], $row["edad"], $row["descripcion"], $row["imagen"], $row["especial"]));
        }
        $res->free();
        return $animalsList;
    }
    public function findAnimalsByID($id){
        // obtengo mi conexión singleton
        $conn = DatabaseConnSingleton::getConn();
        // preparo la query 
        $query = "SELECT * FROM Animales where id = ".$id;
        //lanzo la query y devuelvo su resultado
        if ($res = $conn->query("$query")) {
            return $this->getAnimalsList($res)[0];
        }
    }
}


?>
