@extends('layouts.app')
@section('content')
    <a class="btn btn-outline-secondary mx-1" href="/details/{{$detail->id}}/edit">Edit</a>
details/show.blade.php
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
            </div>
            <br>
            <a class="btn btn-warning mx-1" href="/activities/">Cancel</a>
        </form>

        <div class="mapouter">
            <div class="gmap_canvas">
                <iframe width="600" height="500" id="gmap_canvas"
                        src="https://maps.google.com/maps?q={{$detail->latitude}},%20{{$detail->longitude}}&t=&z=13&ie=UTF8&iwloc=&output=embed"
                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>

                <style>.mapouter {
                        position: relative;
                        text-align: right;
                        height: 500px;
                        width: 600px;
                    }</style>

                <style>.gmap_canvas {
                        overflow: hidden;
                        background: none !important;
                        height: 500px;
                        width: 600px;
                    }</style>
            </div>
        </div>

    </div>
    </div>

@endsection
