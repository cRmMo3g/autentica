@extends('layouts.main')
@section('content')

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Darbinieks</th>
            <th scope="col">Velosipēds</th>
            <th scope="col">Lieto no:</th>
            <th scope="col">Lieto līdz:</th>
            <th scope="col">Dzēst ierakstu</th>
        </tr>
        </thead>
        <tbody>

        @foreach ($rezervets as $row)
            <tr>
                <th scope="row">{{ $row->id }}</th>
                <td>{{ $row->darbinieks->vards}}</td>
                <td>{{ $row->velosipeds->nosaukums }}</td>
                <td>{{ $row->laiks_no }}</td>
                <td>{{ $row->laiks_lidz }}</td>
                <td>
                    <form action="{{ route('dzest_velo_darbiniekam', $row->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger">X</button>
                    </form>
                </td>
                <td>

                </td>
            </tr>
        @endforeach
        <tr>
            <td colspan="5">
                {!! $rezervets->links("pagination::bootstrap-5") !!}
            </td>


        </tr>
        </tbody>

    </table>
    <form class="row g-3" action="{{ route('pievienot_velo_darbiniekam') }}" method="POST">
        <div class="col-md-6">
            <label class="form-label">Pievienot darbinieku sarakstam</label>
        </div>
        <div class="col-12">
            <label for="apraksts" class="form-label" >Darbinieka izvēle</label>
            <select name="darbinieki_id" class="form-select" multiple aria-label="multiple select example" required aria-required="true">
                @foreach ($darbinieku_saraksts as $row)
                    <option name ="darbinieki_id" value="{{ $row->id }} ">{{ $row->vards }} {{ $row->uzvards }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-12">
            <label for="apraksts" class="form-label">Velosipēdu izvēle</label>
            <select name="velosipedi_id" class="form-select" multiple aria-label="multiple select example" required aria-required="true">
                @foreach ($velosipedu_saraksts as $row)
                    <option name="velosipedi_id" value="{{ $row->id }} ">{{ $row->nosaukums}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-12">
            <label for="laiks_no" class="form-label">Norādiet laiku, no cikiem lieto darbinieks velosipēdu</label>
            <input type="time" class="form-control" name="laiks_no" placeholder="" required aria-required="true">
        </div>
        <div class="col-12">
            <label for="laiks_lidz" class="form-label" >Norādiet laiku, līdz cikiem lieto darbinieks velosipēdu</label>
            <input type="time" class="form-control" name="laiks_lidz" placeholder="" required aria-required="true">
        </div>

        <div class="col-12">
            @csrf
            <button type="submit" class="btn btn-info">Pievienot Velosipēdu sarakstam</button>
    </form>

@endsection
