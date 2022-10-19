@extends('layouts.main')
@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Braucamā nosaukums</th>
            <th scope="col">Apraksts</th>
            <th scope="col">Dzest</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($velosipedis as $row)
            <tr>
                <th scope="row">{{ $row->id }}</th>
                <td>{{ $row->nosaukums }}</td>
                <td>{{ $row->apraksts }}</td>
                <td>
                    <form action="{{ route('dzest_braucamo', $row->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger">X</button>
                    </form>
                </td>
            </tr>
        @endforeach
        <tr>
            <td colspan="5">
                {!! $velosipedis->links("pagination::bootstrap-5") !!}
            </td>


        </tr>
        </tbody>
    </table>

    <form class="row g-3" action="{{ route('pievienot_braucamo') }}" method="POST">
        <div class="col-md-6">
            <label class="form-label">Pievienot darbinieku sarakstam</label>
        </div>
        <div class="col-12">
            <label for="nosaukums" class="form-label">Nosaukums</label>
            <input type="text" class="form-control" name="nosaukums" placeholder="Braucamā nosaukums" required aria-required="true">
        </div>
        <div class="col-12">
            <label for="apraksts" class="form-label">apraksts</label>
            <input type="text" class="form-control" name="apraksts" placeholder="Apraksts par braucamo" required aria-required="true">
        </div>

        <div class="col-12">
                @csrf
                <button type="submit" class="btn btn-info">Pievienot Velosipēdu sarakstam</button>
            </form>

@endsection
