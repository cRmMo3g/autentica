@extends('layouts.main')
@section('content')

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Vārds</th>
            <th scope="col">Uzvārds</th>
            <th scope="col">E-pasts</th>
            <th scope="col">Dzest</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($darbinieks as $row)
            <tr>
                <th scope="row">{{ $row->id }}</th>
                <td>{{ $row->vards }}</td>
                <td>{{ $row->uzvards }}</td>
                <td>{{ $row->epasts }}</td>
                <td>
                    <form action="{{ route('dzest', $row->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger">X</button>
                    </form>
                </td>
            </tr>
        @endforeach
        <tr>
            <td colspan="5">
                {!! $darbinieks->links("pagination::bootstrap-5") !!}
            </td>


        </tr>
        </tbody>
    </table>

    @if(session()->has('danger'))
        <div class="alert alert-danger">
            {{ session()->get('danger') }}
        </div>
    @endif

    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif

    <form class="row g-3" action="{{ route('pievienot') }}" method="POST">
        <div class="col-md-6">
            <label class="form-label">Pievienot darbinieku sarakstam</label>
        </div>
        <div class="col-12">
            <label for="vards" class="form-label">Vārds</label>
            <input type="text" class="form-control" name="vards" placeholder="Vārds" required aria-required="true">
        </div>
        <div class="col-12">
            <label for="uzvards" class="form-label">Uzvārds</label>
            <input type="text" class="form-control" name="uzvards" placeholder="Uzvārds" required aria-required="true">
        </div>
        <div class="col-md-6">
            <label for="epasts" class="form-label">Email</label>
            <input type="email" class="form-control" name="epasts" required aria-required="true">
        </div>

        <div class="col-12">
                @csrf
                <button type="submit" class="btn btn-info">Pievienot darbinieku sarakstam</button>
            </form>


@endsection
