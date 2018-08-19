@extends('master')
@section('title','Описание места '.$place->name)
@section('content')
    <div class="mainIndex">
        <div>
            Наименование:{{$place->name}}<br>
            Тип:{{$place->type()->value('name')}}<br>
            Описание:{{$place->about}}<br>
            Рейтинг:{{$place->rating}}<br>
            Общий рейтинг:{{$place->overallrating}}<br>
            Оценить:
            <a href="{{route('addOpinion',[$place->id, $place->id, 'Place', '1'])}}"><img src="{{Storage::url('image/like.png')}}" width="15" height="15"></a>
            <a href="{{route('addOpinion',[$place->id, $place->id, 'Place', '0'])}}"><img src="{{Storage::url('image/dislike.png')}}" width="20" height="20"></a>
            <br>
        </div>
        <h3>Фотографии:</h3><br>
        @foreach ($photos as $photo)
            <div>
                <p>
                    <img src="{{Storage::url($photo->filePath)}}" width="255" height="255">
                <div>
                    Оценить:
                    <a href="{{route('addOpinion',[$place->id, $photo->id, 'Photo', '1'])}}"><img src="{{Storage::url('image/like.png')}}" width="15" height="15"></a>
                    <a href="{{route('addOpinion',[$place->id, $photo->id, 'Photo', '0'])}}"><img src="{{Storage::url('image/dislike.png')}}" width="20" height="20"></a>
                </div>
                Рейтинг:{{$photo->rating}}<br>
                </p>
            </div>
            <br><br>
        @endforeach
    </div>
@stop