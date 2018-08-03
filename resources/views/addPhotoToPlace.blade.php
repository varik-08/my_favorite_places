@extends('master')
@section('title', 'Выбор места для добавления фотографий')
@section('content')
    <div  class="mainIndex">
        <form action="{{route('selectPhotoById','place')}}" method="get" enctype="multipart/form-data">
            @csrf
            <h4>Добавить фотографии к месту</h4><br>
            <div class="main">
                <div>
                    <label for="type">Место</label>
                    <select name="id">
                        <option disabled>Выберите место</option>
                        @foreach ($myplaces as $place)
                            <option value="{{$place->id}}">{{$place->name}}</option>
                        @endforeach
                    </select>
                </div>

                <br>
                <button type="submit">Выбрать</button>
            </div>
        </form>
    </div>
@stop