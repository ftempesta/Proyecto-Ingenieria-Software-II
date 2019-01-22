<?php
class Usuario{
    private $pdo;

    private $id;
    private $nombre;
    private $ap_paterno;
    private $ap_materno;
    private $email;
    private $contrasena;
    private $direccion;
    private $comuna;
    private $edad;
    private $sexo;
    private $telefono;
    private $rut;

    public function __CONSTRUCT(){
        try{
            $this->pdo = Database::StartUp();
            
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function Listar(){
        try{
            $result = array();
            $stm = $this->pdo->prepare("SELECT * FROM usuario");
            $stm->execute();

            return $stm->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function Obtener($id){
        try{
            $stm = $this->pdo->prepare("SELECT * FROM usuario WHERE id=?");

            $stm->execute(array($id));
            return $stm->fetch(PDO::FETCH_OBJ);
            
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function Eliminar($id){
        try{
            $stm = $this->pdo
                        ->prepare("DELETE FROM usuario WHERE id = ?"); 

            $stm->execute(array($id));         
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function Actualizar($data){
        try{
            $sql = "UPDATE usuario SET 
                nombre      = ?,
                ap_paterno  = ?,
                ap_materno  = ?,
                email       = ?,
                contrasena  = ?,
                direccion   = ?,
                comuna      = ?,
                edad        = ?,
                sexo        = ?,
                telefono    = ?,
                rut         = ?, 
            WHERE id = ?";  

            $this->pdo->prepare($sql)
                 ->execute(
                    array(
                        $data->nombre, 
                        $data->ap_paterno,
                        $data->ap_materno,
                        $data->email,
                        $data->contrasena,
                        $data->direccion,
                        $data->comuna,
                        $data->edad,
                        $data->sexo,
                        $data->telefono,
                        $data->rut
                    )
            );
        }catch (Exception $e){
            die($e->getMessage());
        }
    }

    public function Registrar(Usuario $data){
        try{
            $sql = "INSERT INTO usuario('nombre','ap_paterno',
            'ap_materno', 'email', 'contrasena', 'direccion', 'comuna', 
            'edad', 'sexo', 'telefono', 'rut')
            VALUES (?,?,?,?,?,?,?,?,?,?,?)";

            $this->pdo->prepare($sql)->execute(
                array(
                    $data->nombre, 
                    $data->ap_paterno,
                    $data->ap_materno,
                    $data->email,
                    $data->contrasena,
                    $data->direccion,
                    $data->comuna,
                    $data->edad,
                    $data->sexo,
                    $data->telefono,
                    $data->rut
                )
            );
        }catch (Exception $e){
            die($e->getMessage());
        }
    }
}

?>