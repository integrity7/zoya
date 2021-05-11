@extends('layouts.layout')

@section('content')
    @if(isset($_GET['search']))
        @if(count($posts)>0)
            <h2>Результаты поиска по запросу <?=$_GET['search']?></h2>
            <p class="lead">Всего найдено {{ count ($posts) }} постов</p>
        @else
            <h2>По запросу <?=$_GET['search']?> ничего не найдено</h2>
            <a href="{{ route('post.index') }}" class="btn btn-outline-primary">Отобразить все посты</a>

        @endif

    @endif



    <div class="row">
        @foreach($posts as $post)
        <div class="col-6">
            <div class="card">
                <div class="card-header"><h2>{{ $post->title }}</h2></div>
                <div class="card-body">
                  <div class="card-img"
                       style="background-image: url({{ $post->img ? asset('/storage/'.$post->img) : asset('/assets/images/default.jpg') }})">
                  </div>
                </div>
                <div class="card-author">Автор: {{ $post->name }}</div>
                <a href="{{ route('post.show', $post->id) }}" class="btn btn-outline-primary">Посмотреть пост</a>
            </div>
        </div>
        @endforeach
    </div>
    @if(!isset($_GET['search']))
    {{$posts -> links()}}
    @endif
@endsection
