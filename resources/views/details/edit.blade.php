@extends('layouts.app')
@section('content')
    page edit
    <div class="form-content">
        <form method="POST" action="/details/{{$detail->id}}">
            @method('PUT')
            @csrf


            <div class="form-group col-6">
                <label for="actName">Activity id</label>
                <input type="text" class="form-control @error('id') is-invalid @enderror" id="id" name="id"
                       value="{{$detail->id}}">
            </div>
            <div class="form-group col-6">
                <label for="actName">Date</label>
                <input type="text" class="form-control @error('date') is-invalid @enderror" id="date" name="date"
                       value="{{$detail->date}}">
            </div>
            <div class="form-group col-6">
                <label for="actName">Distance</label>
                <input type="text" class="form-control @error('distance') is-invalid @enderror" id="distance"
                       name="distance" value="{{$detail->distance}}">
            </div>
            <div class="form-group col-6">
                <label for="actName">Latitude</label>
                <input type="text" class="form-control @error('latitude') is-invalid @enderror" id="latitude"
                       name="latitude" value="{{$detail->latitude}}">
            </div>
            <div class="form-group col-6">
                <label for="actName">Longitude</label>
                <input type="text" class="form-control @error('longitude') is-invalid @enderror" id="longitude"
                       name="longitude" value="{{$detail->longitude}}">

            <br>
            <input class="btn btn-primary" type="submit" value="Submit">
            <a class="btn btn-warning mx-1" href="/activities/">Cancel</a>
        </form>
    </div>





@endsection
