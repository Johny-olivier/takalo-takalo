<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fiche objet - Takalo-Takalo</title>
  <link rel="stylesheet" href="/public/assets/css/takalo.css">
</head>
<body>
  <div class="container-takalo" style="padding-top:2rem;padding-bottom:3rem;">
    <nav style="font-size:0.82rem;color:var(--muted);margin-bottom:1.5rem;display:flex;align-items:center;gap:6px;">
      <a href="/catalogue">Catalogue</a>
      <span>›</span>
      <span style="color:var(--terracotta);">Vêtement</span>
      <span>›</span>
      <span>Veste en jean</span>
    </nav>

    <div class="obj-detail-grid">
      <div>
        <div class="obj-main-img"><img src="https://via.placeholder.com/800x600" alt="Veste en jean" style="width:100%;height:100%;object-fit:cover;"></div>
      </div>

      <div>
        <div style="display:flex;align-items:center;gap:0.75rem;margin-bottom:0.75rem;">
          <span class="obj-card-cat">Vêtement</span>
          <span class="badge-takalo badge-proposed"> 3 échanges</span>
        </div>

        <h1 style="margin-bottom:0.75rem;">Veste en jean</h1>
        <div style="display:flex;align-items:center;gap:1rem;margin-bottom:1.25rem;">
          <span style="font-family:var(--font-mono);font-size:1.5rem;font-weight:700;color:var(--forest);">~45 000 Ar</span>
          <span style="font-size:0.8rem;color:var(--muted);">prix estimatif indicatif</span>
        </div>

        <div style="background:var(--cream);border-radius:var(--radius);padding:1.25rem;margin-bottom:1.5rem;">
          <h4 style="margin-bottom:0.5rem;"> Description</h4>
          <p style="font-size:0.9rem;color:var(--ink-light);line-height:1.7;">Veste en très bon état, taille M. Disponible pour échange contre livre, DVD ou accessoire équivalent.</p>
        </div>

        <div style="display:flex;align-items:center;gap:0.75rem;margin-bottom:1.75rem;padding:1rem;background:var(--white);border-radius:var(--radius);border:1px solid var(--border);">
          <div style="width:44px;height:44px;background:var(--gold);border-radius:50%;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:1rem;color:var(--forest);flex-shrink:0;">M</div>
          <div>
            <div style="font-weight:600;font-size:0.9rem;">Marie</div>
            <div style="font-size:0.78rem;color:var(--muted);">Propriétaire actuel</div>
          </div>
          <div style="margin-left:auto;"><a href="/historique/1" style="font-size:0.8rem;color:var(--terracotta);font-weight:600;">Voir l'historique →</a></div>
        </div>

        <button class="btn-takalo btn-primary-takalo btn-lg-takalo" style="width:100%;justify-content:center;"> Proposer un échange</button>
      </div>
    </div>
  </div>
</body>
</html>
