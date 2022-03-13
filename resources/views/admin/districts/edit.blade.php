@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="element-wrapper">
            <h6 class="element-header">District Update</h6>
            <div class="element-box-tp">
                <form method="POST" action="{{ route('admin.district.update') }}">
                    @csrf
                    <input type="hidden" value="{{ $district->id }}" name="id">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="">District Name</label>
                                <input
                                class="form-control"
                                placeholder="District Name"
                                name="name"
                                value="{{ $district->name }}"
                                type="text"
                                id="sluggable">
                            </div>
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="">Division</label>
                                <select name="division_id" class="form-control">
                                    @foreach ($divisions as $item)
                                    <option value="{{ $item->id }}" {{ $item->id === $district->division_id ? 'selected' : '' }}>{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('division_id')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="">District Slug</label>
                                <input
                                    class="form-control"
                                    placeholder="District Slug"
                                    type="text"
                                    name="slug"
                                    value="{{ $district->slug }}"
                                    id="slugged_value"
                                    readonly >
                            </div>
                            @error('slug')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-buttons-w">
                        <button class="btn btn-primary" type="submit">Update District</button>
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
