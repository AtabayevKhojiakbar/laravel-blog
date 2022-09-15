@extends('master')
@section('content')
    <div class="container">
        <h1 class="text text-primary text-center">Barcha birnarsalar ro'yhati</h1>
        <a href="{{route('test2.create')}}" class="btn btn-success float-right m-1">Yangi narsa yaratish</a>

        <table class="table table-bordered border-1 table-striped table-hover">
            <tr>
                <th>#</th>
                <th>Tite</th>
                <th>Text</th>
                <th>Rasm</th>
                <th>Amal</th>
            </tr>

            @foreach($all as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->name}}</td>
                    <td>
                        <img src='{{asset("images/$post->img")}}' style="width: 100px; height: 100px;" alt="">
                    </td>
                    <td>
                        <div class="d-flex ">
                            <a href="{{route('test2.show',$post->id)}}" class="btn btn-info m-1">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="{{route('test2.edit',$post->id)}}" class="btn btn-warning m-1">
                                <i class="fas fa-pen"></i>
                            </a>
                            <form action="{{route('test2.destroy',$post->id)}}" class="m-1" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </div>

                    </td>
                </tr>

            @endforeach
        </table>
    </div>


@endsection
