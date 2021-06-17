@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Roles por usuario</h2>
        <div class="inline-block mr-2 mt-2">
            <div class="col-lx-12">
                <form action="{{route('role_user.index')}}" method="get">
                    <div class="form-row">
                        <div class="col-sm-4 my-1">
                            <input type="text" class="form-control" name="text" value="{{$text}}">
                        </div>
                        <div class="col-auto my-1">
                            <input type="submit" class="btn btn-primary" value="Buscar">
                        </div>
                        <div class="col-auto my-1">
                            <a href="{{route('user.create')}}" class="btn btn-success">Insertar</a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-xl-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($users)<=0)
                                <tr>
                                    <td colspan="4">No hay resultados</td>
                                </tr>
                            @else
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>
                                        <div class="form-row">
                                            <form action="{{route('user.edit',$user->id)}}" method="post">
                                                @csrf
                                                @method('GET')
                                                <input type="submit" class="btn btn-warning btn-sm mx-3" value="Editar">
                                            </form>
                                            <!-- <a href="{{route('user.edit',$user->id)}}" class="btn btn-warning btn-sm">Editar</a> -->

                                            <form action="{{route('user.destroy',$user->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" class="btn btn-danger btn-sm mx-3" value="Eliminar">
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                    {{$users->links()}}
                </div>
            </div>
        </div>
    </div>
    @endsection