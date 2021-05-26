@include('layouts.validacao')
<div class="row">
    <div class="col-xs-12 col-sm-6 col-md-6">
        <div class="form-group">
            <label for="usuario_id" class="control-label">usuario_id:</label>
            <select type="text" name="usuario_id" id="usuario_id" class="form-control @erro('usuario_id') is-invalid @enderror"/>>
                @foreach ($usuarios as $usuario)
                    <option value="{{$usuario->id}}">{{$usuario->nome}}</option>                    
                @endforeach
            </select>
            @error('usuario_id')
            <div class="invalid-feedback">
                <span><strong>{{$message}}</strong></div>
            </div>                        
            @enderror
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-6 col-md-6">
        <div class="form-group">
            <label for="formulario_id" class="control-label">formulario_id:</label>
            <select type="text" name="formulario_id" id="formulario_id" class="form-control @erro('formulario_id') is-invalid @enderror"/>>
                @foreach ($formularios as $formulario)
                    <option value="{{$formulario->id}}">{{$formulario->nome}}</option>                    
                @endforeach
            </select>
            @error('formulario_id')
            <div class="invalid-feedback">
                <span><strong>{{$message}}</strong></div>
            </div>                        
            @enderror
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-6 col-md-6">
        <div class="form-group">
            <label for="respondido" class="control-label">respondido:</label>
            <input type="text"
                    name="respondido"
                    id="respondido"
                    value="{{ isset( $registro->respondido) ? $registro->respondido : ''}}"
                    class="form-control @erro('respondido') is-invalid @enderror"/>

        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-6 col-md-6">
        <div class="form-group">
            <label for="usuario" class="control-label">usuario:</label>
            <input type="text"
                    name="usuario"
                    id="usuario"
                    value="{{ isset( $registro->usuario) ? $registro->usuario : ''}}"
                    class="form-control @erro('usuario') is-invalid @enderror"/>
                    @error('usuario')
                    <div class="invalid-feedback">
                        <span><strong>{{$message}}</strong></div>
                    </div>                        
                    @enderror
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-6 col-md-6">
        <div class="form-group">
            <label for="formulario" class="control-label">formulario:</label>
            <input type="text"
                    name="formulario"
                    id="formulario"
                    value="{{ isset( $registro->formulario) ? $registro->formulario : ''}}"
                    class="form-control @erro('formulario') is-invalid @enderror"/>
                    @error('formulario')
                    <div class="invalid-feedback">
                        <span><strong>{{$message}}</strong></div>
                    </div>                        
                    @enderror
        </div>
    </div>
</div>
