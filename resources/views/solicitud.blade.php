@extends('layouts.layout')

@section('content')
<center>
    <br><br><br>
    <form>
        <div class="card bg-light mb-3" style="max-width: 18rem;">
            <div class="card-header">SOLICITUD</div>
            <div class="card-body">
                <div class="form-group">
                    <label for="fecha">Fecha:</label>
                    <input type="date" class="form-control" id="fecha">
                </div>
                <div class="form-group">
                    <label for="capacidadRequerida">Capacidad Requerida:</label>
                    <select class="form-control" id="capacidadRequerida">
                        <option>Seleccionar</option>
                        <option>01 - 10</option>
                        <option>11 - 20</option>
                        <option>21 - 30</option>
                        <option>31 - 40</option>
                        <option>41 - 50</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="prioridadNormal">Prioridad:</label>
                    <select class="form-control" id="prioridadNormal">
                        <option>Seleccionar</option>
                        <option>Normal</option>
                        <option>Emergencia</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
</center>
</div>
</div>
</form>
@endsection()
