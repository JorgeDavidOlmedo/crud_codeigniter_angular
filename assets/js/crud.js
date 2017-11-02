var app = angular.module('crud',[]);
app.controller('ejemplo',function($scope,$http){

    $scope.persona = {
    	id:0,
    	nombre:'',
    	apellido:''
    };

    $scope.editar = function(id){
        $http.get('http://localhost/crud_codeigniter_angular/Persona/persona/'+id+'/').then(function (data) {
               $scope.persona = data.data[0];
               $("#editar_modulo").modal();
               
            });
    }

    $scope.personas = [];
    $scope.buscarPersonas = function(){
        $http.get('http://localhost/crud_codeigniter_angular/Persona/personas/').then(function (data) {
               $scope.personas = data.data;
            });
    }

    $scope.guardarModal = function(){
    	$("#guardar_modulo").modal();
    }

    $scope.verificar = function(){
    	if($scope.persona.nombre ==''){
    		alert('Debes Completar el nombre');
    		return false;
    	}

    	if($scope.persona.apellido ==''){
    		alert('Debes Completar el apellido');
    		return false;
    	}

    	return true;
    }

    $scope.guardar = function(){
    	if($scope.verificar()){
    		$http.post('http://localhost/crud_codeigniter_angular/Persona/guardar/',$scope.persona).then(function (data) {
               $("#guardar_modulo").modal("hide");
               $scope.buscarPersonas();
            });
    	}
    }

    $scope.modificar = function(){
    	if($scope.verificar()){
    		$http.post('http://localhost/crud_codeigniter_angular/Persona/modificar/',$scope.persona).then(function (data) {
               $("#editar_modulo").modal("hide");
               $scope.buscarPersonas();
            });
    	}
    }

    $scope.borrar = function(id){
    	swal({
            title: "Deseas Anular el registro?",
            text: "Atencion. al anular el registro ya no podras recuperarlo!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Si, eliminar!",
            closeOnConfirm: true
        }, function () {

        	$http.get('http://localhost/crud_codeigniter_angular/Persona/borrar/'+id+'/').then(function (data) {
               $scope.buscarPersonas();
            });
           
        });
    }


    $scope.buscarPersonas();
});
