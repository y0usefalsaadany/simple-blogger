@extends('layouts.layout')
@section('content')
        <!-- End Popup Form Login & Sign -->

        <!-- Start About Section -->
        <section class="projects section-pd" id="article">
            <div class="container">
                @if (session()->has('message'))
                    <div class="headeing">{{session('success')}}</div>
                @endif
                <div class="headeing">
                    <h3>Articles</h3>
                    <h3>Articles</h3>
                </div>
                    <div class="box">
                        @foreach ($articles as $item)
                        <div class="card-box">
                            <div class="imgCard">
                                <img src="./uploads/articles/{{$item->image}}" alt="JavaScript">
                            </div>
                            <div class="card-info">
                                <h2> {{$item->title}}  </h2>
                                <div class="content">
                                    <p>{{$item->content}}  </p>
                                    <form action="/delete/{{$item->id}}" method="get">
                                        @csrf
                                        <a href="/delete/{{$item->id}}">Delete</a>        
                                    </form>
                                </div>
                            </div>
                            <span> {{$item->created_at}}  </span>
                        </div>
                        @endforeach
                    </div>
            </div>
        </section>
        <!-- End About Section -->

@endsection