@include('layouts.validacao')
<div class="row">
    <div class="col-xs-12 col-sm-6 col-md-6">
        <div class="form-group">
            <label for="nome" class="control-label">Nome:</label>
            <input type="text"
                    name="nome"
                    id="nome"
                    value="{{ isset( $registro->nome) ? $registro->nome : ''}}"
                    class="form-control @erro('nome') is-invalid @enderror"/>
                    @error('nome')
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
            <label for="idade" class="control-label">Idade:</label>
            <input type="text"
                    name="idade"
                    id="idade"
                    value="{{ isset( $registro->idade) ? $registro->idade : ''}}"
                    class="form-control @erro('idade') is-invalid @enderror"/>
                    @error('idade')
                    <div class="invalid-feedback">
                        <span><strong>{{$message}}</strong></div>
                    </div>                        
                    @enderror
        </div>
    </div>
</div>
