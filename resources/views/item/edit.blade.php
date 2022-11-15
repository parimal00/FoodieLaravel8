@extends('voyager::master')

@section('content')
    <div class="p-5">
        <div class="w-full">

            <form action="{{ route('admin.items.update', [$item->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="exampleFormControlInput1">Name</label>
                    <input name="name" value="{{ $item->name }}" type="text" class="form-control"
                        id="exampleFormControlInput1" placeholder="enter item name">
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
                            <option class="text-black" {{ $item->category_id == $category->id ? 'selected' : '' }}
                                value="{{ $category->id }}">{{ $category->name }}</option>
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
                    <input type="file" class="form-control-file" name="item_image">
                    @error('item_image')
                        <span style="color:red">
                            {{ $message }} <br>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Price Per Unit</label>
                    <input value="{{ $item->price_per_unit }}" type="text" name="price_per_unit" class="form-control"
                        id="exampleFormControlInput1" placeholder="enter item name">
                    @error('price_per_unit')
                        <span style="color:red">
                            {{ $message }} <br>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Discount</label>
                    <input value="{{ $item->discount }}" type="text" name="discount" class="form-control"
                        id="exampleFormControlInput1" placeholder="enter item name">
                    @error('discount')
                        <span style="color:red">
                            {{ $message }} <br>
                        </span>
                    @enderror
                </div>
                <button class="btn btn-primary">Submit </button>
            </form>

        </div>
    </div>
@endsection
