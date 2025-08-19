<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modifier</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</head>
<body>
<h1 class="text-center">Modification</h1>
   <form action="{{ route('livres.update' , $livre->id)}}" class="mx-5 " method="POST">
         @csrf
         @method('PUT')
    <div class="mb-3">
  <label for="" class="form-label">Titre :</label>
  <input type="text" class="form-control" id="titre" name="titre" value="{{$livre->titre}}">
</div>

    <div class="mb-3">
  <label for="" class="form-label">Auteur :</label>
  <input type="text" class="form-control" id="auteur" name="auteur" value="{{$livre->auteur}}">
</div>

    <div class="mb-3">
  <label for="" class="form-label">Prix :</label>
  <input type="number" class="form-control" id="prix" name="prix" value="{{$livre->prix}}">
</div>


<div class="d-grid gap-2 col-3 mx-auto">
  <button class="btn btn-primary" type="submit">Modifier</button>

</div>


</form>
  


</body>
</html>