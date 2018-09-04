@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data {{ $title }}</div>

                <div class="card-body">
                    <a href="{{ route('blog.create') }}" class="btn btn-primary" style="color:#fff">
                        Tambah Data
                    </a>
                    <br /><br />
                    <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <td>Title</td>
                                <td>Writer</td>
                                <td>Create At</td>
                                <td>Content</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($blogs as $blog)
                                <tr>
                                    <td>{{ $blog->title }}</td>
                                    <td>{{ $blog->writer}}</td>
                                    <td>{{ $blog->create_at}}</td>
                                    <td>{{ $blog->content }}</td>
                                    <td>
                                        <a href="" class="btn btn-success btn-sm">View</a>
                                        <a href="" class="btn btn-info btn-sm">Edit</a>
                                        <a href="" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
