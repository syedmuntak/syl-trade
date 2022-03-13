@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="element-wrapper">
            <h6 class="element-header">Division Update</h6>
            <div class="element-box-tp">
                <form method="POST" action="{{ route('admin.division.update') }}">
                    @csrf
                    <input type="hidden" value="{{ $division->id }}" name="id">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Division Name</label>
                                <input
                                class="form-control"
                                placeholder="Division Name"
                                name="name"
                                value="{{ $division->name }}"
                                type="text"
                                id="sluggable">
                            </div>
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Division Slug</label>
                                <input
                                    class="form-control"
                                    placeholder="Division Slug"
                                    type="text"
                                    name="slug"
                                    value="{{ $division->slug }}"
                                    id="slugged_value"
                                    readonly >
                            </div>
                            @error('slug')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-buttons-w">
                        <button class="btn btn-primary" type="submit">Update Division</button>
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
