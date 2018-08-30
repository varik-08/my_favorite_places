@extends('master')
@section('title', __('lan.titles.ratingForAllPlace'))
@section('content')
    <div class="mainIndex">
        <h3>@lang('lan.rating.allPlaces')</h3>
        <div style="width: 400px">
            <table class="table" border="3">
                <tr>
                    <th>@lang('lan.rating.place')</th>
                    <th>@lang('lan.rating.overallRating')</th>
                </tr>
                @foreach ($myplaces as $place )
                    <tr>
                        <td>{{$place->name}}</td>
                        <td>{{$place->rating}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@stop