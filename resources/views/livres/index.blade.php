<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>livres</title>
    

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>


</head>
<body>
<br>
<h1 class="text-center">Mon gestionnaire de livres</h1>
<br>
<br>

    <form action="{{ route('livres.store') }}" class="mx-5 " method="POST">
         @csrf
    <div class="mb-3">
  <label for="" class="form-label">Titre :</label>
  <input type="text" class="form-control" id="titre" name="titre" placeholder="titre...">
</div>

    <div class="mb-3">
  <label for="" class="form-label">Auteur :</label>
  <input type="text" class="form-control" id="auteur" name="auteur" placeholder="auteur...">
</div>

    <div class="mb-3">
  <label for="" class="form-label">Prix :</label>
  <input type="number" class="form-control" id="prix" name="prix" placeholder="prix...">
</div>


<div class="d-grid gap-2 col-3 mx-auto">
  <button class="btn btn-primary" type="submit">Ajouter</button>

</div>


</form>
<br>
<br>
   <table class="table" >
  
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titre</th>
      <th scope="col">Auteur</th>
      <th scope="col">Prix</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody >
    @foreach($livres as $livre)
    <tr>

      <td>{{$livre->id}}</td>
      <td>{{$livre->titre}}</td>
      <td>{{$livre->auteur}}</td>
      <td>{{$livre->prix}} FCA</td>
      <td> 
        <form action="{{route('livres.destroy', $livre->id)}}" method="post" onsubmit=" return supprimer()">
    @csrf
    @method('DELETE')
<button type="submit" class="btn btn-danger btn-sm" class="btn-supprimer" >Supprimer</button>
  </form>
</td>
 <td>
  <form action="{{route('livres.edit', $livre->id)}}" method="GET" >
    @csrf
  
<button type="submit" class="btn btn-warning  btn-sm" class="" >Modifier</button>
  </form>
 </td>
    </tr>

  @endforeach
  </tbody>
</table>
<script>

function supprimer(){
return  confirm("etes vous sur de vouloir supprimer ce livre?")
}
 
</script>
</body>
</html>