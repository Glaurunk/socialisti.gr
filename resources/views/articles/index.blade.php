@extends('layout')
@section('title', 'Αρχείο Κειμένων')



@section('content')
@include('layouts.confirmDelete')

  <div class="container-fluid">
        <div class="card mb-3">
          <div class="card-body">
            <h1 class="card-title mb-3">Αρχείο Κειμένων</h1>

              @if (Auth::check())

                      <a href="/articles/create" class="btn btn-outline-success btn-sm">Δημιουργία νέου άρθρου</a>
              @endif

          </div> <!-- here ends card body -->
        </div> <!-- here ends card -->
  </div><!-- here container-fluid -->

  <div class="container-fluid">
        <div class="card">
          <div class="card-body">

@if (Auth::check())

    @foreach ($articles as $article)

      <div class="card mb-3">
        <div class="card-body">
        <a href="/articles/{{ $article->id }}" class="text-danger"><h5>{{ $article->title }}</h5></a>
        <br>
            <form class="form float-left mr-3" action="/articles/{{ $article->id }}" method="post">
                  {{ csrf_field() }}
                  {{ method_field('delete') }}
                  <button type="submit" class="btn btn-outline-danger btn-sm" id="delete-btn" onclick="confirmDelete()">Διαγραφή άρθρου</button>
            </form><!-- here ends delete form -->

            <a class="btn btn-outline-info btn-sm float-left" href="/articles/{{ $article->id }}/edit">Ενημέρωση άρθρου</a>

        </div> <!-- here ends card body -->
      </div> <!-- here ends card -->

    @endforeach

    {{ $articles->links() }}

@endif


@if (Auth::guest())

            @foreach ($articles as $article)
              <div class="card mb-3">
                <div class="card-body">
                  <a href="/articles/{{ $article->id }}" class="text-dark"><h5>{{ $article->title }}</h5></a>
                </div> <!-- here ends card body -->
              </div> <!-- here ends card -->
            @endforeach

            {{ $articles->links() }}

          </div> <!-- here ends card body -->
        </div> <!-- here ends card -->
  </div><!-- here container-fluid -->
@endif


@endsection
