@extends('admin.layouts.admin')

@section('content')
{{--
<div class="main-panel">
    <div class="content-wrapper"> --}}
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Add New Review</h4>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
         @endif
        {{-- <p class="card-description"> Basic form elements </p> --}}
        <form class="forms-sample" method="POST" action="{{ route('admin.review.store') }}" enctype="multipart/form-data">
          @csrf
            <div class="form-group">
          <p class="card-description"> Review Details</p>
          <div class="row">
            <div class="col-md-5">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Name</label>
                <div class="col-sm-9">
                  <input type="text" name="name" class="form-control" placeholder="enter reviewer name" value="{{old('name')}}" required/>
                </div>
              </div>
            </div>
            <div class="col-md-7">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Job</label>
                <div class="col-sm-9">
                  <input type="text" name="job" class="form-control" placeholder="enter reviewer job" value="{{old('job')}}" required/>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label>File upload</label>
              <input type="file" name="image" class="file-upload-default">
              <div class="input-group col-xs-12">
                <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                <span class="input-group-append">
                  <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                </span>
              </div>
            </div>
            <div class="form-group">
              <label for="exampleTextarea1">Description</label>
              <textarea class="form-control" id="exampleTextarea1" rows="4" maxlength="255" name="description" required>{{old('description')}}</textarea>
            </div>
          </div>
          <button type="submit" class="btn me-2" style="background-color: #07CCC2FF; border-color: #07CCC2FF;">Update</button>
        </form>
      </div>
    </div>
  </div>
{{-- </div>
</div> --}}

@endsection
