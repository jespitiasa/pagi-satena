<?php
	class Banner{
		// Atributos
		private $Banner_Activo;
		// Conexión
        private $conn;
        // Metodos
        public function __construct(){
			require_once("_include.php");
            $this->conn = new ConexionBD();
		}
		public function set($atributo, $contenido){
            $this->$atributo = $contenido;
        }
        public function get($atributo){
            return $this->$atributo;
		}
		public function get_AllBanner() {
			$dateSet = date("Y/m/d H:i:s");
			//$timeset = date("H:i");
			// $sql = "SELECT TOP 9 * FROM [dbo].[Table_Banner] WHERE [Banner_Activo] = 1 AND '{$dateSet}' >= [Banner_Fecha_Ini] AND '{$timeset}' >= [Banner_Hora_Ini] AND '{$dateSet}' <= [Banner_Fecha_Fin] AND '{$timeset}' <= [Banner_Hora_Fin]  ORDER BY [Banner_Posicion_ID], [Banner_Date_Crea] DESC";
			// $sql = "SELECT TOP 12 * FROM [dbo].[Table_Banner] WHERE [Banner_Activo] = 1 AND '{$dateSet}' >= [Banner_Fecha_Ini] AND '{$dateSet}' <= [Banner_Fecha_Fin]  ORDER BY [Banner_Posicion_ID], [Banner_Date_Crea] DESC";
			$sql = "SET DATEFORMAT YMD;
					SELECT TOP 12 * FROM [dbo].[Table_Banner] WHERE [Banner_Activo] = 1 AND '{$dateSet}' >= cast(Banner_Fecha_Ini as datetime) + cast(Banner_Hora_Ini as datetime) AND '{$dateSet}' <= cast(Banner_Fecha_Fin as datetime) + cast(Banner_Hora_Fin as datetime) ORDER BY [Banner_Posicion_ID], [Banner_Date_Crea] DESC";
			return $this->conn->getData($sql);
		}
	}
?>