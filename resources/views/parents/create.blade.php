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
                        <input id="parent_search_input" type="text" class="form-control">
                        <input id="parent_id" value="" type="hidden" class="form-control">
                        <br>
                        <!-- Button trigger modal -->
                        @include('parents.createmodal')
                        <button type="button" id="parent_search_button" class="btn btn-primary">
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
                                    <td id="diplay_parent_firstname"></td>
                                </tr>
                                <tr>
                                    <th scope="row">Apellido</th>
                                    <td id="diplay_parent_lastname"></td>
                                </tr>
                                <tr>
                                    <th scope="row">Cedula</th>
                                    <td colspan="2" id="diplay_parent_id"></td>
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
        function ajaxGet(url,callback) {
          return $.ajax({
            url: url,
            type: 'GET',
            success: callback
          });
        }

        function parentSearchUrl() {
            var id = $('#parent_search_input').val();
            return "http://localhost/pagosfutbol/public/parents/search/"+id;
        }

        function parentSearchCallback(data){
            $("#diplay_parent_firstname").text(data.name);
            $("#diplay_parent_lastname").text(data.lastname);
            $("#diplay_parent_id").text(data.id);
            $("#parent_id").val(data.id);
        }

        $("#parent_search_button").bind( "click", function(){
            ajaxGet(parentSearchUrl(),parentSearchCallback);
        });

        $("#parent_search_input").bind( "keypress", function(e){
            if(e.which === 13){
                //Disable textbox to prevent multiple submit
                $(this).attr("disabled", "disabled");

                ajaxGet(parentSearchUrl(),parentSearchCallback);

                //Enable the textbox again if needed.
                $(this).removeAttr("disabled");
            }
        });

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


