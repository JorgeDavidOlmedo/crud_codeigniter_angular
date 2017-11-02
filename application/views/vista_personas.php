<!DOCTYPE html>
<html lang="en" ng-app="crud">
<head>
  <title>CRUD Personas + Angular</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href=<?php echo base_url("assets/css/sweetalert.css");?>>
   <link rel="stylesheet" href=<?php echo base_url("assets/css/toastr.css");?>>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src=<?php echo base_url("assets/js/buscar.js");?>></script>
  <script src=<?php echo base_url("assets/js/angular.min.js");?>></script>  
  <script src=<?php echo base_url("assets/js/crud.js");?>></script> 
  <script src=<?php echo base_url("assets/js/sweetalert.js");?>></script> 
  <script src=<?php echo base_url("assets/js/toastr.min.js");?>></script> 
</head>
<body ng-controller="ejemplo">
<div class="container">
  <h2>Lista de Personas</h2>
  <br><br>   
  <button class="btn btn-primary" ng-click="guardarModal()">Nueva Persona</button>
  <br><br>
   <div class="input-group">
  <span class="input-group-addon">Buscar</span>
  <input id="filtrar" type="text" class="form-control" placeholder="Nombre, Apellido...">
  </div> 
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>#</th>
      </tr>
    </thead>
    <tbody class="buscar">
    	
		      <tr ng-repeat="p in personas">
		        <td>{{p.id}}</td>
		        <td>{{p.nombre}}</td>
		        <td>{{p.apellido}}</td>

		        <td class="actions">
               			 <button class="btn btn-primary btn-xs actions" data-title="Edit" data-toggle="modal"><span class="glyphicon glyphicon-pencil" ng-click="editar(p.id)"></span></button>

              			<button class="btn btn-danger btn-xs actions"  data-title="Delete" data-toggle="modal" data-target="#confirm-delete" ng-click="borrar(p.id)"><span class="glyphicon glyphicon-trash"></span></button>
      			</td>   
		      </tr>
    </tbody>
  </table>
</div>

<div class="modal fade" id="editar_modulo" tabindex="-1" role="dialog" aria-labelledby="editar_modulo" aria-hidden="true">
   <div class="modal-dialog modal-lm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title" id="myModalLabeledit">Editar Persona</h4>
            </div>

                <div class="panel-body">
                  
                    <div class="row">
                     <div class="col-md-12">
					 <div class="form-group">
                           <label for="albun">Id:</label>
                           <input type="text" class="form-control id" id="id" name="id" ng-model="persona.id" readonly>
                           </div>

                           <div class="form-group">
                           <label for="albun">Nombre:</label>
                           <input type="text" class="form-control nombre" id="nombre" name="nombre"  ng-model="persona.nombre" required>
                           </div>

                           <div class="form-group">
                           <label for="portada">Apellido:</label>
                           <input type="text" class="form-control apellido" id="apellido" name="apellido" ng-model="persona.apellido" required>
                           </div>        

                    </div>
                </div>
            <div class="modal-footer">
               
               <button class="btn btn-primary" data-title="editar_modulo" data-toggle="modal" ng-click="modificar()">Modificar</button>

               <button type="button" class="btn btn-warning" data-dismiss="modal">Cancelar
                </button>

            </div>
          

       </div>
    </div>
</div>
</div>


<div class="modal fade" id="guardar_modulo" tabindex="-1" role="dialog" aria-labelledby="guardar_modulo" aria-hidden="true">
   <div class="modal-dialog modal-lm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title" id="myModalLabeledit">Guardar Persona</h4>
            </div>

                <div class="panel-body">
                 
                    <div class="row">
                     <div class="col-md-12">
					 <div class="form-group">
                           <label for="albun">Id:</label>
                           <input type="text" class="form-control id" id="id" name="id" ng-model="persona.id" readonly>
                           </div>

                           <div class="form-group">
                           <label for="albun">Nombre:</label>
                           <input type="text" class="form-control nombre" id="nombre" name="nombre"  ng-model="persona.nombre" required>
                           </div>

                           <div class="form-group">
                           <label for="portada">Apellido:</label>
                           <input type="text" class="form-control apellido" id="apellido" name="apellido" ng-model="persona.apellido" required>
                           </div>

                          

                    </div>
                </div>
            <div class="modal-footer">
               
               <button class="btn btn-primary" data-title="editar_modulo" data-toggle="modal" ng-click="guardar()">Guardar</button>

               <button type="button" class="btn btn-warning" data-dismiss="modal">Cancelar
                </button>

            </div>
         

       </div>
    </div>
</div>
</div>

</body>
</html>




