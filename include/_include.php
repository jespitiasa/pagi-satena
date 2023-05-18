<?php
    require_once("_configuracion.php");
    class ConexionBD{
        var $hostname;
        var $database;
        var $username;
        var $password;
        var $db_query_numfilas;
        //Asigna la configuracion de la basse de datos
        function ConexionBD(){
            $ObjConf= new Configuracion();
            $this->hostname = $ObjConf->getHostName();
            $this->database = $ObjConf->getDataBase();
            $this->username = $ObjConf->getUserName();
            $this->password = $ObjConf->getPassword();
            $this->db_query_numfilas=0;
            $ObjConf=NULL;
        }
        //Cierra la conexion a la base de datos
        function closeConnection($stmt){  
            try {  
                sqlsrv_free_stmt( $stmt);
                //echo "conexion cerrada";
            }catch(Exception $e){  
                echo("Error!");  
            }  
        }
        //Coonsulta la base de datos
        function getData($sql){  
            try{  
                $serverName = $this->hostname;
                $connectionInfo = array( "Database"=>$this->database, "UID"=>$this->username, "PWD"=>$this->password);
                $conn = sqlsrv_connect( $serverName, $connectionInfo );
                if( $conn === false ) {
                    die( print_r( sqlsrv_errors(), true));
                }
                $res_array = array();
                $stmt = sqlsrv_query($conn, $sql);
                if( $stmt === false) {
                    die( print_r( sqlsrv_errors(), true) );
                }
                for ($count=0 ; $row = sqlsrv_fetch_array($stmt); $count++)
                $res_array[$count]=$row;
                return $res_array ;
                closeConnection($stmt);
            }catch(Exception $e){  
                echo("Error!");  
            }  
        }
        //Realiza 
        function queryData($sql){  
            try{  
                $serverName = $this->hostname;
                $connectionInfo = array( "Database"=>$this->database, "UID"=>$this->username, "PWD"=>$this->password);
                $conn = sqlsrv_connect( $serverName, $connectionInfo );
                $stmt = sqlsrv_query( $conn, $sql );
                if( $stmt === false) {
                    die( print_r( sqlsrv_errors(), true) );
                }
                sqlsrv_free_stmt( $stmt);
            }catch(Exception $e){  
                echo("Error!");  
            }  
        }
    }
?>