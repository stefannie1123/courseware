@extends('base')

@section('content')

<h1>Learners</h1>

<table class="table table-bordered table-striped table-sm">
    <thead>
        <tr>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Level</th>
            <th>Status</th>
        </tr>
    </thead>

    <tbody>
        @foreach($learners as $lrn)

            <tr>
                <td>{{$lrn->lname}}</td>
                <td>{{$lrn->fname}}</td>
                <td>{{$lrn->level}}</td>
                <td>{{$lrn->status}}</td>
            </tr>

        @endforeach
    </tbody>
</table>


@stop