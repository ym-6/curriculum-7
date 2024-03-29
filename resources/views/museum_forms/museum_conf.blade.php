@extends('layouts.navlayout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">美術館登録確認</div>

                <div class="card-body">
                    <div class="mb-3">
                        <label for="museum_name" class="form-label">美術館名</label>
                        <p>{{ $museum_name }}</p>
                    </div>

                    <div class="mb-3">
                        <label for="postalcode" class="form-label">郵便番号</label>
                        <p>{{ $postalcode }}</p>
                    </div>

                    <div class="mb-3">
                        <label for="prefecture" class="form-label">都道府県</label>
                        <p>{{ $prefecture }}</p>
                    </div>
                    
                    <div class="mb-3">
                        <label for="address" class="form-label">住所</label>
                        <p>{{ $address }}</p>
                    </div>

                    <div class="mb-3">
                        <label for="tel" class="form-label">電話番号</label>
                        <p>{{ $tel }}</p>
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">美術館画像</label>
                        <img src="{{ $image }}" class="img-fluid" alt="{{ $museum_name }}">
                    </div>

                    <div class="row justify-content-between">
                        <form action="{{ route('museums.comp') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="museum_name" value="{{ $museum_name }}">
                            <input type="hidden" name="prefecture" value="{{ $prefecture }}">
                            <input type="hidden" name="postalcode" value="{{ $postalcode }}">
                            <input type="hidden" name="address" value="{{ $address }}">
                            <input type="hidden" name="tel" value="{{ $tel }}">
                            <input type="hidden" name="image" value="{{ $image }}">
                            
                            <div class="center-text" mt-3>
                                <button type="submit" class="btn btn-primary">登録</button>
                                <a href="{{ route('museums.store') }}" class="btn btn-secondary">戻る</a>
                            </div>
                        </form>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
