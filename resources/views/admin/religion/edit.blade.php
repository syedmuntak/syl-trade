@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="element-wrapper">
            <h6 class="element-header">Religions Update</h6>
            <div class="element-box-tp">
                <form method="POST" action="{{ route('admin.religion.update') }}">
                    @csrf
                    <input type="hidden" value="{{ $religion->id }}" name="id">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Religion Name</label>
                                <input
                                class="form-control"
                                placeholder="Religion Name"
                                name="name"
                                value="{{ $religion->name }}"
                                type="text"
                                id="sluggable">
                            </div>
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Religion Slug</label>
                                <input
                                    class="form-control"
                                    placeholder="Religion Slug"
                                    type="text"
                                    name="slug"
                                    value="{{ $religion->slug }}"
                                    id="slugged_value"
                                    readonly >
                            </div>
                            @error('slug')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-buttons-w">
                        <button class="btn btn-primary" type="submit">Update religion</button>
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
