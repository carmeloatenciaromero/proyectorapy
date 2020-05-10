@extends('layouts.app')
@section('body-class','signup-page')

@section('content')
<style>
    :root {
  --input-padding-x: 1.5rem;
  --input-padding-y: .75rem;
}

body {

  background: #c10707;
  background: linear-gradient(to right, #ff22, #fff3, #ffff);
}

.card-signin {
  border: 0;
  border-radius: 1rem;
  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
  background-color: #c10702;
}

.card-signin .card-title {
  margin-bottom: 2rem;
  font-weight: 300;
  font-size: 1.5rem;
  font-color:#ffffff;
}

.card-signin .card-body {
  padding: 2rem;
}

.form-signin {
  width: 100%;
}

.form-signin .btn {
  font-size: 80%;
  border-radius: 5rem;
  letter-spacing: .1rem;
  font-weight: bold;
  padding: 1rem;
  transition: all 0.2s;
}

.form-label-group {
  position: relative;
  margin-bottom: 1rem;
}

.form-label-group input {
  height: auto;
  border-radius: 2rem;
}

.form-label-group>input,
.form-label-group>label {
  padding: var(--input-padding-y) var(--input-padding-x);
}

.form-label-group>label {
  position: absolute;
  top: 0;
  left: 0;
  display: block;
  width: 100%;
  margin-bottom: 0;
  /* Override default `<label>` margin */
  line-height: 1.5;
  color: #495057;
  border: 1px solid transparent;
  border-radius: .25rem;
  transition: all .1s ease-in-out;
}

.form-label-group input::-webkit-input-placeholder {
  color: transparent;
}

.form-label-group input:-ms-input-placeholder {
  color: transparent;
}

.form-label-group input::-ms-input-placeholder {
  color: transparent;
}

.form-label-group input::-moz-placeholder {
  color: transparent;
}

.form-label-group input::placeholder {
  color: transparent;
}

.form-label-group input:not(:placeholder-shown) {
  padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
  padding-bottom: calc(var(--input-padding-y) / 3);
}

.form-label-group input:not(:placeholder-shown)~label {
  padding-top: calc(var(--input-padding-y) / 3);
  padding-bottom: calc(var(--input-padding-y) / 3);
  font-size: 12px;
  color: #777;
}

.btn-google {
  color: white;
  background-color: #ea4335;
}

.btn-facebook {
  color: white;
  background-color: #3b5998;
}

/* Fallback for Edge
-------------------------------------------------- */

@supports (-ms-ime-align: auto) {
  .form-label-group>label {
    display: none;
  }
  .form-label-group input::-ms-input-placeholder {
    color: #777;
  }
}

/* Fallback for IE
-------------------------------------------------- */

@media all and (-ms-high-contrast: none),
(-ms-high-contrast: active) {
  .form-label-group>label {
    display: none;
  }
  .form-label-group input:-ms-input-placeholder {
    color: #777;
  }
}
</style>
<body>
  <div class="container" style="">
    <div class="row">
      <div class="col-sm-4  mx-auto">
        <div class="card card-signin my-3">
          <div class="card-body">
            <h3 class="card-title text-center" style="color: #fff">iniciar sesión</h3>
            <form class="form-signin" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
              <div class="form-label-group">
                <input value="{{ old('email') }}" type="email" name="email" id="inputEmail" class="form-control" placeholder="correo electronico" required>
                <label for="inputEmail">Correo</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="contraseña" required>
                <label for="inputPassword">Contraseña</label>
              </div>

              <div class="custom-control custom-checkbox mb-6">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label>
                 <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordar sesion
                </label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" style="background-color: #9f0808; border-color: #9f0808;" type="submit">Ingresar</button>
                            
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>



</div>

</div>

</div>
@endsection
