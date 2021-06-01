@extends('layouts.app')
@section('content')
details/index.blade.php
    <div class="row ">
        <div class="col-md-12">
{{--            @auth--}}
{{--                <a class="btn btn-outline-secondary mx-1" href="/details/create">Create</a>--}}
{{--            @endauth--}}


            <table align="center" cellpadding="10">
                <tr>
                    <th>Activity ID</th>
                    <th>Date</th>
                    <th>Distance</th>
                    <th>Latitude</th>
                    <th>Longitude</th>
                    <th>Actions</th>
                </tr>
                @foreach($details as $detail)
                    <tr>
                        <td>{{$detail->id}}</td>
                        <td>{{$detail->date}}</td>
                        <td>{{$detail->distance}}</td>
                        <td>{{$detail->latitude}}</td>
                        <td>{{$detail->longitude}}</td>
                        <td>
                            <form action="/details/{{$detail->id}}" method="POST">
                                @method('DELETE')
                                @csrf

                                @auth
                                    <a class="btn btn-outline-secondary mx-1 " href="/details/{{$detail->id}}">Show
                                        Activity</a>

                                    <button type="submit" title="delete" class="btn btn-outline-secondary mx-1">Delete
                                    </button>
                                @endauth
                            </form>
                        </td>
                    </tr>
                @endforeach

        </div>

    </div>
    </div>
@endsection
