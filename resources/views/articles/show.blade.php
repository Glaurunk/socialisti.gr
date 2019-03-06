@extends('layout')
@section('title', 'Αρχείο Κειμένων')

@section('content')
@include('layouts.confirmDelete')

  <div class="container-fluid">
        <div class="card mb-3">
          <div class="card-body">
            <h1 class="card-title mb-3">{{ $article->title }}</h1>
            <p class="card-text  text-justify">{!! $article->body !!}
            </p>
            <a href="/articles" class="btn, text-align-left">επιστροφή στο αρχείο</a>

@if (Auth::check())

            <br>
            <br>
            <form class="form float-left mr-3" action="/articles/{{ $article->id }}" method="post">
                  {{ csrf_field() }}
                  {{ method_field('delete') }}
                  <button type="submit" class="btn btn-outline-danger btn-sm" id="delete-btn" onclick="confirmDelete()">Διαγραφή άρθρου</button>
            </form><!-- here ends delete form -->

            <a class="btn btn-outline-info btn-sm float-left" href="/articles/{{ $article->id }}/edit">Ενημέρωση άρθρου</a>
@endif

            </div> <!-- here ends card body -->
        </div> <!-- here ends card -->
  </div><!-- here container-fluid -->

@endsection
