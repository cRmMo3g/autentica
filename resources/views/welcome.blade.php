@extends('layouts.main')
@section('content')
    <table class="table table-borderless">
        <thead>
        Darbinieku saraksts
        </thead>
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
           </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Ričards</td>
            <td>Gailums</td>

        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>

        </tr>
        <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>

        </tr>
        </tbody>    </table>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>

@endsection
