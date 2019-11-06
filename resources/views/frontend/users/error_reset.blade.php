@extends('layouts.app')
@section('title', 'Khôi phục mật khẩu')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Reset Password') }}</div>
                    <div><p class="text-center text-danger">{{ $message }}</p></div>
                </div>
            </div>
        </div>
    </div>
@endsection

