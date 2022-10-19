@extends('layouts.main')
@section('content')
<div class="container" style="padding-top: 10px; ">
    <button class="btn btn-sm btn-outline-warning" id="printPageButton" onclick="print('print')">Drukāt atlasi (print)</button>
</div>
    <h5 style="padding:15px;text-align: center;">Atskaite par periodu, no {{$lieto_no}} līdz {{$lieto_lidz}} rezervācijām</h5>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Transportlīdzeklis</th>
            <th scope="col">Vārds Uzvārds</th>
            <th scope="col">E-pasts</th>
            <th scope="col">Sākums</th>
            <th scope="col">Beigas</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->transports }} </td>
                <td>{{ $post->VardsUzvards }} </td>
                <td>{{ $post->epasts }} </td>
                <td>{{ $post->lieto_no }} </td>
                <td>{{ $post->lieto_lidz }} </td>
            </tr>
        @endforeach
        <tr>


        </tr>
        </tbody>
    </table>

@endsection
