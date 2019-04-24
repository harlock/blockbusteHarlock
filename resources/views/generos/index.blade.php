@extends("layouts.layout")
@section("title","Generos")

@section("content")
    <div class="row justify-content-md-center">
        <div class="col">
            <a class="btn btn-success" href="{{url("generos/create")}}"><i class="fa fa-plus"></i></a>
        </div>
    </div>
    <a href="{{url("generos/create")}}">nuevo</a>
    <div class="row justify-content-md-center">
        <div class="col-8">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Descripcion</th>
                        <th colspan="2">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($generos as $genero)
                    <tr>
                        <td>{{$genero->id_genero}}</td>
                        <td>{{$genero->descripcion}}</td>
                        <td>
                            <form action="{{route("generos.destroy",$genero->id_genero)}}" method="post">
                                @csrf
                                @method("DELETE")
                                <button class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button>
                            </form>
                        </td>
                        <td></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection