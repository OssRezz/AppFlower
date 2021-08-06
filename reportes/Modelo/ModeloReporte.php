<?php

require_once '../../conexion.php';

class Reporte extends conexion
{
    public function __construct()
    {
        $this->db = parent::__construct();
    }

    public function promedioAarmado()
    {
        $listAarmado = null;
        $statement = $this->db->prepare("SELECT `id_produccion`, `operario`, `labor`, `fecha`,week(fecha) as 'semana', `tallos`, `hora` FROM `tbl_produccion` ");
        $statement->execute();
        while ($consulta = $statement->fetch()) {
            $listAarmado[] = $consulta;
        }
        return $listAarmado;
    }

    //promedio mayor
    public function produccionMayorMenor($labor,  $desde, $hasta)
    {
        $listaProduccion = null;
        $statement = $this->db->prepare("SELECT CONCAT(L.labor, ' ', P.posicion) AS 'Labor',P.operario,O.nombre,P.fecha, Week(fecha) AS 'Semana',P.hora, P.tallos,P.recetas, ROUND(P.tallos/P.hora,0) AS 'Promedio' FROM `tbl_produccion` as P
        INNER JOIN tbl_operarios AS O ON O.id_operario=P.operario
        INNER JOIN labor_produccion AS L ON L.id_labor=P.labor 
        where P.labor = :labor AND fecha BETWEEN :desde AND :hasta
        ORDER by (Promedio) DESC");
        $statement->bindParam(':labor', $labor);
        $statement->bindParam(':desde', $desde);
        $statement->bindParam(':hasta', $hasta);
        $statement->execute();
        while ($consulta = $statement->fetch()) {
            $listaProduccion[] = $consulta;
        }
        return $listaProduccion;
    }

    //tallos
    public function produccionTallosMenorMayor($labor,  $desde, $hasta)
    {
        $listaProduccion = null;
        $statement = $this->db->prepare("SELECT CONCAT(L.labor, ' ', P.posicion) AS 'Labor',P.operario,O.nombre,P.fecha, Week(fecha) AS 'Semana',P.hora, P.tallos,P.recetas, ROUND(P.tallos/P.hora,0) AS 'Promedio' FROM `tbl_produccion` as P
        INNER JOIN tbl_operarios AS O ON O.id_operario=P.operario
        INNER JOIN labor_produccion AS L ON L.id_labor=P.labor 
        where P.labor = :labor AND fecha BETWEEN :desde AND :hasta
        ORDER by (tallos) DESC");
        $statement->bindParam(':labor', $labor);
        $statement->bindParam(':desde', $desde);
        $statement->bindParam(':hasta', $hasta);
        $statement->execute();
        while ($consulta = $statement->fetch()) {
            $listaProduccion[] = $consulta;
        }
        return $listaProduccion;
    }

    //promedio armado
    public function ProduccionPromedio($id,  $desde, $hasta)
    {
        $listaProduccion = null;
        $statement = $this->db->prepare("SELECT CONCAT(L.labor, ' ', P.posicion) AS 'Labor',O.nombre,P.hora, P.tallos, ROUND(P.tallos/P.hora,0) AS 'Promedio' FROM `tbl_produccion` as P
        INNER JOIN tbl_operarios AS O ON O.id_operario=P.operario
        INNER JOIN labor_produccion AS L ON L.id_labor=P.labor 
        where P.labor = :id AND fecha BETWEEN :desde AND :hasta
        ORDER by (Labor) ASC");
        $statement->bindParam(':id', $id);
        $statement->bindParam(':desde', $desde);
        $statement->bindParam(':hasta', $hasta);
        $statement->execute();
        while ($consulta = $statement->fetch()) {
            $listaProduccion[] = $consulta;
        }
        return $listaProduccion;
    }

    //bonificacion produccion
    public function bonificacionProduccion($desde, $hasta)
    {
        $listaProduccion = null;
        $statement = $this->db->prepare("SELECT CONCAT(L.labor, ' ', P.posicion) AS 'Labor',P.operario,O.nombre,P.fecha, Week(fecha) AS 'Semana',P.hora, P.tallos,(ROUND(P.tallos/P.hora,0) - l.rendimiento) AS 'Promedio', ((ROUND(P.tallos/P.hora,0)-L.rendimiento) * L.bonificacion) AS 'Bonificiacion' FROM `tbl_produccion` as P
        INNER JOIN tbl_operarios AS O ON O.id_operario=P.operario
        INNER JOIN labor_produccion AS L ON L.id_labor=P.labor 
        WHERE ROUND(P.tallos/P.hora,0) > L.rendimiento AND fecha BETWEEN :desde AND :hasta
        ORDER by (Bonificiacion) DESC");
        $statement->bindParam(':desde', $desde);
        $statement->bindParam(':hasta', $hasta);
        $statement->execute();
        while ($consulta = $statement->fetch()) {
            $listaProduccion[] = $consulta;
        }
        return $listaProduccion;
    }
}
