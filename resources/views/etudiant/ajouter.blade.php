<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Liste des Etudiants</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <h1>Hello, world!</h1>

    @if (session('status'))
      <div class="alert alert-success">
         {{session('status')}}
      </div>
    @endif




  <form action="/ajouter/traitement" method="POST">
    @csrf

    <div class="mb-3">
      <label for="Matricule" class="form-label">Matricule</label>
      <input type="text" class="form-control" id="matricule" name="matricule">
    </div>
    <div class="mb-3">
      <label for="Nom" class="form-label">Nom</label>
      <input type="text" class="form-control" id="Nom" name="nom">
    </div>
    <div class="mb-3">
      <label for="Prenom" class="form-label">Prenom</label>
      <input type="text" class="form-control" id="prenom" name="prenom">
    </div>
    <a href="/etudiant" class="btn btn-outline-secondary">Retour a la liste</a>
    <button type="submit" class="btn btn-primary">ajouter un etudiant</button>
  </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
