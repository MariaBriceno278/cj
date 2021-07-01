@extends('layouts.layout')

@section('content')
<center>


    <div class="card border-success mb-3" style="max-width: 18rem;">
        <div class="card-header bg-transparent border-success">Rol</div>
        <div class="card-body text-success">

                <label for="nombreRol">Nombre:</label>
                <select class="form-control" id="nombreRol">
                    <option>Seleccionar</option>
                    <option>Jefe administrador de salas</option>
                    <option>Administrador de salas</option>
                    <option>Juez</option>
                    <option>Secretario del juezgado</option>
                    <option>Oficial mayor</option>
                </select>


                <label for="estadoRol">Estado:</label>
                <select class="form-control" id="estadoRol">
                    <option>Seleccionar</option>
                    <option>Activo</option>
                    <option>Inactivo</option>
                </select>

            <button type="submit" class="btn btn-primary">Guardar</button></div>
</center>
</div>
        </div>


    <br><br><br>

@endsection()
