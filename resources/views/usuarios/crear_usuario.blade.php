@extends ('layouts.app') 

@section ('title', 'Crear usuarios')

@section('contents')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Agregar Usuario</span>
                    <a href="{{route('bienvenidos')}}" class="btn btn-primary btn-sm">Volver ...</a>
                </div>

                <div class="card-body">     
                  @if ( session('mensaje') )
                    <div class="alert alert-success">{{ session('mensaje') }}</div>
                  @endif

                  <form  action="{{route('crear_usuario2')}}" method="POST">
                    @csrf

                    @error('nombre')
                      <div class="alert alert-success">
                          Nombre obligatorio
                      </div>
                    @enderror
                    @error('apellido')
                      <div class="alert alert-success">
                          Apellido obligatorio
                      </div>
                    @enderror
                    @error('correo')
                      <div class="alert alert-success">
                          Correo obligatorio
                      </div>
                    @enderror
                    @error('rol')
                      <div class="alert alert-success">
                          Rol obligatorio
                      </div>
                    @enderror
                    <input
                      type="text"
                      name="nombre"
                      placeholder="Nombre"
                      class="form-control mb-2"
                    />                  
                    
                    <input
                      type="text"
                      name="apellido"
                      placeholder="Apellido"
                      class="form-control mb-2"
                    />
                    <input
                      type="text"
                      name="correo"
                      placeholder="Correo"
                      class="form-control mb-2"
                    />
                    
                      <div class="form-row align-items-center">
                        <div class="col-auto my-1">
                          <label class="mr-sm-2" for="inlineFormCustomSelect">Rol</label>
                          <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name= "rol">
                            <option selected>
                                Elegir...
                            </option>
                            @foreach($roles as $item)
                              
                              <option value= "{{$item->id}}" >
                                 {{ $item->nombre }}
                              </option>
                              
                            @endforeach
                          </select>
                          <br>
                      </div>                               
                    <button class="btn btn-primary btn-block" type="submit">Agregar</button>
                  </form>
               
                </div>
            </div>
        </div>
    </div>
</div>
@endsection




