@extends('layout')
@section('title', 'Δημιουργία Άρθρου')

@section('content')


  <div class="container-fluid">
        <div class="card mb-3">
          <div class="card-body">
            <h1 class="card-title mb-3">Δημιουργία Νέου Άρθρου</h1>

            <form class="form" action="/articles" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}

                <div class="form-group">
                    <label for="title">Τίτλος</label>
                    <input class="form-control" type="text" name="title" placeholder="Τίτλος">
                </div>

                <div class="form-group">
                    <label for="body">Σώμα</label>
                    <textarea class="form-control" name="body" placeholder="κείμενο" id="article-ckeditor"></textarea>
                </div>

                {{-- <div class="form-group">
                      <input type="file" name="cover_image">
                </div> --}}

                <button class="btn btn-outline-success" type="submit" value="Submit" >Δημιουργία άρθρου</button>
                <a href="/articles" class="btn btn-outline-secondary">Επιστροφή στον κατάλογο</a>

            </form>

          </div> <!-- here ends card body -->
        </div> <!-- here ends card -->
  </div><!-- here container-fluid -->

  @include('layouts.ckEditor')

@endsection
