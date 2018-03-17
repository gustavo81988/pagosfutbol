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
                            <strong>Cedula de identidad:</strong> {{$player->id}}
                        </div>

                        Cedula representante: <br>
                        <input id="" type="text" class="form-control">
                        <input id="parent_id" value="20122333" type="hidden" class="form-control">
                        <br>
                        <!-- Button trigger modal -->
                        @include('parents.createmodal')
                        <button type="button" id="searchparent" class="btn btn-primary">
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
                                    <td colspan="2">20122333</td> 
                                </tr> 
                            </tbody> 
                        </table>
                        <button id="assignparent" type="button" class="btn btn-primary">
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
        $("#assignparent").bind( "click", function() {
            
            var parent_id = $('#parent_id').val();
            var player_id = {{$player->id}};
            
            $.ajax({
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "<?= action('PlayerController@updateParent');?>",
                data: { parent_id: parent_id, player_id:player_id  },
                dataType : 'json', 
                success: function(){
                    
                }
            });
        });
    });
</script>
@endsection


