@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="col-md-12">
            <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="about-tab" data-toggle="tab" href="#about" role="tab" aria-controls="about" aria-selected="true">Visión general</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="content-tab" data-toggle="tab" href="#content" role="tab" aria-controls="content" aria-selected="false">Contenido</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " id="QyA-tab" data-toggle="tab" href="#QyA" role="tab" aria-controls="QyA" aria-selected="false">Q&A</a>
                </li>
            </ul>
        </div>

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="about-tab">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card mt-2 text-whie b-dark  shadow-sm">
                                <div class="card-body">
                                    <div class="card-title"><h4><strong>Descripción del curso</strong></h4></div>
                                    <hr>
                                    <h5><strong class="card-text">¿De que se trata SQL Server?</strong></h5>
                                    <p class="card-text text-justify">SQL Server es un motor de Base de Datos Gratuito en su versión Express, que permite almacenar información ordenada y estructurada de manera tal que pueda ser consultada rápidamente. Puede ser utilizado para Sitios Web, Aplicaciones para dispositivos móviles o bien para almacenar datos de un Videojuego o cualquier aplicación.</p>
                                    <p class="card-text text-justify">En este Master aprenderás sólidos conceptos de diseño y programación de Bases de Datos, que te permitirán posicionarte bien alto en el ámbito profesional del área de desarrollo tecnológico.</p>
            
                                    <h5><strong class="card-text">¿Tengo algunos conocimientos de SQL Server, porqué debería tomar este curso?</strong></h5>
                                    <p class="card-text text-justify">Este Master se mantiene actualizado constantemente. Si ya cuentas con conocimientos previos en programación o Bases de datos, te ayudará a reforzar tus conocimientos y potenciar tu perfil a nivel laboral.</p>
            
                                    <h5><strong class="card-text">¿Hay secciones dedicadas a la práctica?</strong></h5>
                                    <p class="card-text text-justify">Este Master cuenta con 4 Secciones dedicadas exclusivamente a la práctica, donde vamos a ir aplicando los conceptos aprendidos.</p>
                                    <p class="card-text text-justify">Las secciones de práctica tienen una duración de más de 4 horas de clases.</p>
            
                                    <h5><strong class="card-text">¿Incluye un Proyecto Final como objetivo?</strong></h5>
                                    <p class="card-text text-justify">Sí, como práctica a lo largo del curso y como desarrollo final, vamos a diseñar y programar una Base de Datos de Historias Clínicas y Turnos Médicos con todos los recursos explicados anteriormente.</p>
            
                                    <p class="card-text text-justify"> Serás capaz de diseñar y programar tu propia Base de Datos con un concepto estructurado, siguiendo técnicas y buenas prácticas de programación y optimización de procesos, que como resultado, harán que nuestra Base de Datos no se vea afectada por una baja performance. Esto hará que la respuesta desde nuestra Base de Datos sea lo más óptima posible.</p>
            
                                    <h5><strong class="card-text">¿Para quién es este curso?</strong></h5>
                                    <ul class="card-text">
                                        <li>A todos los que quieran aprender a programar y diseñar Bases de Datos a fin de insertarse profesionalmente en lo laboral.</li>
                                        <li>A todo aquel que requiera incorporar una Base de Datos a una Aplicación, Sitio Web, Juego o App mobile.</li>
                                        <li>O bien como objetivo personal adquiriendo conocimientos para armar una estructura de Base de Datos sólida y optimizada e incorporarla a un determinado software o proyecto.</li>
                                        <li>Si ya cuentas con conocimientos de programación o Bases de Datos, este curso te ayudará a reforzar tus conocimientos previos.</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="card mt-4">
                                <div class="card-body">
                                    <div class="card-title"><h4><strong>Información sobre el Instructor</strong></h4></div>
                                    <hr>
                                    <ul class="list-unstyled">
                                        <li class="media">
                                            <img src="https://i.udemycdn.com/user/200_H/17318556_e288_3.jpg" class="mr-3 img-fluid rounded-circle" width="100" height="100" alt="...">
                                            <div class="media-body">
                                                <div class="h4 mb-0"><a href="javascript:void(0)" class="text-decoration-none text-primary">Mariano Puglisi</a></div>
                                                <div class="mb-1">
                                                    <span class="text-warning">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </span>
                                                    <span>4 Calificación</span>
                                                    <i class="text-info fas fa-play-circle"></i> 2 Cursos
                                                    <i class="ml-1 text-secondary fas fa-users"></i> 2.441 Estudiantes 	
                                                    <i class="ml-1 text-success far fa-comment-dots"></i> 94 reseñas
                                                </div>
            
                                                <strong class="mb-1">
                                                    Analista de Sistemas y Programador Web
                                                </strong>
                                                <p class="text-justify">Mariano es Analista de Sistemas egresado en la Universidad Tecnológica Nacional UTN Buenos Aires, Argentina.</p>
            
                                                <p class="text-justify">Tiene experiencia en Desarrollo de Software y Análisis de procesos en Tecnologías de la Información desde el año 1998.</p>
                                                        
                                                <p class="text-justify">Actualmente se desempeña como Instructor en Udemy impartiendo cursos y Masters de Desarrollo de Software y Bases de Datos.</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="card mt-2">
                                <img src="https://i.udemycdn.com/course/240x135/2069857_a16d_5.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <div class="card-title h4"><strong>Master en SQL Server: Desde Cero a Nivel Profesional</strong></div>
                                    <ul class="list-unstyled mt-3">
                                        Este curso incluye
                                        <li><i class="text-muted ml-3 fas fa-play"></i> 8 horas de vídeo bajo demanda</li>
                                        <li><i class="text-muted ml-3 fas fa-file-download"></i> 16 recursos descargables</li>
                                        <li><i class="text-muted ml-3 fas fa-certificate"></i> Acceso de por vida</li>
                                        <li><i class="text-muted ml-3 fas fa-mobile-alt"></i> Acceso en dispositivos móviles</li>
                                        <li><i class="text-muted ml-3 fas fa-graduation-cap"></i> Certificado de finalización</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="content" role="tabpanel" aria-labelledby="content-tab">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-8">
                            <h4><strong>Contenido del curso</strong></h4>
                        </div>
                        <div class="col-md-4">
                            <form>
                                <div class="input-group mb-3">
                                    {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Busca en el contenido'])!!}
                                    <div class="input-group-append">
                                        <button class="btn btn-secondary" type="submit"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        
                <div class="col-md-12">
                    <div class="accordion shadow-sm" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <div class="mb-0" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Introducción al Master
                                </div>
                            </div>
        
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <i class="text-muted fas fa-play-circle"></i>
                                        <a class="text-info text-decoration-none ml-2" href="{{route('chapter')}}">
                                            Presentación del Master
                                            <div class="float-right">
                                                <span class="ml-4">06:51</span>
                                                <span><i class="ml-2 fas fa-check-circle"></i></span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-group-item text-info">
                                        <i class="text-secondary fas fa-play-circle"></i>
                                        <span class="ml-2">
                                            Uso de las herramientas del curso
                                            <div class="float-right">
                                                <span class="ml-4">07:27</span>
                                                <span><i class="ml-2 far fa-circle"></i></span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <div class="mb-0" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Instalación y configuración del software necesario en PC
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <div class="mb-0" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Estructuras y Componentes de Base de Datos
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <div class="mb-0" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Integridad de la Base de Datos|
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <div class="mb-0" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Práctica 1: Diseñando nuestra primer Base de Datos
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <div class="mb-0" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Comandos SQL para manipulación de registros
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <div class="mb-0" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Cláusulas SQL
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <div class="mb-0" data-toggle="collapse" data-target="#collapseThree"
                                    aria-expanded="false" aria-controls="collapseThree">
                                    Funciones de Agregado
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <div class="mb-0" data-toggle="collapse" data-target="#collapseThree"
                                    aria-expanded="false" aria-controls="collapseThree">
                                    Operadores Lógicos
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <div class="mb-0" data-toggle="collapse" data-target="#collapseThree"
                                    aria-expanded="false" aria-controls="collapseThree">
                                    Store Procedures
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <div class="mb-0" data-toggle="collapse" data-target="#collapseThree"
                                    aria-expanded="false" aria-controls="collapseThree">
                                    Estructuras de Control
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <div class="mb-0" data-toggle="collapse" data-target="#collapseThree"
                                    aria-expanded="false" aria-controls="collapseThree">
                                    Operadores Aritméticos y de Comparación
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <div class="mb-0" data-toggle="collapse" data-target="#collapseThree"
                                    aria-expanded="false" aria-controls="collapseThree">
                                    Práctica 2:  Programando Store Procedures de Inserción de Registros
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="QyA" role="tabpanel" aria-labelledby="QyA-tab">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-7 mt-2">
                            <h4><strong>Preguntas y respuestas</strong></h4>
                        </div>
                        <div class="col-md-4">
                            <form>
                                <div class="input-group">
                                    {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Busca una pregunta'])!!}
                                    <div class="input-group-append">
                                        <button class="btn btn-secondary" type="submit"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="col-md-1">
                            <a class="btn btn-primary" href="javascript:void(0)">Crear</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 mt-2">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>Recientes</option>
                                    <option>Más populares</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <a class="text-decoration-none text-dark" href="javascript:void(0)" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    <div class="media" >
                                        <img src="https://via.placeholder.com/60?text=HH" class="mr-3 rounded-circle mt-2" alt="...">
                                        <div class="media-body mt-3">
                                            <span class="mr-2">Demasiadas conexiones</span>
                                            <span class="float-right mt-3">2 respuesta</span>
                                            <p class="text-justify">Me sale este error "Se ha alcanzado el número de conexiones simultáneas para esta base de datos" no se porque.</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="px-5">
                                        <div class="media pt-4">
                                            <img src="https://via.placeholder.com/60?text=FR" class="mr-3 rounded-circle" alt="...">
                                            <div class="media-body">
                                                <span class="h4 mr-2">Fenando Romero</span>
                                                <p class="text-justify">Es posible que hayas alcanzado temporalmente el límite de conexiones debido a un número inusualmente alto de usuarios. Recomendamos que esperes un poco y luego compruebes si el error continúa ocurriendo.</p>
                                            </div>
                                        </div>
    
                                        <div class="media pt-4">
                                            <img src="https://via.placeholder.com/60?text=VA" class="mr-3 rounded-circle" alt="...">
                                            <div class="media-body">
                                                <span class="h4 mr-2">Victor Arce</span>
                                                <p class="text-justify">Si este error ocurre con frecuencia, comprueba las exigencias de rendimiento.</p>
                                            </div>
                                        </div>

                                        <div class="card mt-3">
                                            <div class="card-body">
                                                    <h5 class="card-title">Deja una respuesta</h5>
                                                <form>
                                                    {{ Form::hidden('user_id', '') }}
                                                    {{ Form::hidden('comment_id', '') }}
                                                    <div class="form-group">
                                                        {!! Form::textarea('content', null, ['class' => 'form-control content', 'rows' => '1']) !!}
                                                        
                                                        @if ($errors->has('content'))
                                                            <span class="text-danger" role="alert">
                                                                <strong>{{ $errors->first('content') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                        
                                                    <div class="form-group">
                                                        {{ Form::submit('Responder', ['class' => 'btn btn-sm btn-success float-right']) }}
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <a class="text-decoration-none text-dark" href="javascript:void(0)" data-toggle="collapse"
                                data-target="#collapseTwo" aria-expanded="false"
                                aria-controls="collapseTwo">
                                    <div class="media">
                                        <img src="https://via.placeholder.com/60?text=OM" class="mr-3 rounded-circle mt-2" alt="...">
                                        <div class="media-body mt-3">
                                            <span class="mr-2">"Unknown MySQL server... no connection possible"</span>
                                            <span class="float-right mt-3">1 respuesta</span>
                                            <p class="text-justify">No se pudo establecer ninguna conexión porque el servidor MySQL especificado es desconocido.</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <a class="text-decoration-none text-dark" href="javascript:void(0)" data-toggle="collapse"
                                data-target="#collapseThree" aria-expanded="false"
                                aria-controls="collapseThree">
                                    <div class="media">
                                        <img src="https://via.placeholder.com/60?text=KL" class="mr-3 rounded-circle mt-2" alt="...">
                                        <div class="media-body mt-3">
                                            <span class="mr-2">#1062 (23000) at line 45: Duplicate entry '1' for key 'PRIMARY'</span>
                                            <span class="float-right mt-3">3 respuesta</span>
                                            <p class="text-justify">#1062 (23000) en la línea 45: Entrada duplicada '1' para la clave 'PRIMARY'.</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection