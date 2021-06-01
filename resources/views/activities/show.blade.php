@extends('layouts.app')
@section('content')

    <div class="form-content">
        <form method="POST" action="/activities/{{$activity->id}}">
            @method('PUT')
            @csrf


            <div class="form-group col-6">
                <a class="btn btn-outline-secondary mx-1" href="/details/{{$activity->id}}/edit">Edit</a>
                <label for="actName">Activity Name</label>
                <input type="text" class="form-control @error('actName') is-invalid @enderror" id="actName" name="actName" value="{{$activity->actName}}">
            </div>

            <br>
            <a class="btn btn-warning mx-1" href="/activities/">Cancel</a>
        </form>
    </div>
    </div>

@endsection
