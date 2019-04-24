@extends("layouts.layout")
@section("title","Agregar Genero")

@section("content")
    <div class="row justify-content-md-center">
        <div class="col">
            <a class="btn btn-success" href="{{url("generos")}}"><i class="fa fa-backspace"></i></a>
        </div>
    </div>
    <a  href="{{url("generos")}}">regresar</a>
    <div class="row justify-content-md-center">
        <div class="col-8">
            <form action="{{url("generos")}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="descripcion">Descripcion</label>
                    <input type="text" id="descripcion" name="descripcion" class="form-control"  placeholder="Descripcion">
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>

@endsection