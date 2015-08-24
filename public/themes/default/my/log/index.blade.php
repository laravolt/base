@extends('my.layouts.main')

@section('content')
    <table class="table ui very basic compact">
        <thead>
        <tr>
            <th>Tanggal</th>
            <th>Activity</th>
        </tr>
        </thead>
        <tbody>
            @foreach(range(1, 10) as $item)
                <tr>
                    <td>22 Januari 2015</td>
                    <td>login.success</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
