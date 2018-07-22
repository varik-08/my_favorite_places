<h3><a href="/places">Вернуться к списку мест</a></h3>

Наименование:{{$place->name}}<br>
Тип:{{$type}}<br>
Описание:{{$place->about}}<br>

<h3>Фотографии:</h3><br>
@foreach ($photos as $photo)
    <p><img src="{{Storage::url($photo->filePath)}}" width="255" height="255"></p>
@endforeach

