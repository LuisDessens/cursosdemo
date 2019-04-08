@extends('layouts.app')

@section('content')

    <div class="container py-4">
        <div class="col-md-12">
            <div><h4><strong>Mis cursos</strong></h4></div>
        </div>

        <div class="col-md-12">
            <div class="row">
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Ordenar por</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>Recientes</option>
                            <option>Title: A a Z</option>
                            <option>Title: Z a A</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-7">
                    <label for="exampleFormControlSelect1">Filtrar por</label>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>Categorias</option>
                                    <option>Todas las Categorias</option>
                                    <option>Desarrollo</option>
                                    <option>Diseño</option>
                                    <option>Negocios</option>
                                    <option>Marketing</option>
                                    <option>Fotografá</option>
                                </select>
                            </div>
                        </div>
    
                        <div class="col-md-4">
                            <div class="form-group">
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>Progreso</option>
                                    <option>En progreso</option>
                                    <option>No empezado</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <form>
                        {{Form::label('f', '', ['class' => 'text-light'])}}
                        <div class="input-group mb-3">
                            {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Busca tu curso'])!!}
                            <div class="input-group-append">
                                <button class="btn btn-secondary" type="submit"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3">
                    <a href="{{route('my-course-details')}}" class="link-card">
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
                    <a href="{{route('my-course-details')}}" class="link-card">
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
                    <a href="{{route('my-course-details')}}" class="link-card">
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
                    <a href="{{route('my-course-details')}}" class="link-card">
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

                <div class="col-md-3 mt-3">
                    <a href="{{route('my-course-details')}}" class="link-card">
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
            </div>
        </div> 
    </div>
@endsection