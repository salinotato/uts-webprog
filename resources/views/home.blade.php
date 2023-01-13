@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row bg-secondary mb-4 text-white">
            <div class="collumn">
                <h2>Book List</h2>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-4 g-4">
            <div class="col">
                <div class="card-border-secondary" style="width: 18rem;">
                    <img src="img/hobbit.jpg" class="card-img-top" alt="hobbit">
                    <div class="card-body">
                      <h5 class="card-title">The Hobbit</h5>
                      <p class="card-text">By  J.R.R. Tolkien, Douglas A. Anderson</p>
                      <a href="#" class="btn btn-primary">Detail</a>
                    </div>
                  </div>
            </div>
            <div class="col">
                <div class="card-border-secondary" style="width: 18rem;">
                    <img src="img/return of king.jpg" class="card-img-top" alt="return of king">
                    <div class="card-body">
                      <h5 class="card-title">The Fellowship of the Ring</h5>
                      <p class="card-text">By  J.R.R. Tolkien</p>
                      <a href="#" class="btn btn-primary">Detail</a>
                    </div>
                  </div>
            </div>
            <div class="col">
                <div class="card-border-secondary" style="width: 18rem;">
                    <img src="img/two tower.jpg" class="card-img-top" alt="two tower">
                    <div class="card-body">
                      <h5 class="card-title">The Two Towers</h5>
                      <p class="card-text">By  J.R.R. Tolkien</p>
                      <a href="#" class="btn btn-primary">Detail</a>
                    </div>
                  </div>
            </div>
            <div class="col">
                <div class="card-border-secondary" style="width: 18rem;">
                    <img src="img/1.jpg" class="card-img-top" alt="1">
                    <div class="card-body">
                      <h5 class="card-title">The Return of the King</h5>
                      <p class="card-text">By  J.R.R. Tolkien</p>
                      <a href="#" class="btn btn-primary">Detail</a>
                    </div>
                  </div>
            </div>

        </div>
    </div>
@endsection
