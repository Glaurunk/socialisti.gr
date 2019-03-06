@extends('layout')
@section('title', 'Αρχική Σελίδα')

@section('content')

<div class="container-fluid">
      <div class="card mb-3">
        <div class="card-body">
          <h1 class="card-title mb-3">Αρχική Σελίδα</h1>
          <p class="card-text text-justify hyphenc"><span class="text-danger">Καλώς ήρθατε στο προσωπικό ιστολόγιο του Βασίλη Ασημακόπουλου.</span> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
        </div> <!-- here ends card body -->
      </div> <!-- here ends card -->
</div><!-- here container-fluid -->

<div class="container-fluid">

  <div class="row mt-3">

@foreach ($articles as $article)

    <div class="col-lg-4 col-md-6 mb-3">
      <div class="card">
        <div class="card-body">
          <a href="articles/{{ $article->id }}" class="text-dark"><h3 class="card-title mb-3">{{ $article->title }}</h3></a>
          <p class="card-text overflow text-justify hyphen">{{ $article->body }}</p>
        </div> <!-- here ends card body -->
      </div> <!-- here ends card -->
    </div> <!-- here ends col-md-4 -->

@endforeach

  </div> <!-- here ends row -->
</div><!-- here ends container-fluid -->

@endsection
