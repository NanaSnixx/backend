<?php
    class Cuentas extends Controller{
        public function __construct(){
            $this->cuentaModel = $this->model('Cuenta');
        }   
        public function index(){
            $cuentas = $this->cuentaModel->obtenerCuentas();

            $datos = [
                'cuentas'=>$cuentas

            ];
            $this->view('paginas/cuentas/cuentas',$datos);
        }
        
        public function agregar(){
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $datos=[
                  'Nombre'=> trim($_POST['Nombre']),
                  'BalanceInicial'=> trim($_POST['BalanceInicial']),
                  'fecha'=> trim($_POST['fecha'])
                    
                ];
                if($this->cuentaModel->agregarCuenta($datos)){
                    redireccion('/cuentas');
                }else{
                    
                }
            }
            else{
                $datos=[
                  'Nombre'=>'',
                  'BalanceInicial'=>'' ,
                  'fecha'=>''
                ];
                $this->view('paginas/cuentas/agregar',$datos);
            }
            
        }


        public function editar($id){
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $datos=[
                  'id'=> $id,
                  'Nombre'=>trim($_POST['Nombre']),
                  'BalanceInicial'=> trim($_POST['BalanceInicial']),
                  'fecha'=>trim($_POST['fecha'])
                    
                ];
                if($this->cuentaModel->actualizarCuenta($datos)){
                    redireccion('/cuentas');
                }else{
                    
                }
                
            }
            else{
                $cuentas=$this->cuentaModel->obtenerCuentaId($id);
            
            $datos=[
                 'id' => $cuentas['id'],
                  'Nombre'=> $cuentas['Nombre'],
                  'BalanceInicial'=>  $cuentas['BalanceInicial'],
                  'fecha'=> $cuentas['fecha'],
                    
                ];
            $this->view('paginas/cuentas/editar',$datos);
            }
        }


        public function borrar($id){
            $usuario=$this->usuarioModel->obtenerCuentaId($id);
            //$foto=base64_encode($usuario['foto']);


                    $datos=[
                  'id' => $usuario['id'],
                  'Nombre'=> $usuario['Nombre'],
                  'BalanceInicial'=>  $usuario['BalanceInicial']
                    
                ];
                    if($_SERVER['REQUEST_METHOD']=='POST'){
                        if($this->cuentaModel->borrarCuenta($id)){
                            redireccion('/cuentas');
                        }else{
                            
                        }
                    }
            $this->view('paginas/cuenta/borrar',$datos);
        }

    }

?>