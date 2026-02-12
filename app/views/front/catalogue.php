<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Catalogue - Takalo-Takalo</title>
  <link rel="stylesheet" href="/public/assets/css/takalo.css">
</head>
<body>
  <div class="page-header">
    <div class="container-takalo" style="text-align:center;">
      <h1 style="margin-bottom:0.5rem;"> Catalogue des objets</h1>
      <p style="margin-bottom:1.75rem;">Découvrez les objets disponibles à l'échange</p>
      <form action="/catalogue" method="GET" style="display:flex;justify-content:center;">
        <div class="search-bar">
          <span style="font-size:1.1rem;"></span>
          <input type="text" name="q" placeholder="Rechercher un objet..." autocomplete="off">
          <select name="cat_id">
            <option value="">Toutes catégories</option>
            <option value="1">Vêtement</option>
            <option value="2">Livre</option>
            <option value="3">DVD</option>
          </select>
          <button type="submit" class="btn-takalo btn-primary-takalo" style="border-radius:var(--radius-lg);padding:10px 24px;">Rechercher</button>
        </div>
      </form>
    </div>
  </div>

  <div class="container-takalo" style="padding-top:2rem;">
    <div class="grid-4">
      <a href="/objet/1" class="obj-card" style="text-decoration:none;color:inherit;display:block;">
        <div class="obj-card-img"></div>
        <div class="obj-card-body"><span class="obj-card-cat">Vêtement</span><div class="obj-card-title">Veste en jean</div><p style="font-size:0.82rem;color:var(--ink-light);margin-bottom:0.75rem;">Très bon état, taille M.</p><div class="flex-between"><span class="obj-card-price">~45 000 Ar</span><span class="obj-card-owner"> Marie</span></div></div>
      </a>
      <a href="/objet/2" class="obj-card" style="text-decoration:none;color:inherit;display:block;">
        <div class="obj-card-img"></div>
        <div class="obj-card-body"><span class="obj-card-cat">Livre</span><div class="obj-card-title">Roman historique</div><p style="font-size:0.82rem;color:var(--ink-light);margin-bottom:0.75rem;">Livre presque neuf.</p><div class="flex-between"><span class="obj-card-price">~20 000 Ar</span><span class="obj-card-owner"> Hery</span></div></div>
      </a>
    </div>
  </div>
</body>
</html>
