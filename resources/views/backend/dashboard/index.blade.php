@extends('backend.backend')

@section('pageTitle', 'Pagina Principal')

@section('content')
    <h3>Listado de alertas</h3>
    <table>
        <tr>
            <thead>
                <th>No.</th>
                <th>Titulo</th>
                <th>Fecha</th>
                <th>Estado</th>
            </thead>
        </tr>
        <tbody>
            @foreach($response as $alerta)
            <tr>
                <td>{{ $alerta->number }}</td>
                <td><a href="{{ action('AlertasController@edit', $alerta->id) }}">{{ $alerta->title }}</a></td>
                <td>{{ $alerta->published_date }}</td>
                <td>{{ $alerta->published_state }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {!! $response->render() !!}
@stop