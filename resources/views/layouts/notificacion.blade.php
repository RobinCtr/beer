@if(session("mensaje"))
    <div class="alert alert-{{session('tipo')}}" role="alert">
        {{session('mensaje')}}
    </div>
@endif
