@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                <a href="{{ route('blog.admin.categories.create')}}" class="btn btn-primary">Добавить</a>
                </div>

                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Category</th>
                                <th>Parent</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($paginator as $item) 
                            <tr>
                            <td>{{ $item -> id }}</td>
                            <td><a href="{{ route('blog.admin.categories.edit', $item -> id) }}">{{ $item -> title }}</a></td>
                            <td>{{ $item -> parent_id }}</td>
                            </tr> 
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            @if ($paginator->total() > $paginator->count())
        <br>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        {{ $paginator->links() }}
                    </div>
                </div>
            </div>
        </div>
        @endif
        </div>
    </div>
</div>
@endsection