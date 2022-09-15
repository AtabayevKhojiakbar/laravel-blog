@extends('master')
@section('content')

    <div class="container">
        <h1 class="text text-primary text-center  mb-0 mt-3">Yangi birnarsa o'zgartirish</h1>
        <div class="d-flex">
            @if($errors->any())

                @foreach($errors->all() as $e)
                    <h3 class="text-danger">{{$e}}</h3>
                @endforeach
            @endif
            <form method="post" action="{{route('test2.update',$data->id)}}" enctype="multipart/form-data" class="w-100 m-3 mt-0 p-5" >
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="title" class="form-label" >Post mavzusi:</label>
                    <input type="text" name="title" value="{{$data->title}}" required class="form-control" id="title">
                </div>
                <div class="mb-3">
                    <label for="texti" class="form-label">Post matni:</label>
                    <textarea name="text" id="texti" required cols="100" rows="10" class="form-control">{{$data->name}}</textarea>
                </div>
                <div class="mb-3">
                    <img src='{{asset("images/$data->img")}}' class="img" style="width: 200px;height: 200px;" alt="rasm">
                </div>
                <div class="mb-3">
                    <label for="img" class="form-label">Post rasmini yuklang:</label>
                    <input type="file" name="img"  class="form-control" id="img">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
