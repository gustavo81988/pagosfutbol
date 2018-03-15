@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Asignar Representante
                </div>
                
                <div class="card-body">
                    <div class="row">

                    <div class="col-md-5">

                        <div class="form-group">
                            <strong>Alumno:</strong> {{$player->name}} {{$player->lastname}}<br>
                            <strong>Cedula de identidad:</strong> {{$player->ci}}
                        </div>

                        Cedula representante: <br>
                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                        <br>
                        <!-- Button trigger modal -->
                        @include('parents.createmodal')
                        <button type="button" name="searchparent" class="btn btn-primary">
                          Buscar
                        </button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                          Nuevo
                        </button>
                        
                    </div>
                    <div class="col-md-7">
                        <table class="table table-condensed"> 
                            <thead> 
                                <tr> 
                                    <th>Datos representante</th>
                                    <th></th>
                                </tr> 
                            </thead> 

                            <tbody> 
                                <tr> 
                                    <th scope="row">Nombre</th>
                                    <td>Gustavo</td>
                                </tr> 
                                <tr> 
                                    <th scope="row">Apellido</th> 
                                    <td>Ramirez</td> 
                                </tr> 
                                <tr> 
                                    <th scope="row">Cedula</th> 
                                    <td colspan="2">18351089</td> 
                                </tr> 
                            </tbody> 
                        </table>
                        <button type="button" class="btn btn-primary">
                          Asignar
                        </button>
                    </div>
                    
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        
    });
</script>
@endsection


