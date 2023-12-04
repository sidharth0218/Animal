
@extends('master')
@section('student-form')

    <div class="content-wrapper">
        <div class="row">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}

                </div>
            @endif
            <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title">Table</h4>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">dob</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $item)
                      <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->first }}</td>
                        <td>{{ $item->last }}</td>
                        <td>{{ $item->dob }}</td>
                        <td><a href="#" class="btn btn-info">Edit</a><a  class="btn btn-danger" href="###">Delete</a></td>
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

