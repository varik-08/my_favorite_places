@extends('master')
@section('title', 'Рейтинг по всем местам')
@section('content')
    <div class="mainIndex">
        <h3>Все места</h3>
        <div style="width: 400px">
            <table class="table" border="3">
                <tr>
                    <th>Место</th>
                    <th>Общий рейтинг</th>
                </tr>
                @foreach ($myplaces as $place )
                    <tr>
                        <td>{{$place->name}}</td>
                        <td>{{$place->overallRating}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@stop