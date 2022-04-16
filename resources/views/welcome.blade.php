@extends('layouts.blog')

@section('title')
    Saas Blog
@endsection

@section('header')
    <header class="header text-center text-white" style="background-image: linear-gradient(-225deg, #5D9FFF 0%, #B8DCFF 48%, #6BBBFF 100%);">
      <div class="container">

        <div class="row">
          <div class="col-md-8 mx-auto">

            <h1>Latest Blog Posts</h1>
            <p class="lead-2 opacity-90 mt-6">Read and get updated on how we progress</p>

          </div>
        </div>

      </div>
    </header>
@endsection

@section('content')
     <main class="main-content">
      <div class="section bg-gray">
        <div class="container">
          <div class="row">


            <div class="col-md-8 col-xl-9">
              <div class="row gap-y">

                @forelse($posts as $post)
                    <div class="col-md-6">
                      <div class="card border hover-shadow-6 mb-6 d-block">
                        {{-- <a href="#"><img class="card-img-top" src="{{ $post->image }}" alt="Card image cap"></a> --}}
                        <a href="#"><img class="card-img-top" src="https://images.unsplash.com/photo-1648055521963-f28efb78ee87?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="Card image cap"></a>
                        <div class="p-6 text-center">
                          <p><a class="small-5 text-lighter text-uppercase ls-2 fw-400" href="#">{{$post->category->name}}</a></p>
                          <h5 class="mb-0"><a class="text-dark" href="{{route('blog.show', $post->id)}}">{{$post->title}}</a></h5>
                        </div>
                      </div>
                    </div>
                    @empty
                    <h3 class="text-center">NO results found for query: <strong>{{request()->query('query')}}</strong></h3>
                @endforelse


              </div>


              {{-- <nav class="flexbox mt-30">
                <a class="btn btn-white disabled"><i class="ti-arrow-left fs-9 mr-4"></i> Newer</a>
                <a class="btn btn-white" href="#">Older <i class="ti-arrow-right fs-9 ml-4"></i></a>
              </nav> --}}

              {{$posts->appends(['query' => request()->query('query')])->links()}}
            </div>



            @include('partials.sidebar')

          </div>
        </div>
      </div>
    </main>
@endsection

