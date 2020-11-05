<?php
session_start();
include RUTA_APP . '/views/inc/cabeza.inc.php';?>
<div class="container">
<?php if(!isset($_SESSION['usuario'])) {?>
    <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <div class="card" style="background-color: #2574A9;">
                    <div class="card-header"> avisos</div>
                    <div class="card-body">No tiene permisos...... vaya ha acceder </div>
                </div>
            </div>
            <div class="col-sm-4"></div>
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <a href="<?php echo RUTA_URL;  ?>/auths" >Login</a>
            </div>
        </div>
    <?php } else{?>
    <div class="controllers">
        <a href="<?php echo RUTA_URL; ?>/usuarios/agregar" id="agregar" class="btn btn-info btn-sm float-right"><i class="fa fa-plus"></i></a>
        
    </div>


<table class="table">
    <thead>
        <tr>
            <td colspan="7"></td>
            <td>
                <button type="button" class="btn btn-info btn-sm" title="Exportar a CSV" id="csv"><i class="fa fa-file-csv"></i></button>
                <button type="button" class="btn btn-info btn-sm" title="Exportar a XML" id="xml"><i class="fa fa-file-code"></i></button>
                <button type="button"class="btn btn-info btn-sm" title="Exportar a JSON" id="json"><i class="fa fa-file-export"></i></button>
            <a href="<?php echo RUTA_URL;?>/usuarios/toPdf" target="_blank" class="btn btn-info btn-sm" title="Exportar a PDF" id="pdf"><i class="fa fa-file-pdf"></i></a>
            </td>
        </tr>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>R.F.C</th>
            <th>Direccion</th>
            <th>Correo</th>
            <th>Telefono</th>
            <th>Foto</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($datos['usuarios'] as $usuario): $foto=base64_encode($usuario['foto']);?>
        
        <tr>
            <td><?php echo $usuario['id']; ?></td>
            <td><?php echo $usuario['nombre_usuario']; ?></td>
            <td><?php echo $usuario['rfc']; ?></td>
            <td><?php echo $usuario['direccion']; ?></td>
            <td><?php echo $usuario['correo']; ?></td>
            <td><?php echo $usuario['telefono']; ?></td>
            <td> <img src="data:image/png;base64,<?php echo $foto; ?>" width="30" alt="Foto"></td>
            <td><a class="btn btn-sm btn-success"href="<?php echo RUTA_URL; ?>/usuarios/editar/<?php echo $usuario['id']; ?>"><i class="fa fa-edit"></i></a>
            &nbsp; <a class="btn btn-sm btn-danger" href="<?php echo RUTA_URL; ?>/usuarios/borrar/<?php echo $usuario['id']; ?>"><i class="fa fa-times"></i></a></td>
            
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
                url:"<?php echo RUTA_URL ;?>/usuarios/toCsv",
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
                url:"<?php echo RUTA_URL;?>/usuarios/toXml",
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
                url:"<?php echo RUTA_URL;?>/usuarios/toJson",
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
            url:"<?php echo RUTA_URL;?>/usuarios/toPdf",
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