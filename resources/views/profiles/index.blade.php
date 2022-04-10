@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img class="rounded-circle w-75" src="/img/freecodecamp.jpg" alt="">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between
            align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a style="text-decoration: none;" href="#">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pe-5">posts</div>
                <div class="pe-5">followers</div>
                <div class="pe-5">following</div>
            </div>
            <div class="pt-4 fw-bold">{{ $user->profile->title  }}</div>
            <div>{{ $user->profile->description }}.</div>
            <div><a class="link-dark" style="text-decoration: none;" href="#">
            {{ $user->profile->url ?? 'N/A' }}
            </a></div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img src="https://cdn.pixabay.com/photo/2022/03/25/19/24/waterfall-7091641_960_720.jpg"
            class="w-100" style="height: 250px">
        </div>
        <div class="col-4">
            <img src="https://cdn.pixabay.com/photo/2015/12/01/20/28/road-1072823_960_720.jpg"
            class="w-100" style="height: 250px">
        </div>
        <div class="col-4">
            <img src="https://cdn.pixabay.com/photo/2021/12/21/14/47/castle-6885449_960_720.jpg"
            class="w-100" style="height: 250px">
        </div>
    </div>

</div>
@endsection
