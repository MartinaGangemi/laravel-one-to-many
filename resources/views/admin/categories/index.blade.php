@extends('layouts.admin')

@section('content')

<div class="container">
    <h1>Categorie</h1>

    @if (session('message'))
    <div class="alert alert-success mt-2">
        {{ session('message') }}
    </div>
    @endif

    <table class="table table-striped table-inverse table-responsive">
        <thead class="thead-inverse">
            <tr>
                <th>ID</th>
                <th>Name</th>
                
            </tr>
        </thead>
        <tbody>
            @forelse($cats as $cat)
            <tr>
                <td scope="row">{{$cat->id}}</td>
                <td>{{$cat->name}}</td>
                </td>

            </tr>
            @empty
            <tr>
                <td scope="row"> Nessuna categoria da mostrare!</td>
            </tr>
            @endforelse

        </tbody>
    </table>

</div>


@endsection