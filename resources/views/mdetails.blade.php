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
        <a class="navbar-brand" href="#">BeeFlix</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="/">Browse <span class="sr-only">(current)</span></a>
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
      
    <div class="container">
        <div class="row"style="margin: 5%">
            
            <div class="col" > 
                <div class="card" style="width: 26rem;">
                    
                    <img class="card-img-top" src="/{{$movies[0]->photo}}" alt="Card image cap">
                    
                  </div>       
                
                
            </div>

            <div class="col">
                <h1>{{$movies[0]->title}}</h1>
                <h5>{{$movies[0]->rating}}</h5>
                <p>{{$movies[0]->desc}}</p>
                
                <h5>Kategori: <a href={{route('genreDetails', ["genre_id" => $movies[0]->Genre->id])}}>{{$movies[0]->Genre->name}}</a></h5>
                
                <table class="table" style="margin-top: 10%">
                    <thead>
                        <tr>
                            <th>Episode</th>
                            <th>Judul</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach ($episodes as $episode)
                            <tr>
                                <td>{{$episode->episode}}</td>
                                <td>{{$episode->title}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$episodes->withQueryString()->links()}}
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