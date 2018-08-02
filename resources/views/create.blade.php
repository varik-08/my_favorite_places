@extends('master')
@section('title','Добавление нового места')
@section('content')
    <div class="mainIndex">
        <form action="{{route('uploadFormCreatePlace')}}" method="post">
            @csrf
            <h3>Добавить место</h3>
            <div class="main">
                <div class="field">
                    <label for="name">Имя</label>
                    <input type="text" name="name" value="{{old('name')}}"><br>
                </div>

                <div class="field">
                    <label for="type">Тип</label>
                    <select name="type_id" value="{{old('type_id')}}">
                        <option disabled>Выберите тип</option>
                        @foreach ($types as $type)
                            <option value="{{$type->id}}">{{$type->name}}</option>;
                        @endforeach
                    </select>

                </div>

                <div class="field">
                    <label for="about">Описание</label>
                    <textarea name="about">{{{ old('about') }}}</textarea>
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
    </div>
@stop