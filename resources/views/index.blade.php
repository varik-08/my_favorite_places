@extends('master')
@section('title', 'Главная страница')
@section('content')
    <div class="mainIndex">
        <h3>Все места</h3>
        <div style="width: 400px">
            <table class="table" border="3">
                <tr>
                    <th>Место</th>
                    <th>Тип</th>
                </tr>
                @foreach ($myplaces as $place )
                    <tr>
                        <td><a href="{{route('aboutAsPlace',$place->id)}}">{{$place->name}}</a></td>
                        <td>{{$place->typ}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@stop