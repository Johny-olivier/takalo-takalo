<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Statistiques - Admin</title>
  <link rel="stylesheet" href="/public/assets/css/takalo.css">
</head>
<body style="background:var(--cream);">
  <div class="container-takalo" style="padding-top:2rem;padding-bottom:2rem;">
    <div class="mb-4">
      <h2 style="margin-bottom:0.2rem;"> Tableau de bord</h2>
      <p style="color:var(--muted);font-size:0.875rem;">Vue d'ensemble de la plateforme</p>
    </div>

    <div class="grid-4" style="gap:1.25rem;margin-bottom:2rem;">
      <div class="stat-card"><div class="stat-icon stat-icon-terracotta"></div><div><div class="stat-value">128</div><div class="stat-label">Utilisateurs inscrits</div></div></div>
      <div class="stat-card"><div class="stat-icon stat-icon-forest"></div><div><div class="stat-value">362</div><div class="stat-label">Objets publiés</div></div></div>
      <div class="stat-card"><div class="stat-icon stat-icon-gold"></div><div><div class="stat-value">74</div><div class="stat-label">Échanges effectués</div></div></div>
      <div class="stat-card"><div class="stat-icon stat-icon-info"></div><div><div class="stat-value">19</div><div class="stat-label">Propositions en attente</div></div></div>
    </div>

    <div class="grid-2" style="gap:1.5rem;">
      <div class="card-takalo">
        <div class="card-body-takalo">
          <h3 style="margin-bottom:1rem;font-size:1rem;"> Échanges récents</h3>
          <p style="color:var(--muted);font-size:0.9rem;">Section graphique statique (à lier aux données backend).</p>
        </div>
      </div>
      <div class="card-takalo">
        <div class="card-body-takalo">
          <h3 style="margin-bottom:1rem;font-size:1rem;"> Top catégories</h3>
          <p style="color:var(--muted);font-size:0.9rem;">Section top catégories statique (à lier aux données backend).</p>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
