@extends('backend.layouts.master')
@section('title','Bestboard || Banner Edit')
@section('main-content')

<div class="card">
    <h5 class="card-header">Edit Banner</h5>
    <div class="card-body">
      <form method="post" action="{{route('banner.update',$banner->id)}}">
        @csrf 
        @method('PATCH')
        <div class="form-group">
          <label for="inputTitle" class="col-form-label">Series <span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="series" placeholder="Enter series"  value="{{$banner->series}}" class="form-control">
        @error('series')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>

        <div class="form-group">
          <label for="category">Category</label>
          <select name="category" id="category" class="form-control">
              @foreach ($parent_cats as $parent_cat)
                  <option value="{{ $parent_cat->id }}" data-title="{{ $parent_cat->title }}"
                          {{ $parent_cat->id == $banner->cat_id ? 'selected' : '' }}>
                      {{ $parent_cat->title }}
                  </option>
              @endforeach
          </select>
          @error('category')
          <span class="text-danger">{{ $message }}</span>
          @enderror
      </div>
      
      <!-- Hidden input fields for id and title -->
      <input type="hidden" name="cat_id" id="cat_id">
      <input type="hidden" name="category" id="category_title">





        <div class="form-group">
          <label for="inputTitle" class="col-form-label">Sub Category <span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="sub_category" placeholder="Enter Sub Category"  value="{{$banner->sub_category}}" class="form-control">
        @error('sub_category')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>

        <div class="form-group">
          <label for="inputDesc" class="col-form-label">Description</label>
          <textarea class="form-control" id="description" name="description">{{$banner->description}}</textarea>
          @error('description')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
        <label for="inputPhoto" class="col-form-label">Photo <span class="text-danger">*</span></label>
        <div class="input-group">
            <span class="input-group-btn">
                <a  data-input="thumbnail" data-preview="holder" class="lfm btn btn-primary">
                <i class="fa fa-picture-o"></i> Choose
                </a>
            </span>
          <input id="thumbnail" class="form-control" type="text" name="photo" value="{{$banner->photo}}">
        </div>
        <div id="holder" style="margin-top:15px;max-height:100px;"></div>
          @error('photo')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="form-group">
          <label for="inputPhoto" class="col-form-label">Category Logo</label>
          <div class="input-group">
              <span class="input-group-btn">
                  <a  data-input="thumbnail_cat_logo" data-preview="holder_cat_logo" class="lfm btn btn-primary">
                  <i class="fa fa-picture-o"></i> Choose
                  </a>
              </span>
          <input id="thumbnail_cat_logo" class="form-control" type="text" name="cat_logo" value="{{$banner->cat_logo}}">
        </div>
        
        <div class="form-group">
          <label for="status" class="col-form-label">Status <span class="text-danger">*</span></label>
          <select name="status" class="form-control">
            <option value="active" {{(($banner->status=='active') ? 'selected' : '')}}>Active</option>
            <option value="inactive" {{(($banner->status=='inactive') ? 'selected' : '')}}>Inactive</option>
          </select>
          @error('status')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="form-group mb-3">
           <button class="btn btn-success" type="submit">Update</button>
        </div>
      </form>
    </div>
</div>

@endsection

@push('styles')
<link rel="stylesheet" href="{{asset('backend/summernote/summernote.min.css')}}">
@endpush
@push('scripts')
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script src="{{asset('backend/summernote/summernote.min.js')}}"></script>
<script>
    $('.lfm').filemanager('image');
    document.addEventListener("DOMContentLoaded", function() {
        var categoryDropdown = document.getElementById('category');
        var categoryIdField = document.getElementById('cat_id');
        var categoryTitleField = document.getElementById('category_title');

        categoryDropdown.addEventListener('change', function() {
            var selectedOption = categoryDropdown.options[categoryDropdown.selectedIndex];
            categoryIdField.value = selectedOption.value;
            categoryTitleField.value = selectedOption.getAttribute('data-title');
        });

        // Trigger change event on page load to ensure initial values are assigned
        var selectedOption = categoryDropdown.options[categoryDropdown.selectedIndex];
        categoryIdField.value = selectedOption.value;
        categoryTitleField.value = selectedOption.getAttribute('data-title');
    });
 
</script>
@endpush