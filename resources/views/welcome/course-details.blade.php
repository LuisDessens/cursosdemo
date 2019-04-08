@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="row">
            <div class="col-md-8">
                <div class="alert alert-light bg-dark text-white shadow-sm" role="alert">
                    <div class="h3 mt-1"><strong>Master en SQL Server: Desde Cero a Nivel Profesional</strong></div>
                    <div class="mt-2">
                        <span class="text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </span>
                        {{-- <i class="far fa-star"></i> --}}
                        <span>4,8 (1.950 valoraciones)</span>
                        <span class="ml-2">264 estudiantes inscritos</span>
                    </div>
                    <small>Creado por Mariano Puglisi <span class="ml-2">Fecha de la última actualización: 5, abril 2019 (hace 5 dias)</span></small>
                </div>
                
                <div class="embed-responsive embed-responsive-16by9 shadow-sm ">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ezEajXIho8Y" allowfullscreen></iframe>
                </div>

                <div class="card mt-4  shadow-sm">
                    <div class="card-body">
                        <div class="card-title"><h4><strong>Requisitos</h4></strong></div>
                        <hr>
                        <ul class="card-text">
                            <li>No se requieren conocimientos previos de Programación ni Bases de Datos. Empezamos desde cero con los fundamentos del lenguaje estructurado de Base de Datos Relacionales con Microsoft SQL Server.</li>
                            <li>El software es gratuito y lo instalaremos juntos en el curso.</li>
                            <li>Una PC o portátil. Manejo de Windows a nivel básico</li>
                            <li>Todos los recursos y herramientas están disponibles en el curso.</li>
                        </ul>
                    </div>
                </div>

                <div class="card mt-4 text-whie b-dark  shadow-sm">
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

                <div class="card mt-4 shadow-sm">
                    <div class="card-body">
                            <div class="card-title"><span class="h4"><strong>Contenido del curso</strong></span><span class="float-right mr-4">07:58:14</span></div>
                        <hr>
                        <div class="accordion" id="accordionExample">
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
                                            <a class="text-info text-decoration-none ml-2" href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal">
                                                Presentación del Master
                                                <div class="float-right">
                                                    <span>Vista previa</span>
                                                    <span class=" ml-4">06:51</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-group-item text-muted">
                                            <i class="fas fa-play-circle"></i>
                                            <span class="ml-2">
                                                Uso de las herramientas del curso
                                                <div class="float-right">
                                                    <span class=" ml-4">07:27</span>
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

                <div class="card mt-4">
                    <div class="card-body">
                        <div class="card-title"><h4><strong>Comentarios de los estudiantes</h4></strong></div>
                        <hr>
                        <div class="media">
                            <div class="mr-4 text-center"> 
                                <div class="display-2">4,8</div>
                                <div class="h5 text-warning">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <div>Valoración</div>
                            </div>
                            <div class="media-body">
                                <div class="row mb-1">
                                    <div class="col-md-7 mt-1">
                                        <div class="progress">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 46%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-5 h5">
                                        <span class="text-warning">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </span>
                                        <span>46%</span>
                                    </div>
                                </div>

                                <div class="row mb-1">
                                    <div class="col-md-7 mt-1">
                                        <div class="progress">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 31%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-5 h5">
                                        <span class="text-warning">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </span>
                                        <span>31%</span>
                                    </div>
                                </div>

                                <div class="row mb-1">
                                    <div class="col-md-7 mt-1">
                                        <div class="progress">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-5 h5">
                                        <span class="text-warning">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </span>
                                        <span>0%</span>
                                    </div>
                                </div>

                                <div class="row mb-1">
                                    <div class="col-md-7 mt-1">
                                        <div class="progress">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 8%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-5 h5">
                                        <span class="text-warning">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </span>
                                        <span>8%</span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-7 mt-1 mt-1">
                                        <div class="progress">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 15%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-5 h5">
                                        <span class="text-warning">
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </span>
                                        <span>15%</span>
                                    </div>
                                </div>
                            
                            </div>
                        </div>
                        <hr>

                        <div class="media pt-4">
                            <img src="https://via.placeholder.com/60?text=LF" class="mr-3 rounded-circle" alt="...">
                            <div class="media-body">
                                <span class="h4 mr-2">Laura Fernández</span>
                                <span class="h5 text-warning">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </span>
                                <p class="text-justify">Excelente!!, superó ampliamente mis expectativas!!!</p>

                                <div class="media mt-4">
                                    <a class="mr-3" href="#">
                                        <img src="https://i.udemycdn.com/user/200_H/17318556_e288_3.jpg" class="mr-3 rounded-circle" width="60" height="60" alt="...">
                                    </a>
                                    <div class="media-body">
                                        <h5 class="m-0">Mariano Puglisi</h5>
                                        <p class="text-justify">¡Muchas gracias Laura! Me alegro que te haya gustado. Saludos</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="media pt-4">
                                <img src="https://via.placeholder.com/60?text=JH" class="mr-3 rounded-circle" alt="...">
                                <div class="media-body">
                                    <span class="h4 mr-2">Jorge Hurtado</span>
                                    <span class="h5 text-warning">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </span>
                                    <p class="text-justify">Me parece un buen curso completo y bien explicado. Los ejercicios prácticos son de mucha utilidad para aplicar lo aprendido.</p>
    
                                    <div class="media mt-4">
                                        <a class="mr-3" href="#">
                                            <img src="https://i.udemycdn.com/user/200_H/17318556_e288_3.jpg" class="mr-3 rounded-circle" width="60" height="60" alt="...">
                                        </a>
                                        <div class="media-body">
                                            <h5 class="m-0">Mariano Puglisi</h5>
                                            <p class="text-justify">¡Muchas gracias!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>

                <div class="card mt-4 mb-4">
                    <div class="card-body">
                        <div class="card-title mb-0"><h4><strong>Los estudiantes también compraron</strong></h4></div>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item list-group-item-action">
                            <a href="javascript:void(0)" class="text-decoration-none text-dark">
                                <div class="media">
                                    <img src="https://i.udemycdn.com/course/125_H/1837638_4cd0_3.jpg" class="mr-3 rounded" width="130" height="80" alt="...">
                                    <div class="media-body">
                                        <div class="row pt-3">
                                            <div class="col-md-7"><h5 class="mt-0">Angular & Spring 5: Creando web app full-stack (Angular 7+)</h5></div>

                                            <div class="col-md-3">
                                                <small class="text-warning">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                </small>
                                                <small>4,4</small>
                                            </div>

                                            <div class="col-md-2">$640 MX <div><small><del>$970 MX</del></small></div></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item list-group-item-action">
                            <a href="javascript:void(0)" class="text-decoration-none text-dark">
                                <div class="media">
                                    <img src="https://i.udemycdn.com/course/125_H/1667756_f82c_2.jpg" class="mr-3 rounded" width="130" height="80" alt="...">
                                    <div class="media-body">
                                        <div class="row pt-3">
                                            <div class="col-md-7"><h5 class="mt-0">C# - Programming Database Driven Windows Forms Desktop Apps</h5></div>

                                            <div class="col-md-3">
                                                <small class="text-warning">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                </small>
                                                <small>4,6</small>
                                            </div>

                                            <div class="col-md-2">$565 MX <div><small><del>$1.270 MX</del></small></div></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="list-group-item list-group-item-action">
                            <a href="javascript:void(0)" class="text-decoration-none text-dark">
                                <div class="media">
                                    <img src="https://i.udemycdn.com/course/125_H/1315518_e0d8.jpg" class="mr-3 rounded" width="130" height="80" alt="...">
                                    <div class="media-body">
                                        <div class="row pt-3">
                                            <div class="col-md-7"><h5 class="mt-0">CRUD  básico y Aplicación Multiusuario con PHP y MySql</h5></div>

                                            <div class="col-md-3">
                                                <small class="text-warning">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                </small>
                                                <small>4</small>
                                            </div>

                                            <div class="col-md-2">$890 MX <div><small><del>$2.970 MX</del></small></div></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <img src="https://i.udemycdn.com/course/240x135/2069857_a16d_5.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="card-title h4"><strong>$1.170 MX</strong></div>
                        <a class="btn btn-success btn-block" href="{{route('shopping-detail')}}">Comprar ahora</a>
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

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Presentación del Master</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="embed-responsive embed-responsive-16by9 shadow-sm ">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ezEajXIho8Y" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection