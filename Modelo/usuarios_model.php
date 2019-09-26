<?php

    class usuarios_model{

        private $db;
        private $usuario;

        public function __construct(){

            try{
                require_once("conexion.php");

                $this->db= Conectar::Conexion();

                $this->usuario= array();

            }catch(Exception $e){
                echo "La Línea de error es: ". $e->getLine();
            }
            
        }

        public function get_usuarios(){

            // PDO
            try{
                $query= $this->db->query("SELECT * FROM usuarios");

                while($fila= $query->fetch(PDO::FETCH_ASSOC)){
                    $this->usuario[]= $fila;
                }

                $query->closeCursor();

                return $this->usuario;

            }catch(Exception $e){
                echo "La Línea de error es: ". $e->getLine();
            }

            /* MYSQLI
            $result= $this->conexion->query('SELECT * FROM usuarios');
            $usuario= $result->fetch_all(MYSQLI_ASSOC);
            return $usuario;*/
        }

        public function agregar_usuarios($datos){

            try{
                $sql= "INSERT INTO usuarios (Nombre,Apellido,Correo,Contra) VALUES (:nombre,:apellido,:correo,:contra)";
            
                $query= $this->db->prepare($sql);

                /*$array= array(":nombre"=>$datos[0],
                                ":apellido"=>$datos[1],
                                ":correo"=>$datos[2],
                                ":contra"=>$datos[3]);*/

                $query->bindParam(":nombre", $datos[0], PDO::PARAM_STR);
                $query->bindParam(":apellido", $datos[1], PDO::PARAM_STR);
                $query->bindParam(":correo", $datos[2], PDO::PARAM_STR);
                $query->bindParam(":contra", $datos[3], PDO::PARAM_STR);

                $query->execute();
                
                //$query= $this->db->query($sql);

                return $query;

            }catch(Exception $e){
                echo "La Línea de error es: ". $e->getLine();
            }
        }

        public function eliminar_usuarios($dato){

            try{
                $sql= "DELETE FROM usuarios WHERE ID= :dato "; // ID= :dato

                //$this->db->execute();

                //return $this->db->query($sql);

                $consulta= $this->db->prepare($sql);

                $this->db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

                $consulta->bindParam(":dato", $dato, PDO::PARAM_INT);

                $query= $consulta->execute();

                return $query;

            }catch(Exception $e){
                echo "La Línea de error es: ". $e->getLine();
            }
        }

        public function obtener_usuario($dato){

            try{
                $consulta= $this->db->prepare("SELECT * FROM usuarios WHERE ID=:dato");

                $consulta->bindParam(":dato", $dato, PDO::PARAM_INT);

                $consulta->execute();

                while($fila= $consulta->fetch(PDO::FETCH_ASSOC)){
                    $this->usuario[]= $fila;
                }

                $consulta->closeCursor();

                return $this->usuario;

            }catch(Exception $e){
                echo "La Línea de error es: ". $e->getLine();
            }

        }

        public function modificar_usuario($dato){

            try{
                $sql= "UPDATE usuarios SET  
                        Nombre= :nombre, 
                        Apellido= :apellido, 
                        Correo= :correo, 
                        Contra= :contra 
                        WHERE ID= :id ";

                //return $this->db->query($sql);

                $consulta= $this->db->prepare($sql);

                $consulta->bindParam(":nombre", $dato[1], PDO::PARAM_STR);
                $consulta->bindParam(":apellido", $dato[2], PDO::PARAM_STR);
                $consulta->bindParam(":correo", $dato[3], PDO::PARAM_STR);
                $consulta->bindParam(":contra", $dato[4], PDO::PARAM_STR);
                $consulta->bindParam(":id", $dato[0], PDO::PARAM_INT);

                $consulta->execute();

                return $consulta;

            }catch(Exception $e){
                echo "La Línea de error es: ". $e->getLine();
            }

        }
    }

?>