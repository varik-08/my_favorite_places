<table class="table" border="3">
    <tr>
    <th>Место</th>
    <th>Тип</th>
    </tr>
    @foreach ($myplaces as $place )
        <tr>
         <td><a href = "/places/{{$place->id}}">{{$place->name}}</a></td>
         <td>{{$place->typ}}</td>
        </tr>
    @endforeach
</table>
---------------------------------------------------------------
<form action="/places/photos/add" method="post">
    @csrf
    <h4>Добавить фотографии к месту</h4>
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
        <button type="submit">Добавить</button>
    </div>
</form>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
----------------------------------------------------------------
<h3><a href="/places/create">Добавить новое место</a></h3>