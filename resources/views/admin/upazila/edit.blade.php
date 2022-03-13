@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="element-wrapper">
            <h6 class="element-header">District Update</h6>
            <div class="element-box-tp">
                <form method="POST"  action="{{ route('admin.upazila.update') }}">
                    @csrf
                    <input type="hidden" value="{{ $upazila->id }}" name="id">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="">Upazila Name</label>
                                <input
                                class="form-control"
                                placeholder="District Name"
                                name="name"
                                value="{{ $upazila->name }}"
                                type="text"
                                id="sluggable">
                            </div>
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="">District</label>
                                <select name="district_id" class="form-control">
                                    @foreach ($district as $item)
                                    <option value="{{ $item->id }}" {{ $item->id === $upazila->district_id ? 'selected' : '' }}>{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('district_id')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="">Upazila Slug</label>
                                <input
                                    class="form-control"
                                    placeholder="Upazila Slug"
                                    type="text"
                                    name="slug"
                                    value="{{ $upazila->slug }}"
                                    id="slugged_value"
                                    readonly >
                            </div>
                            @error('slug')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-buttons-w">
                        <button class="btn btn-primary" type="submit">Update Upazila</button>
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
