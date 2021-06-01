@extends('layouts.app')
@section('content')

    <div class="form-content">
        <form method="POST" action="/activities">
            @csrf

            <div class="row">
                <div class="form-group col-6">
                    <label for="title">Activity Name</label>
                    <input type="text" class="form-control @error('actName') is-invalid @enderror" id="actName" name="actName" value="">
                </div>
{{--                <div class="form-group col-6">--}}
{{--                    <label for="title">Activity ID</label>--}}
{{--                    <input type="text" class="form-control @error('id') is-invalid @enderror" id="id" name="id" value="">--}}
{{--                </div>--}}
{{--                <div class="form-group col-6">--}}
{{--                    <label for="title">Date</label>--}}
{{--                    <input type="text" class="form-control @error('date') is-invalid @enderror" id="date" name="date" value="">--}}
{{--                </div>--}}
{{--                <div class="form-group col-6">--}}
{{--                    <label for="title">Distance</label>--}}
{{--                    <input type="text" class="form-control @error('distance') is-invalid @enderror" id="distance" name="distance" value="">--}}
{{--                </div>--}}
{{--                <div class="form-group col-6">--}}
{{--                    <label for="title">Latitude</label>--}}
{{--                    <input type="text" class="form-control @error('latitude') is-invalid @enderror" id="latitude" name="latitude" value="">--}}
{{--                </div>--}}
{{--                <div class="form-group col-6">--}}
{{--                    <label for="title">Longitude</label>--}}
{{--                    <input type="text" class="form-control @error('longitude') is-invalid @enderror" id="longitude" name="longitude" value="">--}}
{{--                </div>--}}

                {{--            <div class="form-group col-6">--}}
                {{--                <label for="title">Colour</label>--}}
                {{--                <input type="text" class="form-control @error('colour') is-invalid @enderror" id="colour" name="colour" value="">--}}
                {{--            </div>--}}
            </div>


            <br>
            <input class="btn btn-primary" type="submit" value="Submit">
            <a class="btn btn-warning mx-1" href="/activities/">Cancel</a>
        </form>
    </div>

@endsection
