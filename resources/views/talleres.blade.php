@extends('layout')

@section('title', 'Talleres')

@section('content')
 <ul>
    @if($talleres)
        @foreach($talleres as $item)
            <li>{{$item['titulo']}}</li>
        @endforeach
    @else
        <li>No existe ningun taller que mostrar</li>
    @endif
 </ul>
@endsection