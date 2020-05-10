@extends('layouts.app')
@section('body-class','signup-page')

@section('styles')
<style>
    html{
    background: url("background.jpg") no-repeat;
    background-size: cover;
    min-height: 100%;
}

body {
  background: #c10707;
  background: linear-gradient(to right, #ffff, #c10703, #fff3);
}

#advanced-search-form{
    background-color: #fff;
    max-width: 800px;
    margin: 160px auto 0;
    padding: 40px;
    color: #c10707;
    box-shadow: 6px 6px 6px 6px rgba(0,0,0,0.2);
}

#advanced-search-form h2{
    padding-bottom: 20px;
    margin: 10px 20px;
    font-size: 24px;
}

#advanced-search-form hr{
    margin-top: 38px;
    margin-bottom: 54px;
    margin-left:3px;
    border: 1px solid #cccccc;

}

#advanced-search-form .form-group{
    margin-bottom: 20px;
    margin-left:20px;
    width: 30%;
    float:left;
    text-align: left;
}

#advanced-search-form .form-control{
    padding: 12px 20px;
    height: auto;
    border-radius: 2px;
}

#advanced-search-form .radio-inline{
    margin-left: 10px;
    margin-right: 10px;
}

#advanced-search-form .gender{
    width: 30%;
    margin-top: 30px;
    padding-left: 20px
    padding-top: 5px;
    padding-bottom: 5px;
}

#advanced-search-form .btn{
    width: 46%;
    margin: 20px auto 0;
    display: block;
    outline: none;
}

@media screen and (max-width: 800px){
    #advanced-search-form .form-group{
        width: 45%;
    }

    #advanced-search-form{
        margin-top: 0;
    }
}

@media screen and (max-width: 560px){
    #advanced-search-form .form-group{
        width: 100%;
        margin-left: 0;
    }

    #advanced-search-form h2{
        text-align: center;
    }
}

</style>
@section('content')

    <div class="container" id="advanced-search-form">
        <h2>Datos de Registro</h2>
        <form  method="POST" action="{{ route('register') }}">
    {{ csrf_field() }}

            <div class="form-group">
                <label for="first-name">Nombre y Apellidos</label>
                <input type="text" class="form-control" placeholder="Nombre y Apellidos" id="first-name" value="{{ old('name') }}" name="name" required autofocus autocomplete="false">

                @if ($errors->has('name'))
                <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
            </div>

            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email">Email</label>
                <input type="email" class="form-control" placeholder="Email" id="email" value="{{ old('email') }}" name="email" required autocomplete="false">

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>


            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password">Contraseña</label>
                <input type="password" class="form-control" placeholder="Contraseña" id="password" name="password">
                     @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                 @endif
            </div>
                <div class="form-group">
                <label for="age">Confirmar contraseña</label>
                <input type="password" class="form-control" placeholder="confirmar contraseña" id="age" name="password_confirmation">

            </div>
            <div class="form-group">
                <label for="Direccion">Direccion</label>
                <input type="text" class="form-control" placeholder="Direccion" id="Direccion" name="direccion" value="{{ old('direccion') }}">
            </div>

            
            <div class="form-group">
                <label for="number">Telefono</label>
                <input type="text" class="form-control" placeholder="Telefono" id="number" name="telefono"value="{{ old('telefono') }}" >
            </div>                     
            
            <!-- <div class="form-group">
                <label for="number">sexo</label>
                <input type="text" class="form-control" placeholder="Telefono" id="number" name="sexo"value="{{ old('sexo') }}" >
            </div> -->
            <div class="form-group">
                <label>Sexo</label>
                <select name="sexo" value="{{ old('sexo') }}" placeholder="SELECCIONE EL SEXO" required>
                      
                        <option>Masculino</option>
                        <option>Femenino</option>
                                                       
                        
                        
                    </select>
            </div> 
            <div class="clearfix"></div>
            <button type="submit" class="btn btn-lg btn-primary btn-block text-uppercase" style="background-color: #9f0808; border-color: #9f0808;"> Registrarse</button>
        </form>
    </div>
</body>

@endsection
