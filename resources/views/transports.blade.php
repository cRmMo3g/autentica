@extends('layouts.main')
@section('content')

    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Transportlīdzeklis</th>
            <th scope="col">Vārds Uzvārds</th>
            <th scope="col">E-pasts</th>
            <th scope="col">Sākums</th>
            <th scope="col">Beigas</th>
            <th scope="col">status</th>
            <th scope="col">dzest</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($transports as $row)
            <tr>
                <th scope="row">{{ $row->id }}</th>
                <td>{{ $row->VardsUzvards }}</td>
                <td>{{ $row->transports }}</td>
                <td>{{ $row->epasts }}</td>
                <td>{{ $row->lieto_no }}</td>
                <td>{{ $row->lieto_lidz }}</td>
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
                {!! $transports->links("pagination::bootstrap-5") !!}
            </td>


        </tr>
        </tbody>
    </table>

        <div class="row">
            <h3 class="page-header text-left" style="padding-top:15x;" >Atlases forma - No, Lidz, pēc datuma</h3>
            <h5 class="page-header text-left" style="padding-top:15x;" >   (izdrukas iespēja)</h5>

            <div class="col-md-4 col-md-offset-4">
                <h2 class="text-center"></h2>
                <form method="POST" action="{{ route('atlase') }}">
                    @csrf

                    <div class="mb-3">
                        <label>Transportlīdzekli lieto no:</label>
                        <input type="date" class="form-control" name="lieto_no" required aria-required="true">
                    </div>
                    <div class="mb-3">
                        <label>Transportlīdzekli Lieto līdz:</label>
                        <input type="date" class="form-control" name="lieto_lidz" required aria-required="true">
                    </div>
                    <input type="submit" value="Submit" class="btn btn-primary">
                </form>
            </div>
        </div>
@endsection
