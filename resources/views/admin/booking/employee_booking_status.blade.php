@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="element-wrapper">
            <h6 class="element-header">Update</h6>
            <div class="element-box-tp">
                <form method="POST"  action="{{ route('admin.hire.changeBookingStatus') }}">
                    @csrf
                 
                    <div class="row">
                      
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="">Status</label>
                                <select name="status" class="form-control">
                                    @foreach ($booking as $item)
                                    <option value="Pending" {{ $item->status =="" ? 'selected' : '' }}>{{ $item->status }}</option>
                                    <option value="Approved"{{ $item->status =="" ? 'selected' : '' }}>Approved</option>
                                    @endforeach
                                </select>
                            </div>
                        
                        </div>
                        
                    </div>
                    <div class="form-buttons-w">
                        <button class="btn btn-primary" type="submit">Update Status</button>
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

