@extends('master')
@section('title', __('lan.titles.addNewPlace'))
@section('content')
    <div class="mainIndex">
        <form action="{{route('places.store')}}" method="post">
            @csrf
            <h3>@lang('lan.create.addAPlace')</h3>
            <div class="main">
                <div class="field">
                    <label for="name">@lang('lan.create.name')</label>
                    <input type="text" name="name" value="{{old('name')}}"><br>
                </div>

                <div class="field">
                    <label for="type">@lang('lan.create.type')</label>
                    <select name="type_id" value="{{old('type_id')}}">
                        <option disabled>@lang('lan.create.selectType')</option>
                        @foreach ($types as $type)
                            <option value="{{$type->id}}">{{$type->selectType()}}</option>;
                        @endforeach
                    </select>

                </div>

                <div class="field">
                    <label for="about">@lang('lan.create.description')</label>
                    <textarea name="about">{{{ old('about') }}}</textarea>
                </div>

                <br>
                <button type="submit">@lang('lan.create.save')</button>
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