@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card" style="height: 32rem;">
        <div class="card-body">
            <h5 class="card-title">Заголовок карточки</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod voluptate inventore qui autem vero quidem, minus laborum fugiat? Laudantium vero esse quaerat voluptatum beatae quis, voluptates iusto adipisci eum. Soluta. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus ea dolorum obcaecati voluptatem exercitationem rem incidunt hic quo et ratione sunt, rerum fuga expedita tempore. Dolorem natus quisquam in id! Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos id totam possimus. Iste unde blanditiis, consequuntur suscipit non, optio, obcaecati provident quisquam ea nam quos soluta. Eaque voluptatibus aut a?</p>
        </div>
    </div>

    <div id="carouselExampleIndicators" class="carousel slide" style="margin: 10px">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
        </div>

        <div class="carousel-inner mx-auto">
            @foreach($product as $item)
                @if($loop->index==0)
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{$item->img}}" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="text-danger">{{$item->name}}</h5>
                                    <p class="text-danger">{{$item->price}} рублей</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="carousel-inner">
                        <div class="carousel-item">
                            <img src="{{$item->img}}" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="text-danger">{{$item->name}}</h5>
                                    <p class="text-danger">{{$item->price}} рублей</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev" style="background-color: black; width: 50px; height: 50px; margin-top: auto; margin-bottom: auto">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Предыдущий</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next" style="background-color: black; width: 50px; height: 50px; margin-top: auto; margin-bottom: auto">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Следующий</span>
        </button>
    </div>
</div>
@endsection

