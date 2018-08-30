@extends('master')
@section('title', __('lan.titles.homePage'))
@section('content')
    <div class="mainIndex">
        <h3>@lang('lan.table.title')</h3>
        <div style="width: 400px">
            <table class="table" border="3">
                <tr>
                    <th>@lang('lan.table.caption_place')</th>
                    <th>@lang('lan.table.caption_type')</th>
                </tr>
                @foreach ($myplaces as $place )
                    <tr>
                        <td><a href="{{route('aboutAsPlace',$place->id)}}">{{$place->name}}</a></td>
                        <td>{{$place->selectType()}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@stop