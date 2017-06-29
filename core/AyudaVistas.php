<?php
class AyudaVistas{
    
    public function url($controlador=CONTROLADOR_DEFECTO,$accion=ACCION_DEFECTO){
        $urlString="index2.php?controller=".$controlador."&action=".$accion;
        return $urlString;
    }
    
    //Helpers para las vistas
}
?>
