
                <div class="form-group">

                        <label for="NombreDepartamento" class="control-label">{{'NombreDepartamento'}}</label>
                        <input type="text" class="form-control {{$errors->has('NombreDepartamento')?'is-invalid':''}}" 
                        name="NombreDepartamento" id="NombreDepartamento" 
                        value="{{isset($departamento->NombreDepartamento)?$departamento->NombreDepartamento:old('NombreDepartamento') }}">
                        {!! $errors->first('NombreDepartamento','<div class="invalid-feedback">:message</div>') !!}
                </div>
                
                      <input type="submit" class="btn btn-success" value="{{ $Modo=='crear' ? 'Agregar':'Modificar' }}">

                        <a class="btn btn-primary" href="{{ url('departamentos') }}"> Regresar</a>
                
            