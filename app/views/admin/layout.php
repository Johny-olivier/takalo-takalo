<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin - Takalo-Takalo</title>
  <link rel="stylesheet" href="/public/assets/css/takalo.css">
</head>
<body style="background:var(--cream);">
<div style="background:var(--ink);height:64px;display:flex;align-items:center;justify-content:space-between;padding:0 1.5rem;position:sticky;top:0;z-index:1000;">
  <div style="display:flex;align-items:center;gap:12px;">
    <a href="/" style="font-family:var(--font-display);font-size:1.25rem;font-weight:900;color:var(--cream);text-decoration:none;"> Takalo-Takalo</a>
    <span style="background:rgba(201,150,58,0.2);color:var(--gold);border:1px solid rgba(201,150,58,0.3);padding:2px 10px;border-radius:100px;font-size:0.7rem;font-weight:700;text-transform:uppercase;letter-spacing:0.1em;">Admin</span>
  </div>
  <div style="display:flex;align-items:center;gap:0.75rem;">
    <div style="width:32px;height:32px;background:var(--terracotta);border-radius:50%;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:0.8rem;color:white;">A</div>
    <span style="color:rgba(245,240,232,0.7);font-size:0.875rem;">Administrateur</span>
    <a href="/admin/logout" style="color:rgba(245,240,232,0.5);font-size:0.82rem;margin-left:0.5rem;">Déconnexion</a>
  </div>
</div>

<div class="admin-layout">
  <aside class="admin-sidebar">
    <div class="admin-sidebar-title">Navigation</div>
    <a href="/admin/stats" class="active"><span></span>Statistiques</a>
    <a href="/admin/categories"><span></span>Catégories</a>
    <a href="/admin/objets"><span></span>Objets</a>
    <a href="/admin/users"><span></span>Utilisateurs</a>
    <a href="/admin/echanges"><span></span>Échanges</a>

    <div style="margin-top:auto;padding-top:2rem;border-top:1px solid rgba(255,255,255,0.08);margin:2rem 1.5rem 0;">
      <a href="/" style="display:flex;align-items:center;gap:8px;color:rgba(245,240,232,0.5);font-size:0.82rem;text-decoration:none;">← Voir le site public</a>
    </div>
  </aside>

  <main class="admin-main">
    <div class="alert-takalo alert-info-t mb-4">
      <span></span>
      Layout admin HTML statique prêt à intégrer.
    </div>
  </main>
</div>

<footer style="background:var(--ink);padding:1rem 1.5rem;text-align:center;">
  <div style="font-size:0.72rem;font-family:var(--font-mono);color:rgba(245,240,232,0.3);">
    Takalo-Takalo - Panneau d'administration | Nom Prénom ETU000001 · Nom Prénom ETU000002 · Nom Prénom ETU000003
  </div>
</footer>
</body>
</html>
