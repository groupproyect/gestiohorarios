@extends("../plantillas/formulario")
@section('titulo_pagina','{{ $titulo }}')
@section('titulo')
    {{$titulo}}
@endsection
@section('formulario')
    <form action="{{$cod}}" method="POST">
        @csrf

        @if(empty($informacion))    
            <label>
                <h4>Numero Ambiente</h4>
                <input type="text" name="id_ambiente">
            </label>
                        
        
            <label>

                <h4>Area</h4>
                <select name="id_area" id="">
                    <option disabled selected>Seleccione</option> 
                @foreach($areas as $id_area)               
                    <option value="{{$id_area->id}}">{{$id_area->descripcion}}</option> 
                @endforeach
                </select>
            
            </label>

            
            <label>
                <h4>Aforo</h4>
                <input type="text" name="aforo">			
            </label>
            
            
            <label>
                <h4>Sede</h4>
                <select name="id_sede" id="">
                    <option disabled selected>Seleccione</option> 
                @foreach($sedes as $id_sede)               
                    <option value="{{$id_sede->id}}">{{$id_sede->nombre_sede}}</option> 
                @endforeach
                </select>
            </label>
            
        
        @else
            @foreach($informacion as $key)
            <label>
                <h4>Numero Ambiente</h4>
                <input type="text" name="id" value="{{$key->id_ambiente}}" placeholder="{{$key->id_ambiente}}">
            </label>
                        
        
            <label>

                <h4>Area</h4>
                <select name="id_area" id="">
                    <option disabled selected>Seleccione</option> 
                @foreach($areas as $id_area)               
                    <option value="{{$id_area->id}}">{{$id_area->descripcion}}</option> 
                @endforeach
                </select>
            
            </label>

            
            <label>
                <h4>Aforo</h4>
                <input type="text" name="aforo"value="{{$key->aforo}}" placeholder="{{$key->aforo}}">			
            </label>
            
            
            <label>
                <h4>Sede</h4>
                <select name="id_sede" id="">
                    <option disabled selected>Seleccione</option> 
                @foreach($sedes as $id_sede)               
                    <option value="{{$id_sede->id}}">{{$id_sede->nombre_sede}}</option> 
                @endforeach
                </select>
            </label>
            <input type="hidden" name="id_ambiente" value="{{$key->id_ambiente}}">


            @endforeach
        
        @endif
        <input type="submit" class="boton" name="enviar" value="Enviar">
        
    </form>
@endsection
