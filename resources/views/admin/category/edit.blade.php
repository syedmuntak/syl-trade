@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="element-wrapper">
            <h6 class="element-header">Category Update</h6>
            <div class="element-box-tp">
                <form method="POST" action="{{ route('admin.category.update') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $cat->id }}" name="id">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="">Category Name</label>
                                <input
                                class="form-control"
                                placeholder="Category Name"
                                name="name"
                                value="{{ $cat->name }}"
                                type="text"
                                id="sluggable">
                            </div>
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="">Category Slug</label>
                                <input
                                    class="form-control"
                                    placeholder="Category Slug"
                                    type="text"
                                    name="slug"
                                    value="{{ $cat->slug }}"
                                    id="slugged_value"
                                    readonly >
                            </div>
                            @error('slug')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="">Icon</label>
                                <input
                                class="form-control"
                                name="icon"
                                type="file">
                            </div>
                            @error('icon')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-buttons-w">
                        <button class="btn btn-primary" type="submit">Update category</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@push('js')
    <script>
        $("#sluggable").on('keyup input', function() {
            var Text = $(this).val();
            Text = Text.toLowerCase();
            Text = Text.replace(/[^a-zA-Z0-9]+/g,'-');
            $("#slugged_value").val(Text);
        });
    </script>
@endpush
