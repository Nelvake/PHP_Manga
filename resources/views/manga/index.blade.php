@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="jumbotron col">
                <div class="d-flex flex-row justify-content-around flex-wrap flex-row">
                    @foreach ($mangas as $manga)
                        <div class="card rounded mt-4" style="max-width: 500px;">
                            <div class="card-header">{{ $manga->name }}</div>
                            <div class="row no-gutters p-4">
                                <div class="col-sm-5">
                                    <img src="{{ $manga->image_url }}" class="card-img-top" alt="...">
                                </div>
                                <div class="col-sm-7">
                                    <div class="card-body pl-4 p-0">
                                        <div>
                                            <div>
                                                <strong>Тип</strong>
                                                <span>Манга</span>
                                            </div>
                                            <div>
                                                <strong>Автор</strong>
                                                <a href="#">{{ $manga->author }}</a>
                                            </div>

                                            <div>
                                                <strong>Художник</strong>
                                                <a href="#">{{ $manga->painter }}</a>
                                            </div>

                                            <div>
                                                <strong>Издатель</strong>
                                                <a href="#">{{ $manga->publisher }}</a>
                                            </div>
                                            <div>
                                                <strong>Жанр</strong>
                                                <a href="#">{{ $manga->genre }}</a>
                                            </div>

                                            <div>
                                                <strong>Описание</strong>
                                                <p>{{ $manga->description }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pl-4 p-0">
                                        <div class="btn-group btn-group-sm float-right" role="group"
                                            aria-label="Basic example">
                                            <a href='/manga/{{ $manga->id }}' class="btn btn-secondary">
                                                Add to Favorite
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>


    
@endsection
