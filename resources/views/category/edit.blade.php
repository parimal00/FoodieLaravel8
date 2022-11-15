@extends('voyager::master')

@section('content')
    <div class="p-5">

        <div class="w-full">
            <form action="{{ route('admin.categories.update', [$category->id]) }}" method="POST">
                @method('PUT')
                @csrf

                <div class="form-group">
                    <label for="validationServer01">Category</label>
                    <input type="text" name="name" class="form-control is-valid" id="validationServer01"
                        aria-describedby="emailHelp" value="{{ $category->name }}" placeholder="Enter Category Name">
                    @error('name')
                        <div style="color: red">
                            {{ $message }} <br>
                        </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
        {{-- <div class="w-full">
            <form action="{{ route('admin.categories.update', [$category->id]) }}" method="POST">
                @method('PUT')
                @csrf
                <label class="text-black px-3 border-b-2 w-full">Name</label> <br>
                <input class="rounded-md w-full py-3 px-3 border-solid"type="text" name="name"
                    value="{{ $category->name }}" placeholder="category name"> <br>

                @error('name')
                    <span class="text-red-800 px-3">
                        {{ $message }} <br>
                    </span>
                @enderror


                <button class="bg-green-400 text-white py-2 px-3">Update</button>
            </form>
        </div> --}}
    </div>
@endsection
