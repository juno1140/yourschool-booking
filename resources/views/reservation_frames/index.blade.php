@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        予約枠一覧
                        <a href="{{ route('reservation_frames.create') }}" class="btn btn-primary btn-sm">作成</a>
                    </div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">部屋名</th>
                                    <th scope="col">日付</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($reservationFrames as $reservationFrame)
                                    <tr>
                                        <th scope="row">{{ $reservationFrame->id }}</th>
                                        <td>{{ $reservationFrame->room->name }}</td>
                                        <td>{{ $reservationFrame->date }}</td>
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
