<?php
//para redireccionar paginas
function redireccion($page){
    
    header('Location:'.RUTA_URL.$page);
}
?>