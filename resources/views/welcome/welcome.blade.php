@extends('layouts.app')

@section('content')

<div class="hero hero--base">
    <div class="container">
        <div class="hero__content">
            <div class="hero__headline">Aprende algo nuevo</div>
            <div class="hero__text">Estudia cualquier tema en cualquier momento. <br> Explora miles de cursos.</div>
            {{-- {!! Form::open(['route' => 'blog', 'method' => 'GET']) !!} --}}
            <div class="input-group mb-3">
                {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => '¿Que te gustaría Aprender?'])!!}
                <div class="input-group-append">
                    <button class="btn btn-light" type="submit"><i class="fas fa-search"></i></button>
                </div>
            </div>
            {{-- {!! Form::close() !!} --}}
        </div>
    </div>
</div>

<div class="container">
    <div class="row py-4">
        <div class="col-md-12">

            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-Desarollo-tab" data-toggle="pill" href="#pills-Desarollo" role="tab" aria-controls="pills-Desarollo" aria-selected="true">Desarollo</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link " id="pills-Desarollo-tab" data-toggle="pill" href="#pills-Desarollo" role="tab" aria-controls="pills-Desarollo" aria-selected="true">Diseño</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link " id="pills-Desarollo-tab" data-toggle="pill" href="#pills-Desarollo" role="tab" aria-controls="pills-Desarollo" aria-selected="true">Negocios</a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link " id="pills-Desarollo-tab" data-toggle="pill" href="#pills-Desarollo" role="tab" aria-controls="pills-Desarollo" aria-selected="true">Marketing</a>
                            </li>
                            <li class="nav-item">
                                    <a class="nav-link " id="pills-Desarollo-tab" data-toggle="pill" href="#pills-Desarollo" role="tab" aria-controls="pills-Desarollo" aria-selected="true">Fotografía</a>
                                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" id="pills-Diseño-tab" data-toggle="pill" href="#pills-Diseño" role="tab" aria-controls="pills-Diseño" aria-selected="false">Diseño</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-Negocios-tab" data-toggle="pill" href="#pills-Negocios" role="tab" aria-controls="pills-Negocios" aria-selected="false">Negocios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-Marketing-tab" data-toggle="pill" href="#pills-Marketing" role="tab" aria-controls="pills-Marketing" aria-selected="false">Marketing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-Fotografía-tab" data-toggle="pill" href="#pills-Fotografía" role="tab" aria-controls="pills-Fotografía" aria-selected="false">Fotografía</a>
                </li> --}}
            </ul>

            <hr>

            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-Desarollo" role="tabpanel" aria-labelledby="pills-Desarollo-tab">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-3">
                                        <a href="{{route('course-details')}}" class="link-card">
                                            <div class="card" style="width: 16rem;">
                                                <img src="https://i.udemycdn.com/course/240x135/1209326_ca41_2.jpg" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <div class="card-title h5">Curso Completo de Desarrollo ASP.NET MVC</div>
                                                    <div class="card-text text-muted">Ángel Arias</div>
                                                    <div class="mt-2 mb-2">
                                                        <span class="text-warning">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star-half-alt"></i>
                                                        </span>
                                                        {{-- <i class="far fa-star"></i> --}}
                                                        <small>4,5 <span class="text-muted">(1.200)</span></small>
                                                    </div>
                                                    <span class="float-right">$870 MX</span>
                    
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                    
                                    <div class="col-md-3">
                                        <a href="{{route('course-details')}}" class="link-card">
                                            <div class="card" style="width: 16rem;">
                                                <img src="https://i.udemycdn.com/course/240x135/1894936_31a7.jpg" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <div class="card-title h5">PWA - Aplicaciones Web Progresivas: De cero a...</div>
                                                    <div class="card-text text-muted">Fernando Herrera</div>
                                                    <div class="mt-2 mb-2">
                                                        <span class="text-warning">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            {{-- <i class="fas fa-star-half-alt"></i> --}}
                                                            <i class="far fa-star"></i>
                                                        </span>
                                                        {{-- <i class="far fa-star"></i> --}}
                                                        <small>4 <span class="text-muted">(560)</span></small>
                                                    </div>
                                                    <span class="float-right">$620 MX</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                    
                                    <div class="col-md-3">
                                        <a href="{{route('course-details')}}" class="link-card">
                                            <div class="card" style="width: 16rem;">
                                                <img src="https://i.udemycdn.com/course/240x135/2069857_a16d_5.jpg" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <div class="card-title h5">Master en SQL Server: Desde Cero a Nivel...</div>
                                                    <div class="card-text text-muted">Mariano Puglisi</div>
                                                    <div class="mt-2 mb-2">
                                                        <span class="text-warning">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star-half-alt"></i>
                                                        </span>
                                                        {{-- <i class="far fa-star"></i> --}}
                                                        <small>4,8 <span class="text-muted">(1.950)</span></small>
                                                    </div>
                                                    <span class="float-right">$1.170 MX</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                    
                                    <div class="col-md-3">
                                        <a href="{{route('course-details')}}" class="link-card">
                                            <div class="card" style="width: 16rem;">
                                                <img src="https://i.udemycdn.com/course/240x135/1606018_069c.jpg" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <div class="card-title h5">Curso completo de Machine Learning: Data...</div>
                                                    <div class="card-text text-muted">Juan Gabriel Gomila Salas</div>
                                                    <div class="mt-2 mb-2">
                                                        <span class="text-warning">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star-half-alt"></i>
                                                        </span>
                                                        {{-- <i class="far fa-star"></i> --}}
                                                        <small>4,5 <span class="text-muted">(1.200)</span></small>
                                                    </div>
                                                    <span class="float-right">$2.270 MX</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                    
                                </div>
                            </div>
                    
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-3">
                                        <a href="{{route('course-details')}}" class="link-card">
                                            <div class="card" style="width: 16rem;">
                                                <img src="https://i.udemycdn.com/course/240x135/782428_b5cf_3.jpg" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <div class="card-title h5">Diseño Web Profesional El Curso Completo...</div>
                                                    <div class="card-text text-muted">Carlos Arturo Esparza</div>
                                                    <div class="mt-2 mb-2">
                                                        <span class="text-warning">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star-half-alt"></i>
                                                        </span>
                                                        {{-- <i class="far fa-star"></i> --}}
                                                        <small>4,5 <span class="text-muted">(1.200)</span></small>
                                                    </div>
                                                    <span class="float-right">$1.750 MX</span>
                    
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-md-3">
                                        <a href="{{route('course-details')}}" class="link-card">
                                            <div class="card" style="width: 16rem;">
                                                <img src="https://i.udemycdn.com/course/240x135/882422_0549_9.jpg" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <div class="card-title h5">Curso Maestro de Python 3: Aprende Desde Cero</div>
                                                    <div class="card-text text-muted">Hector Costa</div>
                                                    <div class="mt-2 mb-2">
                                                        <span class="text-warning">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star-half-alt"></i>
                                                        </span>
                                                        {{-- <i class="far fa-star"></i> --}}
                                                        <small>4,5 <span class="text-muted">(1.200)</span></small>
                                                    </div>
                                                    <span class="float-right">$1.750 MX</span>
                    
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                    
                                    <div class="col-md-3">
                                        <a href="{{route('course-details')}}" class="link-card">
                                            <div class="card" style="width: 16rem;">
                                                <img src="https://i.udemycdn.com/course/240x135/957106_270f_6.jpg" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <div class="card-title h5">Programación de Android desde Cero +35 horas...</div>
                                                    <div class="card-text text-muted">Jose Javier Villena</div>
                                                    <div class="mt-2 mb-2">
                                                        <span class="text-warning">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star-half-alt"></i>
                                                        </span>
                                                        {{-- <i class="far fa-star"></i> --}}
                                                        <small>4,5 <span class="text-muted">(1.200)</span></small>
                                                    </div>
                                                    <span class="float-right">$2.270 MX</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                    
                                    <div class="col-md-3">
                                        <a href="{{route('course-details')}}" class="link-card">
                                            <div class="card" style="width: 16rem;">
                                                <img src="https://i.udemycdn.com/course/240x135/1075334_8b5f_4.jpg" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <div class="card-title h5">Angular: De cero a experto creando...</div>
                                                    <div class="card-text text-muted">Fernando Herrera</div>
                                                    <div class="mt-2 mb-2">
                                                        <span class="text-warning">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            {{-- <i class="fas fa-star-half-alt"></i> --}}
                                                            <i class="far fa-star"></i>
                                                        </span>
                                                        {{-- <i class="far fa-star"></i> --}}
                                                        <small>4 <span class="text-muted">(560)</span></small>
                                                    </div>
                                                    <span class="float-right">$1.500 MX</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                
                            </div>
                    
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-3">
                                        <a href="{{route('course-details')}}" class="link-card">
                                            <div class="card" style="width: 16rem;">
                                                <img src="https://i.udemycdn.com/course/240x135/980450_7fc0_3.jpg" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <div class="card-title h5">Desarrollo Web Completo con HTML5, CSS3, JS...</div>
                                                    <div class="card-text text-muted">Juan Pablo De la torre Valdez</div>
                                                    <div class="mt-2 mb-2">
                                                        <span class="text-warning">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            {{-- <i class="fas fa-star-half-alt"></i> --}}
                                                            <i class="far fa-star"></i>
                                                        </span>
                                                        {{-- <i class="far fa-star"></i> --}}
                                                        <small>4 <span class="text-muted">(560)</span></small>
                                                    </div>
                                                    <span class="float-right">$920 MX</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <i class="fas fa-angle-left"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <i class="fas fa-angle-right"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row py-2">
        <div class="col-md-12">
            <div class="h5">Cursos destacados</div>
            <div class="row">
                <div class="col-md-3">
                    <a href="{{route('course-details')}}" class="link-card">
                        <div class="card" style="width: 16rem;">
                            <img src="https://i.udemycdn.com/course/240x135/782428_b5cf_3.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <div class="card-title h5">Diseño Web Profesional El Curso Completo</div>
                                <div class="card-text text-muted">Carlos Arturo Esparza</div>
                                <div class="mt-2 mb-2">
                                    <span class="text-warning">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </span>
                                    {{-- <i class="far fa-star"></i> --}}
                                    <small>4,5 <span class="text-muted">(1.200)</span></small>
                                </div>
                                <span class="float-right">$1.750 MX</span>

                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-3">
                    <a href="{{route('course-details')}}" class="link-card">
                        <div class="card" style="width: 16rem;">
                            <img src="https://i.udemycdn.com/course/240x135/882422_0549_9.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <div class="card-title h5">Curso Maestro de Python 3: Aprende Desde Cero</div>
                                <div class="card-text text-muted">Hector Costa</div>
                                <div class="mt-2 mb-2">
                                    <span class="text-warning">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </span>
                                    {{-- <i class="far fa-star"></i> --}}
                                    <small>4,5 <span class="text-muted">(1.200)</span></small>
                                </div>
                                <span class="float-right">$1.750 MX</span>

                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-3">
                    <a href="{{route('course-details')}}" class="link-card">
                        <div class="card" style="width: 16rem;">
                            <img src="https://i.udemycdn.com/course/240x135/957106_270f_6.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <div class="card-title h5">Programación de Android desde Cero +35 horas...</div>
                                <div class="card-text text-muted">Jose Javier Villena</div>
                                <div class="mt-2 mb-2">
                                    <span class="text-warning">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </span>
                                    {{-- <i class="far fa-star"></i> --}}
                                    <small>4,5 <span class="text-muted">(1.200)</span></small>
                                </div>
                                <span class="float-right">$2.270 MX</span>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-3">
                    <a href="{{route('course-details')}}" class="link-card">
                        <div class="card" style="width: 16rem;">
                            <img src="https://i.udemycdn.com/course/240x135/1075334_8b5f_4.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <div class="card-title h5">Angular: De cero a experto creando...</div>
                                <div class="card-text text-muted">Fernando Herrera</div>
                                <div class="mt-2 mb-2">
                                    <span class="text-warning">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        {{-- <i class="fas fa-star-half-alt"></i> --}}
                                        <i class="far fa-star"></i>
                                    </span>
                                    {{-- <i class="far fa-star"></i> --}}
                                    <small>4 <span class="text-muted">(560)</span></small>
                                </div>
                                <span class="float-right">$1.500 MX</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>  
    </div>
</div>
@endsection