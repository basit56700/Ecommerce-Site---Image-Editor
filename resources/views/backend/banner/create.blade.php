@extends('backend.layouts.master')

@section('title', 'Bestboard || Banner Create')

@section('main-content')

    <div class="card">
        <h5 class="card-header">Add Banner</h5>
        <div class="card-body">
            <form method="post" action="{{ route('banner.store') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="inputTitle" class="col-form-label">Series <span class="text-danger">*</span></label>
                    <input id="inputTitle" type="text" name="series" placeholder="Enter series"
                        value="{{ old('series') }}" class="form-control">
                    @error('series')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>


                <div class="form-group">
                    <label for="category">Category</label>
                    <select name="category" id="category" class="form-control">
                        <option value="">--Select any category--</option>
                        @foreach ($parent_cats as $parent_cat)
                            <option value="{{ $parent_cat->id }}" data-title="{{ $parent_cat->title }}">
                                {{ $parent_cat->title }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Hidden input fields for id and title -->
                <input type="hidden" name="cat_id" id="category_id">
                <input type="hidden" name="category" id="category_title">






                <div class="form-group">
                    <label for="inputTitle" class="col-form-label">Sub Category <span class="text-danger">*</span></label>
                    <input id="inputTitle" type="text" name="sub_category" placeholder="Enter Sub Category"
                        value="{{ old('sub_category') }}" class="form-control">
                    @error('sub_category')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>


                <div class="form-group">
                    <label for="inputDesc" class="col-form-label">Description</label>
                    <textarea class="form-control" id="description" name="description">{{ old('description') }}</textarea>
                    @error('description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="inputPhoto" class="col-form-label">Photo <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <span class="input-group-btn">
                            <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                <i class="fa fa-picture-o"></i> Choose
                            </a>
                        </span>
                        <input id="thumbnail" class="form-control" type="text" name="photo"
                            value="{{ old('photo') }}">
                    </div>
                    <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                    @error('photo')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="inputPhoto" class="col-form-label">Category Logo</label>
                    <div class="input-group">
                        <span class="input-group-btn">
                            <a data-input="thumbnail-logo" data-preview="holder_cat_logo" class="lfm btn btn-primary">
                                <i class="fa fa-picture-o"></i> Choose
                            </a>
                        </span>
                        <input id="thumbnail-logo" class="form-control" type="text" name="cat_logo"
                            value="{{ old('photo') }}">
                    </div>
                    <div id="holder_cat_logo" style="margin-top:15px;max-height:100px;"></div>

                    @error('cat_logo')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="status" class="col-form-label">Status <span class="text-danger">*</span></label>
                    <select name="status" class="form-control">
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                    @error('status')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <button type="reset" class="btn btn-warning">Reset</button>
                    <button class="btn btn-success" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>

@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('backend/summernote/summernote.min.css') }}">
@endpush
@push('scripts')
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script src="{{ asset('backend/summernote/summernote.min.js') }}"></script>
    <script>
        $('#lfm').filemanager('image');
        document.getElementById('category').addEventListener('change', function() {
            var selectedOption = this.options[this.selectedIndex];
            document.getElementById('category_id').value = selectedOption.value;
            document.getElementById('category_title').value = selectedOption.getAttribute('data-title');
        });
    </script>
@endpush
