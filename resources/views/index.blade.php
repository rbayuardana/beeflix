<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>BeeFlix</title>
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
      <a class="navbar-brand" href="/" style="font-size: 20px">BeeFlix</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/">Browse All Films <span class="sr-only">(current)</span></a>
            </li>
            @foreach ($genres as $genre)    
            <li class="nav-item">
              <a class="nav-link" href={{route('genreDetails', ["genre_id" => $genre->id])}}>{{$genre->name}} <span class="sr-only">(current)</span></a>
            </li>
            @endforeach
          </ul>
        </div>
      </div>
      </nav>


      <div class="jumbotron jumbotron-fluid bg-dark" style="color: white">
        <div class="container">
          <h1 class="display-4">All Films</h1>
          <p class="lead">Designed by Bayu Ardana - 2201836135</p>
        </div>
      </div>





    <div class="container">
      
      {{-- <h1>BeeFlix</h1> --}}
      <div class="container">
        
        <div class="row">
          @foreach ($movies as $movie)
            <div style="margin: 2%">
              <div class="col">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src={{$movie->photo}} alt="">
                  <div class="card-body">
                    <h5 class="card-title">{{$movie->title}}</h5>
                    <p>Genre: {{$movie->Genre->name}}</p>
                    <a href={{route('movieDetails', ["movie_id" => $movie->id])}} class="btn btn-dark">Movie Detail</a>
                  </div>
                </div>  
              </div>
          </div>    
          @endforeach
        </div>
      </div>


    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>