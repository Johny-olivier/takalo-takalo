<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Historique - Takalo-Takalo</title>
  <link rel="stylesheet" href="/public/assets/css/takalo.css">
</head>
<body>
  <div class="page-header">
    <div class="container-takalo">
      <nav style="font-size:0.82rem;color:rgba(245,240,232,0.6);margin-bottom:0.75rem;display:flex;gap:6px;align-items:center;">
        <a href="/catalogue" style="color:rgba(245,240,232,0.7);">Catalogue</a>
        <span>›</span>
        <a href="/objet/1" style="color:rgba(245,240,232,0.7);">Veste en jean</a>
        <span>›</span>
        <span style="color:var(--cream);">Historique</span>
      </nav>
      <h1 style="margin-bottom:0.3rem;"> Historique de l'objet</h1>
      <p>3 propriétaires au fil des échanges</p>
    </div>
  </div>

  <div class="container-takalo" style="padding-top:2.5rem;padding-bottom:3rem;">
    <div style="display:grid;grid-template-columns:300px 1fr;gap:3rem;align-items:start;">
      <div class="card-takalo" style="position:sticky;top:80px;">
        <div style="background:var(--sand);aspect-ratio:4/3;display:flex;align-items:center;justify-content:center;font-size:4rem;overflow:hidden;"></div>
        <div class="card-body-takalo">
          <span class="obj-card-cat">Vêtement</span>
          <div class="obj-card-title" style="margin-top:0.4rem;">Veste en jean</div>
          <p style="font-size:0.85rem;color:var(--ink-light);margin-top:0.5rem;line-height:1.6;">Objet publié avec historique public d'appartenance.</p>
        </div>
      </div>

      <div class="timeline">
        <div class="timeline-item"><div class="timeline-date"> 12/02/2026 10:20</div><div class="timeline-content"><h4>Marie</h4><span class="timeline-current"> Propriétaire actuel</span></div></div>
        <div class="timeline-item"><div class="timeline-date"> 05/02/2026 16:10</div><div class="timeline-content"><h4>Andry</h4><p>A reçu l'objet via un échange avec <strong>Rina</strong></p></div></div>
        <div class="timeline-item"><div class="timeline-date"> 29/01/2026 09:50</div><div class="timeline-content"><h4>Rina</h4><p style="font-size:0.82rem;color:var(--muted);">Propriétaire d'origine</p></div></div>
      </div>
    </div>
  </div>
</body>
</html>
