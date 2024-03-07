<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
  <body>
   
    </ul>
    <div class="alert alert-secondary"><i class="bi bi-plus-circle-fill text-dark"></i><b>Modifier  un stgiaire</b></h4> </div>
    <form action="{{ url('/Modifier/traitement') }}" method="post">
      @csrf
  <div class="mb-2">
    <label for="exampleInputEmail1" class="form-label"><h4 class="text-primary"> <i class="bi bi-brilliance"></i>id</h4></label>
    <input type="text" class="form-control " id="exampleInputEmail1"  value="{{$stagiaire->id}}" name="id">    
  </div>
    <label for="exampleInputEmail1" class="form-label"><h4 class="text-primary"> <i class="bi bi-brilliance"></i>nom</h4></label>
    <input type="text" class="form-control " id="exampleInputEmail1"  value="{{$stagiaire->nom}}" name="nom">    
  </div>
  <div class="mb-2">
    <label for="exampleInputEmail1" class="form-label"><h4 class="text-primary"><i class="bi bi-brilliance"></i>Prénom</h4></label>
    <input type="text" class="form-control " id="exampleInputEmail1"  value="{{$stagiaire->prenom}}" name="prenom">    
  </div>
  <div class="mb-2">
    <label for="exampleInputEmail1" class="form-label"><h4 class="text-primary"><i class="bi bi-brilliance"></i>Age</h4></label>
    <input type="number" class="form-control " id="exampleInputEmail1"  value="{{$stagiaire->age}}" name="age">    
  </div>
  <div class="mb-2">
    <label for="exampleInputPassword1" class="form-label"><h4 class="text-primary"><i class="bi bi-brilliance"></i>Email</h4></label>
    <input type="email" class="form-control" id="exampleInputPassword1" value="{{$stagiaire->email}}" name="email">
  </div>
  <input type="submit" class="btn btn-primary">
</form>
<a href="/"><div class="btn btn-success text-dark mt-5 d-flex justify-content-center"> <i class="bi bi-house-check text-dark"></i>   <b> Retour en Acceuil</b></div>
  </a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>