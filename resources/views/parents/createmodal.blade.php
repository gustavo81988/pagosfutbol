<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Agregar Representar</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
      
        <div class="modal-body">
            <form method="POST" action="<?= action('ParentsController@store');?>">
              @csrf

              <div class="form-group row">
                  <label for="name" class="col-md-4 col-form-label text-md-right">Nombre</label>

                  <div class="col-md-6">
                      <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                      @if ($errors->has('name'))
                          <span class="invalid-feedback">
                              <strong>{{ $errors->first('name') }}</strong>
                          </span>
                      @endif
                  </div>
              </div>
              
              <div class="form-group row">
                  <label for="lastname" class="col-md-4 col-form-label text-md-right">Apellido</label>

                  <div class="col-md-6">
                      <input id="lastname" type="text" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" name="lastname" value="{{ old('lastname') }}" required autofocus>

                      @if ($errors->has('lastname'))
                          <span class="invalid-feedback">
                              <strong>{{ $errors->first('lastname') }}</strong>
                          </span>
                      @endif
                  </div>
              </div>
              
              <div class="form-group row">
                  <label for="ci" class="col-md-4 col-form-label text-md-right">Cédula de identidad</label>

                  <div class="col-md-6">
                      <input id="ci" type="text" class="form-control{{ $errors->has('ci') ? ' is-invalid' : '' }}" name="ci" value="{{ old('ci') }}" required autofocus>

                      @if ($errors->has('ci'))
                          <span class="invalid-feedback">
                              <strong>{{ $errors->first('ci') }}</strong>
                          </span>
                      @endif
                  </div>
              </div>
              
              <div class="form-group row">
                  <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

                  <div class="col-md-6">
                      <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                      @if ($errors->has('email'))
                          <span class="invalid-feedback">
                              <strong>{{ $errors->first('email') }}</strong>
                          </span>
                      @endif
                  </div>
              </div>
              
              <div class="form-group row">
                  <label for="phone" class="col-md-4 col-form-label text-md-right">Telefono</label>

                  <div class="col-md-6">
                      <input id="phone"  type="text" pattern="\d*" maxlength="14" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required>

                      @if ($errors->has('phone'))
                          <span class="invalid-feedback">
                              <strong>{{ $errors->first('phone') }}</strong>
                          </span>
                      @endif
                  </div>
              </div>

              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              </div>
            </form>
        </div>
        </div>
    </div>
</div>