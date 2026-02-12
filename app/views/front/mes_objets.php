<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mes objets - Takalo-Takalo</title>
  <link rel="stylesheet" href="/public/assets/css/takalo.css">
</head>
<body>
  <div class="page-header">
    <div class="container-takalo">
      <div class="flex-between">
        <div>
          <h1> Mes objets</h1>
          <p>2 objets dans votre collection</p>
        </div>
        <a class="btn-takalo btn-primary-takalo" href="#" style="background:var(--terracotta)!important;">+ Ajouter un objet</a>
      </div>
    </div>
  </div>

  <div class="container-takalo" style="padding-top:2rem;">
    <div class="grid-4">
      <div class="obj-card">
        <div class="obj-card-img"></div>
        <div class="obj-card-body">
          <span class="obj-card-cat">Vêtement</span>
          <div class="obj-card-title">Basket blanche</div>
          <p style="font-size:0.82rem;color:var(--ink-light);margin-bottom:0.75rem;">Pointure 42, peu utilisée.</p>
          <div class="flex-between" style="align-items:center;">
            <span class="obj-card-price">~60 000 Ar</span>
            <div style="display:flex;gap:0.4rem;">
              <button class="btn-takalo btn-secondary-takalo btn-sm-takalo"></button>
              <button class="btn-takalo btn-danger-takalo btn-sm-takalo"></button>
            </div>
          </div>
        </div>
      </div>
      <div class="obj-card">
        <div class="obj-card-img"></div>
        <div class="obj-card-body">
          <span class="obj-card-cat">Électronique</span>
          <div class="obj-card-title">Téléphone Android</div>
          <p style="font-size:0.82rem;color:var(--ink-light);margin-bottom:0.75rem;">Fonctionne bien, batterie correcte.</p>
          <div class="flex-between" style="align-items:center;">
            <span class="obj-card-price">~180 000 Ar</span>
            <div style="display:flex;gap:0.4rem;">
              <button class="btn-takalo btn-secondary-takalo btn-sm-takalo"></button>
              <button class="btn-takalo btn-danger-takalo btn-sm-takalo"></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
