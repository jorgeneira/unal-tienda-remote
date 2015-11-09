<div class="col col-xs-12">
    <header>
        <h1>Enviar Pedido</h1>
        <hr>
    </header>
    <div class="row">
        <div class="col col-xs-12 col-md-6 center-block" style="float: none;">
            {!! Form::open(['url' => route('pedido.store')]) !!}

            <div class="form-group">
                <label for="nombre">Nombre: </label>
                <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="pedido[nombre]" required>
            </div>

            <div class="form-group">
                <label for="email">Email: </label>
                <input type="email" class="form-control" id="email" placeholder="Email" name="pedido[email]" required>
            </div>

            <div class="form-group">
                <label for="producto">Producto: </label>
                <select name="pedido[producto]" id="producto" class="form-control" required>
                    <option value=""> -- Selecciona Pedido --</option>
                    <option value="Cuarto Frio Moderno">Cuarto Frio Moderno</option>
                    <option value="Cuarto Frio Clasico">Cuarto Frio Clasico</option>
                    <option value="Cuarto Frio Basico">Cuarto Frio Basico</option>
                    <option value="Cocina Moderna">Cocina Moderna</option>
                    <option value="Cocina Clasica">Cocina Clasica</option>
                    <option value="Cocina Basico">Cocina Basico</option>
                </select>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Enviar</button>

            </div>

            {!! Form::close() !!}
        </div>
    </div>
</div>