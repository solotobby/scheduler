@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Activity') }}</div>

                <div class="card-body">
                @if(session('success'))
                        <div class="row">
                            <div class="col-md-12">
                                <div class="alert alert-success">
                                    <p>{{ session('success') }}</p>
                                    <a class="close" href="#"></a>
                                </div>
                            </div>
                        </div>
                    @endif

                    
                    <form action="{{ url('activities') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Activity Name</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Activity Name" required>
                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword2">Start Date</label>
                            <input type="datetime-local" name="start" id="datetimepicker1" class="form-control" placeholder="Start Date" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword3">End Date</label>
                            <input type="datetime-local" name="end" class="form-control" id="exampleInputPassword3" placeholder="End Date" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Description</label>
                            <textarea name="description" id="exampleInputPassword4" class="form-control" required></textarea>
                        </div>
                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection

<script>
  $(function () {
    $('#datetimepicker1').datetimepicker();
 });
</script>