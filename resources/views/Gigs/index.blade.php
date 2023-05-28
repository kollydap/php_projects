{{-- <h1>
    <?php echo $heading; ?>
</h1>
<?php foreach ($gigs as $gig): ?>
    <h2><?php echo $gig['title']; ?></h2>
    <p><?php echo $gig['description']; ?></p>
<?php endforeach; ?> --}}
{{-- 
@php
 $hello = "kola";   

@endphp
{{$hello}} --}}
@extends('layout')

@section('content')
    @if (session()->has('message'))
        <div>{{session('message')}}</div>
    @endif
    <div class="container">
        <h2>{{ $heading }}</h2>
        <form action="/" class="form-inline mb-4">
            <div class="form-group">
                <input class="form-control mr-2" type="text" name="search" placeholder="Search...">

            </div>
            <button class="btn btn-primary">Click me!</button>

        </form>
        {{-- <img class="card-img-top" src="images/kola.png" alt="Card image cap"> --}}
        <div class="row">
            @foreach ($gigs as $gig)
                <div class="col-md-4 mb-4">
                    <div class="card">

                        <div class="card-body">
                            <a href="/{{ $gig['id'] }}">
                                <h5 class="card-title">{{ $gig['title'] }}</h5>
                            </a>
                            <p class="card-text">{{ $gig->description }}</p>
                            <strong class="d-block mb-2">Tags:</strong>
                            @foreach (explode(',', $gig['tags']) as $tag)
                                <a href="?tag={{ $tag }}" class="badge badge-secondary">{{ $tag }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
           
        </div>
        <a href="/create-gig"><button>Create Gigs</button></a>
    </div>
    <div>
        {{$gigs->links()}}
    </div>
@endsection
