@extends('layout')


@section('content')

<div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <h1 class="card-title mb-3">Αρχική Σελίδα</h1>
          <p class="card-text"><span class="text-danger">Καλώς ήρθατε στο προσωπικό ιστολόγιο του Βασίλη Ασημακόπουλου.</span> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
        </div> <!-- here ends card body -->
      </div> <!-- here ends card -->
</div><!-- here container-fluid -->

<div class="container-fluid">

    <div class="row mt-3">
      <div class="col-lg-4 col-md-6">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title mb-3">Πιο πρόσφατο άρθρο</h3>
            <p class="card-text overflow">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div> <!-- here ends card body -->
        </div> <!-- here ends card -->
      </div> <!-- here ends col-md-4 -->

      <div class="col-lg-4 col-md-6 d-none d-md-block d-lg-block d-xl-block">
        <div class="card">
          <div class="card-body ">
            <h3 class="card-title mb-3">Δεύτερο πιο πρόσφατο άρθρο</h3>
            <p class="card-text overflow">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div> <!-- here ends card body -->
        </div> <!-- here ends card -->
      </div> <!-- here ends col-md-4 -->

      <div class="col-lg-4 d-none d-lg-block d-xl-block">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title mb-3">Τρίτο πιο πρόσφατο άρθρο</h3>
            <p class="card-text overflow">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div> <!-- here ends card body -->
        </div> <!-- here ends card -->
      </div> <!-- here ends col-md-4 -->
  </div> <!-- here ends row -->

</div><!-- here ends container-fluid -->

@endsection
