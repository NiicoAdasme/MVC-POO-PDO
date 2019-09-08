<?php

    class usuarios_model{

        private $db;
        private $usuario;

        public function __construct(){

            require_once("conexion.php");

            $this->db= Conectar::Conexion();

            $this->usuario= array();
        }

        public function get_usuarios(){

            // PDO
            $query= $this->db->query("SELECT * FROM usuarios");

            while($fila= $query->fetch(PDO::FETCH_ASSOC)){
                $this->usuario[]= $fila;
            }

            return $this->usuario;

            /* MYSQLI
            $result= $this->conexion->query('SELECT * FROM usuarios');
            $usuario= $result->fetch_all(MYSQLI_ASSOC);
            return $usuario;*/
        }

        public function agregar_usuarios($datos){

            $sql= "INSERT INTO usuarios (Nombre,Apellido,Correo,Contra) VALUES (:nombre,:apellido,:correo,:contra)";
            
            $query= $this->db->prepare($sql);

            $array= array(":nombre"=>$datos[0],
                            ":apellido"=>$datos[1],
                            ":correo"=>$datos[2],
                            ":contra"=>$datos[3]);

            $query->execute($array);
            
            //$query= $this->db->query($sql);

            return $query;
        }

        public function eliminar_usuarios($dato){

            $sql= "DELETE FROM usuarios WHERE ID= $dato "; // ID= :dato

            return $this->db->query($sql);

            /*$this->db->prepare($sql);

            $this->db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

            $this->db->setFetchMode(PDO::FETCH_OBJ);

            $this->db->bindParam(":dato", $dato, PDO::PARAM_INT);

            $this->db->execute();*/
        }

        public function obtener_usuario($dato){

            $query= $this->db->query("SELECT * FROM usuarios WHERE ID=$dato");

            while($fila= $query->fetch(PDO::FETCH_ASSOC)){
                $this->usuario[]= $fila;
            }

            return $this->usuario;
        }

        public function modificar_usuario($dato){

            $sql= "UPDATE usuarios SET  
                    Nombre= '$dato[1]', 
                    Apellido= '$dato[2]', 
                    Correo= '$dato[3]', 
                    Contra= '$dato[4]' 
                    WHERE ID= '$dato[0]'";

            return $this->db->query($sql);
        }
    }




?>