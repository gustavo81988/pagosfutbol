@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Registrar Representante</div>

                <div class="card-body">
                    <!-- Button trigger modal -->
                    @include('parents.createmodal')
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                      Agregar Representante
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection