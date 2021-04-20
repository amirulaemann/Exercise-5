@extends('app')
@section('title', 'Books')
@section('content')
<h1>The Hunger Games Book List Available!</h1>
<div class="container">
    <ui class ="list group">
    <div class="row">
    <table class="table table-bordered">
        <thead>
        <th>Book Name</th>
        <th>ISBN</th>
        <th>Categories</th>
        <th>Number of Pages</th>
        </thead>
        <tbody>
        @foreach($p as $pname)
            <tr>
                <td>{{$pname[0]}}</td>
                <td>{{$pname[1]}}</td>
                <td>{{$pname[2]}}</td>
                <td>{{$pname[3]}}</td>
            </tr>
     @endforeach
        </tbody>
    </ui>
    </table>
</div>
@endsection