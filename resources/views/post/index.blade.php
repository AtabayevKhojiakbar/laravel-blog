@extends('.master')
@section('content')
    <div class="container">
        <h1 class="text text-primary text-center">Postlar ro'yhati</h1>
        <a href="{{route('adminpost.create')}}" class="btn btn-success float-right m-1">Yangi post yaratish</a>

        <table class="table table-bordered border-1 table-striped table-hover">
            <tr>
                <th>#</th>
                <th>Tite</th>
                <th>Ko'rilgan soni</th>
                <th>Rasm</th>
                <th>Amal</th>
            </tr>

            @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->view}}</td>
                    <td>
                        <img src='{{asset("posts/images/$post->img")}}' style="width: 100px; height: 100px;" alt="">
                        </td>
                    <td>
                        <div class="d-flex ">
                        <a href="{{route('adminpost.edit',$post->id)}}" class="btn btn-warning m-1">
                            <i class="fas fa-pen"></i>
                        </a>
                        <form action="{{route('adminpost.destroy',$post->id)}}" class="m-1" method="post">
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
