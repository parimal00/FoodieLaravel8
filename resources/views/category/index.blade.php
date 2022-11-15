@extends('voyager::master')

@section('content')
    <div class="p-5">

        <div>

            <form action="{{ route('admin.categories.create') }}" method="get">
                <button class="bg-green-400 text-white rounded-md py-2 px-3">Create Category</button>
            </form>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Category Name</th>
                    <th scope="col">Create At</th>
                    <th scope="col">Updated At</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <th scope="row">{{ $category->id }}</th>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->created_at }}</td>
                        <td>{{ $category->updated_at }}</td>
                        <td>
                            <div style="display:flex">
                                <form action="{{ route('admin.categories.edit', [$category->id]) }}" method="get">
                                    <button class="btn btn-primary">Edit</button>
                                </form>
                                <form action="{{ route('admin.categories.destroy', [$category->id]) }} " method="POST">@csrf
                                    @method('DELETE')<button style="margin-left: 5px" class="btn btn-danger">Delete</button></form>
                            </div>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
