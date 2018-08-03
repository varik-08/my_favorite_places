@extends('master')
@section('title','Описание места '.$place->name)
@section('content')
    <div class="mainIndex">
        Наименование:{{$place->name}}<br>
        Тип:{{$place->typ}}<br>
        Описание:{{$place->about}}<br>

        <h3>Фотографии:</h3><br>
        @foreach ($photos as $photo)
            <p><img src="{{Storage::url($photo->filePath)}}" width="255" height="255"></p>
        @endforeach
    </div>
@stop