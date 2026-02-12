<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Catégories - Admin</title>
  <link rel="stylesheet" href="/public/assets/css/takalo.css">
</head>
<body style="background:var(--cream);">
  <div class="container-takalo" style="padding-top:2rem;padding-bottom:2rem;">
    <div class="flex-between mb-4">
      <div>
        <h2 style="margin-bottom:0.2rem;"> Gestion des catégories</h2>
        <p style="color:var(--muted);font-size:0.875rem;">3 catégories enregistrées</p>
      </div>
      <a class="btn-takalo btn-primary-takalo" href="#">+ Nouvelle catégorie</a>
    </div>

    <div class="grid-2" style="gap:2rem;align-items:start;">
      <div class="card-takalo" style="border-radius:var(--radius-lg);">
        <table class="table-takalo">
          <thead>
            <tr><th>#</th><th>Nom</th><th>Objets</th><th style="text-align:right;">Actions</th></tr>
          </thead>
          <tbody>
            <tr><td>001</td><td><strong>Vêtement</strong></td><td>34 objets</td><td style="text-align:right;"><button class="btn-takalo btn-secondary-takalo btn-sm-takalo"></button></td></tr>
            <tr><td>002</td><td><strong>Livre</strong></td><td>21 objets</td><td style="text-align:right;"><button class="btn-takalo btn-secondary-takalo btn-sm-takalo"></button></td></tr>
            <tr><td>003</td><td><strong>DVD</strong></td><td>0 objet</td><td style="text-align:right;"><button class="btn-takalo btn-danger-takalo btn-sm-takalo"></button></td></tr>
          </tbody>
        </table>
      </div>

      <div>
        <div class="form-card" style="border-radius:var(--radius-lg);">
          <h3 style="margin-bottom:1.25rem;font-size:1.1rem;"> Ajout rapide</h3>
          <form action="/admin/categories/ajouter" method="POST">
            <div class="form-group">
              <label class="form-label" for="nom-cat">Nom de la catégorie</label>
              <input type="text" id="nom-cat" name="nom" class="form-control-takalo" placeholder="Ex : Vêtement, Livre, Électronique..." required>
            </div>
            <button type="submit" class="btn-takalo btn-primary-takalo" style="width:100%;justify-content:center;">Ajouter la catégorie</button>
          </form>
        </div>

        <div class="alert-takalo alert-info-t mt-3">
          <span></span>
          <div><strong>Conseil :</strong> Vous ne pouvez pas supprimer une catégorie utilisée par un objet.</div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
