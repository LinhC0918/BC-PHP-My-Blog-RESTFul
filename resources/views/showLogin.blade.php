@extends('master')
@section('content')
    <div class="title m-b-md">
        My Blog
    </div>

    <div class="links">
        <a href="{{ route('show.login') }}">
            <button type="button" class="btn btn-outline-primary">Đăng Nhập</button>
        </a>
    </div>
@endsection