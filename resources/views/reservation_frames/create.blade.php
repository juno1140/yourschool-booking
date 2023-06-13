@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        予約枠作成
                        <a href="{{ route('reservation_frames.index') }}" class="btn btn-dark btn-sm">戻る</a>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('reservation_frames.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="room_id" class="form-label">部屋</label>
                                <select class="form-select" aria-label="Default select example" name="room_id" id="room_id">
                                    <option selected>部屋を選択してください</option>
                                    @foreach($rooms as $room)
                                        <option value="{{ $room->id }}">{{ $room->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="start_date" class="form-label">期間</label>
                                <div class="d-flex align-items-center">
                                    <input type="date" class="form-control" id="start_date" name="start_date">
                                   　〜　
                                    <input type="date" class="form-control" id="end_date" name="end_date">
                                </div>
                            </div>
                            <div class="mt-5 text-center">
                                <button class="btn btn-primary">登録</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
