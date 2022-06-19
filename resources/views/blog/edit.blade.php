@extends('layouts.app')
@section('title') Laravel CRUD Edit Page @endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center my-3">
            <div class="col-8">
                <div class="">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="">
                                    <h4 class="card-title mb-3">Create Post</h4>
                                </div>
                                <a href="{{route('blog.index')}}" class="btn btn-outline-primary">Home</a>
                            </div>
                            <form action="{{route('blog.update',$blog->id)}}" method="post">
                                @csrf
                                @method('put')
                                <div class="mb-3">
                                    <label class="form-label">Title</label>
                                    <input type="text" name="title" value="{{old('title',$blog->title)}}" class="form-control ">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Description</label>
                                    <textarea type="text" rows="10" name="description" class="form-control ">{{old('description',$blog->description)}}</textarea>
                                </div>
                                <div class="mb-3 text-center">
                                    <button class="btn btn-outline-primary" id="update">Update Post</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
