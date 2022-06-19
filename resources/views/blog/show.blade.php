@extends('layouts.app')
@section('title') Laravel CRUD Show Page @endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center my-3">
            <div class="col-8">
                <div class="">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">{{$blog->title}}</h4>
                            <p class="card-text text-black-50">{{$blog->description}}</p>
                            <p>{{$blog->created_at->format("d/m/Y")}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
