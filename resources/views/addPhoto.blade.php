@extends('master')
@section('title', 'Добавление фотографий к месту')
@section('content')
    <div class="mainIndex">
        <h3>Выберите фотографию для добавления</h3>
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            <input type="file" name="image">
            <button type="submit">Добавить</button>
        </form>

        <h3>Фотографии</h3>

        @foreach ($photos as $photo)
            <p><img src="{{Storage::url($photo->filePath)}}" width="255" height="255"></p>
        @endforeach
    </div>
@stop