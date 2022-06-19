@extends('layouts.app')
@section('title') Crud Home Page @endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center my-3">
            <div class="col-8">
                <div class="">

                   <table class="table table-bordered">
                       <thead class="table table-info">
                           <tr class="text-center">
                               <th>Id</th>
                               <th>Post</th>
                               <th>Created_at</th>
                               <th>Action</th>
                           </tr>
                       </thead>
                       <tbody>
                       @foreach($blogs as $blog)
                           <tr class="text-center">
                               <td>{{$blog->id}}</td>
                               <td>
                                   <span class="fw-bold mb-0">{{\Illuminate\Support\Str::words($blog->title,7)}}</span>
                                   <br>
                                   <span class="text-black-50">{{\Illuminate\Support\Str::words($blog->description,10)}}</span>
                               </td>
                               <td>{{$blog->created_at->format("d/m/Y")}}</td>
                               <td>
                                   <a href="{{route('blog.show',$blog->id)}}" class="btn btn-sm btn-outline-primary">SeeMore</a>
                                   <a href="{{route('blog.edit',$blog->id)}}" class="btn btn-sm btn-outline-info">Edit</a>
                                   <form action="{{route('blog.destroy',$blog->id)}}" class="d-inline-block" method="post">
                                       @csrf
                                       @method('delete')
                                       <button  class="btn btn-sm btn-outline-danger" id="del">Del</button>
                                   </form>
                               </td>
                           </tr>
                       @endforeach
                       </tbody>
                   </table>
                    <div class="">
                        {{ $blogs->appends(request()->query())->links() }}
{{--                        {{$blogs->links()}}--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
