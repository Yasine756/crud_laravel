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
   <div class="d-flex justify-content-between mb-5 mt-5">
    
    <h1 class="text-success fs-2"><i class="bi bi-patch-check"></i> CRUD</h1>
    <a href="/Ajouter"><button class="btn btn-primary"><i class="bi bi-arrow-down-up"></i>Ajouter Stagiaire</button></a>
   </div>
   <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nom</th>
      <th scope="col">prenom</th>
      <th scope="col">Email</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    @if(session('status'))
      <div class="alert alert-danger">{{session('status')}} </div>
    @endif
    
      @foreach($stagiaire as $i)
            <tr>
            <th scope="row">{{$i->id}}</th>
            <td>{{$i->nom}}</td>
            <td>{{$i->age}}</td>
            <td>{{$i->email}}</td>
      <td>
          <a href="/Modifier"><button class="btn btn-info">
              Modifier
          </button></a>
          <a href="supprimer/{{$i->id}}">

            <button class="btn btn-danger" >
                Supprimer
            </button>
          </a>
      </td>
          </tr>
      @endforeach;
 </tbody>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>