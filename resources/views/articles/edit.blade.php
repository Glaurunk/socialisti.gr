@extends('layout')
@section('title', 'Ενημέρωση Άρθρου')

@section('content')

  <div class="container-fluid">
        <div class="card mb-3">
          <div class="card-body">
            <h1 class="card-title mb-3">Ενημέρωση Υπάρχοντος Άρθρου</h1>

                  <form class="form float-left" action="/articles/{{ $article->id }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('patch') }}

                      <div class="form-group">
                          <label for="title">Τίτλος</label>
                          <input class="form-control" type="text" name="title" value="{{ $article->title }}">
                      </div><!-- here ends form-group1-->

                      <div class="form-group">
                          <label for="body">Σώμα</label>
                          <textarea class="form-control" name="body"  id="article-ckeditor">{{ $article->body }}</textarea>
                      </div><!-- here ends form-group2-->

                      <a href="/articles/{{ $article->id }}" class="btn btn-outline-secondary">Ακύρωση - Επιστροφή στο Άρθρο</a>

                    <button class="btn btn-outline-info float-left mr-3" type="submit" value="Submit">Ενημέρωση άρθρου</button>

              </form><!-- here ends update form -->

          </div> <!-- here ends card body -->
        </div> <!-- here ends card -->

  </div><!-- here container-fluid -->

  @include('layouts.ckEditor')

@endsection
