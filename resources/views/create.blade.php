<html>
<head>
    <style>
        .field {clear:both; text-align:right; line-height:25px;}
        label {float:left; padding-right:10px;}
        .main {float:left}
    </style>
</head>
    <body>
        <form action="create" method="post">
            @csrf
            <h3>Добавить место</h3>
            <div class="main">
                <div class="field">
                    <label for="name">Имя</label>
                    <input type="text" name="name" /><br>
                </div>

                <div class="field">
                    <label for="type">Тип</label>
                    <select name="type">
                    <option disabled>Выберите тип</option>
                    @foreach ($types as $type)
                        <option value="{{$type->id}}">{{$type->name}}</option>;
                    @endforeach
                    </select>

                </div>

                <div class="field">
                    <label for="about">Описание</label>
                    <textarea name="about"></textarea>
                </div>

                <br>
                <button type="submit">Сохранить</button>
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

    </body>
</html>