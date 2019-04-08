@extends('layouts.app') 

@section('content')
    <div class="container py-4">
        <div class="row">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title"><h4><strong>Tus articulos (1)</strong></h4></div>
                        <hr>
                        <div class="media">
                            <img src="https://i.udemycdn.com/course/240x135/2069857_a16d_5.jpg" class="mr-3 rounded" width="130" height="80" alt="...">
                            <div class="media-body">
                                <div class="row">
                                    <div class="col-md-7"><h5 class="mt-0">Master en SQL Server: Desde Cero a Nivel Profesional</h5></div>

                                    <div class="col-md-3">$1.170 MX</div>
                                    
                                    <div class="col-md-2">
                                        <a href="javascript:void(0)"><i class="text-danger fas fa-trash"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-5">
                <h4><strong>TOTAL: $1.170 MX</strong></h4>
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0" data-toggle="collapse"
                            data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Tarjeta de credito
                                <img src="{{asset('images/visa.png')}}" class="img-fluid ml-1" width="40" height="40" alt="">
                                <img src="{{asset('images/mastercard.png')}}" class="img-fluid ml-1" width="40" height="40" alt="">
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <form method="POST" action="">
                                    @csrf
            
                                    <div class="form-group">
                                        <label for="name">{{ __('Nombre del propietario') }}</label>
                                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Nombre" autofocus>
                                    </div>
            
                                    <div class="form-group">
                                        <label for="card_number">{{ __('Número de tarjeta') }}</label>
                                        <input id="card_number" type="number" class="form-control{{ $errors->has('card_number') ? ' is-invalid' : '' }}" name="card_number" placeholder="Número de tarjeta">
        
                                        @if ($errors->has('card_number'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('card_number') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <div class="row">

                                            <div class="col-md-4">
                                                <label for="">Més</label>
                                                <select class="form-control">
                                                    <option>Seleccione una opción</option>
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                    <option>05</option>
                                                    <option>06</option>
                                                    <option>07</option>
                                                    <option>08</option>
                                                    <option>09</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                </select>
                                            </div>

                                            <div class="col-md-4">
                                                <label for="">Año</label>
                                                <select class="form-control">
                                                    <option>Seleccione una opción</option>
                                                    <option>2019</option>
                                                    <option>2020</option>
                                                    <option>2021</option>
                                                    <option>2022</option>
                                                    <option>2023</option>
                                                    <option>2024</option>
                                                    <option>2025</option>
                                                    <option>2026</option>
                                                </select>
                                            </div>

                                            <div class="col-md-4">
                                                <label for="cvv">{{ __('CVV') }}</label>
                                                <input id="cvv" type="number" class="form-control{{ $errors->has('cvv') ? ' is-invalid' : '' }}" name="cvv" placeholder="CVV">
                                            </div>
                                        </div>
                                    </div>
            
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            
                                            <label class="form-check-label" for="remember">
                                                {{ __('Recordar esta tarjeta') }}
                                            </label>
                                        </div>
                                    </div>
            
                                    <hr>
            
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <button type="button" class="btn btn-lg btn-success">
                                                    {{ __('Completar pago') }} 
                                                </button>
                                            </div>

                                            <div class="col-md-7">
                                                <small class="text-justify">Al completar su compra, usted acepta estos
                                                    <a class="text-decoration-none" href="javascript:void(0)">
                                                        {{ __('Términos de servicio.') }}
                                                    </a>
                                                </small>
                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <img src="{{asset('images/paypal.png')}}" class="img-fluid" width="80" height="50" alt="">
                                </button>
                            </h2>
                        </div>
                        
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <form method="POST" action="">
                                    @csrf

                                    <p class="text-justify">Para completar su transacción, lo transferiremos a los servidores seguros de PayPal.</p>

                                    <hr>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <button type="button" class="btn btn-lg btn-success">
                                                    {{ __('Proceder') }} 
                                                </button>
                                            </div>

                                            <div class="col-md-8">
                                                <small class="text-justify">Al completar su compra, usted acepta estos
                                                    <a class="text-decoration-none" href="javascript:void(0)">
                                                        {{ __('Términos de servicio.') }}
                                                    </a>
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection