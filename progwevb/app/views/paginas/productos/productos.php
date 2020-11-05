<?php
session_start();
include RUTA_APP . '/views/inc/cabeza.inc.php';?>
<div class="container">
<?php if(!isset($_SESSION['usuario'])) {?>
    <div class="row">
        
        <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <div class="card bg-warning">
                    <div class="card-header"> Avisos</div>
                    <div class="card-body"> No tiene acceso....... vaya al login</div>
                </div>
            </div>
            <div class="col-sm-4"></div>
    </div>
    <?php } else{?>
    <div class="controllers">
        <a href="<?php echo RUTA_URL; ?>/productos/agregar" id="agregar" class="btn btn-info btn-sm float-right"><i class="fa fa-plus"></i></a>
        
    </div>


<table class="table">
    <thead>
        <tr>
            <td colspan="7"></td>
            <td>
                <button type="button" class="btn btn-info btn-sm" title="Exportar a CSV" id="csv"><i class="fa fa-file-csv"></i></button>
                <button type="button" class="btn btn-info btn-sm" title="Exportar a XML" id="xml"><i class="fa fa-file-code"></i></button>
                <button type="button"class="btn btn-info btn-sm" title="Exportar a JSON" id="json"><i class="fa fa-file-export"></i></button>
            <a href="<?php echo RUTA_URL;?>/productos/toPdf" target="_blank" class="btn btn-info btn-sm" title="Exportar a PDF" id="pdf"><i class="fa fa-file-pdf"></i></a>
            </td>
        </tr>
        <tr>
            <th>Id</th>
            <th>Nombre Producto</th>
            <th>Precio</th>
            <th>Foto</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($datos['productos'] as $productos): $foto=base64_encode($productos['foto_prod']);?>
        
        <tr>
            <td><?php echo $productos['id_prod']; ?></td>
            <td><?php echo $productos['nombre_prod']; ?></td>
            <td><?php echo $productos['precio']; ?></td>
            <td> <img src="data:image/png;base64,<?php echo $foto; ?>" width="30" alt="foto_prod"></td>
            <td><a class="btn btn-sm btn-success"href="<?php echo RUTA_URL; ?>/productos/editar/<?php echo $productos['id_prod']; ?>"><i class="fa fa-edit"></i></a>
            &nbsp; <a class="btn btn-sm btn-danger" href="<?php echo RUTA_URL; ?>/productos/borrar/<?php echo $productos['id_prod']; ?>"><i class="fa fa-times"></i></a></td>
            
        </tr>
        <?php endforeach;?>
    </tbody>
</table>
<?php }?>
</div>
<?php include RUTA_APP . '/views/inc/footer.inc.php';?>
<script>
    $(function(){
        
        
        $('#csv').on('click', function(){   
            $.ajax({
                type:'GET',
                url:"<?php echo RUTA_URL ;?>/productos/toCsv",
                dataType:'json',
                success: function(respuesta){
                    if(respuesta.hecho){
                        alert('Archivo creado con exito');
                    }
                },
                error:function(e){
                    console.log(e.responseText);
                }
                });
            });
        
        
        $('#xml').on('click', function(){
            
            $.ajax({
                type:'GET',
                url:"<?php echo RUTA_URL;?>/productos/toXml",
                dataType:'json',
                success:function(respuesta){
                    if(respuesta.hecho){
                        alert('Archivo creado con exito');
                    }
                },
                error:function(e){
                    console.log(e.responseText);
                }
                });
            });
        
        
         $('#json').on('click', function(){
            
            $.ajax({
                type:'GET',
                url:"<?php echo RUTA_URL;?>/productos/toJson",
                dataType:'json',
                success:function(respuesta){
                    if(respuesta.hecho){
                        alert('Archivo creado con exito');
                    }
                },
                error:function(e){
                    console.log(e.responseText);
                }
                });
            });
         
         
        $('#pdf').on('click', function(){
           
         $.ajax({
             type:'GET',
            url:"<?php echo RUTA_URL;?>/productos/toPdf",
            dataType:'json',
               success:function(respuesta){
                if(respuesta.hecho){
                      alert('Archivo creado con exito');
                   }
              },
             error:function(e){
                    console.log(e.responseText);
                }
               });
            });         
        });
</script>