<?php
    require_once 'model/usuario.php';

    class UsuarioController{
        private $model;

        public function __CONSTRUCT(){
            $this->model = new Usuario();
        }

        public function Index(){
            require_once 'view/usuario/usuario.php';
        }

        public function Crud(){
            $usr = new Usuario();

            if(isset($_REQUEST['id'])){
                $usr = $this->model->Obtener($_REQUEST['id']);
            }

            require_once 'view/usuario/usuario_editar.php';
        }

        public function Guardar(){
            $usr = new Usuario();

            //$usr->id = $_REQUEST['id'];
            $usr->nombre = $_REQUEST['nombre'];
            $usr->ap_paterno = $_REQUEST['ap_paterno'];
            $usr->ap_materno = $_REQUEST['ap_materno'];
            $usr->email = $_REQUEST['email'];
            $usr->contrasena = $_REQUEST['contrasena'];
            $usr->direccion = $_REQUEST['direccion'];
            $usr->comuna = $_REQUEST['comuna'];
            $usr->edad = $_REQUEST['edad'];
            $usr->sexo = $_REQUEST['sexo'];
            $usr->telefono = $_REQUEST['telefono'];
            $usr->rut = $_REQUEST['rut'];

            $usr->id > 0 
            ? $this->model->Actualizar($usr) 
            : $this->model->Registrar($usr);

            header('Location: index.php');
        }

        public function Eliminar(){
            $this->model->Eliminar($_REQUEST['id']);
            header('Location: index.php');
        }
    }


?>