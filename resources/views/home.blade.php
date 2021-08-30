@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Activities') }}</div>

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


                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Start Date</th>
                            <th scope="col">End Date</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?> 
                            @foreach ($activities as $act)
                            <tr>
                                <th scope="row">{{$i++}}</th>
                                <td>{{$act->name}}</td>
                                <td>{{$act->start}}</td>
                                <td>{{$act->end}}</td>
                                <td><a href="" class="btn btn-primary btn-sm">Mark Done</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
