@extends('layouts.app')
@section('content')
    <div class="row ">
        <div class="col-md-12">
            @auth
{{--                <a class="btn btn-outline-secondary mx-1" href="/activities/create">Create</a>--}}
                <a class="btn btn-outline-secondary mx-1 " href="/details/create">Create</a>
            @endauth

            <table align="center" cellpadding="10">
                <tr>
                    <th>Act - Activity ID</th>
                    <th>Act - Activity Name</th>
                    <th>Actions</th>

                </tr>
                @foreach($activities as $activity)
                    <tr>
                        <td>{{$activity->id}}</td>
                        <td>{{$activity->actName}}</td>
                        <td>
                            <form action="/activities/{{$activity->id}}" method="POST">
                                @method('DELETE')
                                @csrf


                                @auth
                                    <a class="btn btn-outline-secondary mx-1 " href="/details/{{$activity->id}}">Show
                                        Activity</a>

                                    <button type="submit" title="delete" class="btn btn-outline-secondary mx-1">Delete
                                    </button>
                                @endauth
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    </div>
@endsection
