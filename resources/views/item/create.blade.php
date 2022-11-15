@extends('voyager::master')
{{-- <link href="{{ asset('css/app.css') }}" type="text/css" rel="stylesheet"> --}}

@section('content')
    <div class="p-5">

        @if (count($categories) > 0)
            <form action="{{ route('admin.items.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1">Name</label>
                    <input name="name" value="{{old('name')}}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="enter item name">
                    @error('name')
                        <span style="color:red">
                            {{ $message }} <br>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Example select</label>
                    <select name="category_id" class="form-control" id="exampleFormControlSelect1">
                        @foreach ($categories as $category)
                            <option class="text-black" value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <span style="color:red">
                            {{ $message }} <br>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Upload Image</label>
                    <input  type="file" class="form-control-file" name="item_image">
                    @error('item_image')
                        <span style="color:red">
                            {{ $message }} <br>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Price Per Unit</label>
                    <input  value="{{old('price_per_unit')}}"  type="text" name="price_per_unit" class="form-control" id="exampleFormControlInput1"
                        placeholder="enter item name">
                    @error('price_per_unit')
                        <span style="color:red">
                            {{ $message }} <br>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Discount</label>
                    <input  value="{{old('discount')}}"  type="text" name="discount" class="form-control" id="exampleFormControlInput1"
                        placeholder="enter item name">
                    @error('discount')
                        <span style="color:red">
                            {{ $message }} <br>
                        </span>
                    @enderror
                </div>
                <button class="btn btn-primary">Submit </button>
            </form>

            {{-- <div class="w-full">
                <form action="{{ route('admin.items.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label class="text-black px-3 border-b-2 w-full">Name</label> <br>
                    <input class="rounded-md placeholder-gray-600 text-black w-full py-3 px-3 border-solid"type="text"
                        name="name" value="{{ old('name') }}" placeholder="Item name">
                    <br>
                    @error('name')
                        <span class="text-red-800 px-3">
                            {{ $message }} <br>
                        </span>
                    @enderror

                    <label class="text-black px-3 border-b-2 w-full">Quantity</label> <br>
                    <input class="rounded-md placeholder-gray-600 text-black w-full py-3 px-3 border-solid"type="text"
                        name="quantity" value="{{ old('quantity') }}" placeholder="Item name">
                    <br>
                    @error('quantity')
                        <span class="text-red-800 px-3">
                            {{ $message }} <br>
                        </span>
                    @enderror

                    <label class="text-black px-3 border-b-2 w-full">Category</label> <br>
                    <select class="rounded-md text-black w-full py-3 px-3 border-solid bg-white" name="category_id">
                        @foreach ($categories as $category)
                            <option class="text-black" value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('category')
                        <span class="text-red-800 px-3">
                            {{ $message }} <br>
                        </span>
                    @enderror

                    <label class="text-black px-3 border-b-2 w-full">Item image</label> <br>
                    <input type="file" name="item_image" placeholder="Upload image">
                    @error('item_image')
                        <span class="text-red-800 px-3">
                            {{ $message }} <br>
                        </span>
                        </span>
                    @enderror

                    <label class="text-black px-3 border-b-2  w-full">Price Per Unit</label> <br>
                    <input class="rounded-md  placeholder-gray-600 text-black w-full py-3 px-3 border-solid"type="text"
                        value="{{ old('price_per_unit') }}" name="price_per_unit" placeholder="price per unit">
                    <br>

                    @error('price_per_unit')
                        <span class="text-red-800 px-3">
                            {{ $message }} <br>
                        </span>
                    @enderror

                    <label class="text-black px-3 border-b-2 w-full">Discount</label> <br>
                    <input class="rounded-md w-full py-3 px-3 placeholder-gray-600 text-black border-solid"type="text"
                        value="{{ old('discount') }}" name="discount" placeholder="Item name">
                    <br>

                    @error('discount')
                        <span class="text-red-800 px-3">
                            {{ $message }} <br>
                        </span>
                    @enderror


                    <button class="bg-green-400 text-white py-2 px-3">Save</button>
                </form>
            </div> --}}
        @else
            <span class="text-danger opacity-100" style="color: rgba(255, 0, 0, 1)">At least one category is needed before
                creating items! Click <a href="{{ route('admin.categories.create') }}"> here </a> to create
                category!</span>
        @endif
    </div>
@endsection
