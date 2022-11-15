@extends('voyager::master')
{{-- <link href="{{ asset('css/app.css') }}" type="text/css" rel="stylesheet"> --}}
@section('content')
    <div style="padding:10px">
        <div class="w-full">
            <form action="{{ route('admin.categories.store') }}" method="POST">
                @csrf
                
                <div class="form-group">
                  <label for="validationServer01">Category</label>
                  <input type="text" name="name" class="form-control is-valid" id="validationServer01" aria-describedby="emailHelp" placeholder="Enter Category Name">
                  @error('name')
                  <div style="color: red">
                      {{ $message }} <br>
                  </div>
              @enderror
                </div>
           
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
          
        </div>
    </div>
@endsection
