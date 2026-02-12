<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Administration - Takalo-Takalo</title>
  <link rel="stylesheet" href="/public/assets/css/takalo.css">
  <link rel="stylesheet" href="/public/assets/css/login.css">
</head>
<body style="background:linear-gradient(135deg, var(--forest) 0%, #1A2E25 100%);min-height:100vh;display:flex;align-items:center;justify-content:center;padding:1rem;">
  <div style="width:100%;max-width:400px;">
    <div style="text-align:center;margin-bottom:2.5rem;">
      <div style="font-family:var(--font-display);font-size:2rem;font-weight:900;color:var(--cream);letter-spacing:-0.02em;"> Takalo-Takalo</div>
      <div style="margin-top:0.5rem;display:inline-block;background:rgba(201,150,58,0.15);border:1px solid rgba(201,150,58,0.3);border-radius:100px;padding:3px 14px;font-size:0.78rem;font-weight:700;text-transform:uppercase;letter-spacing:0.1em;color:var(--gold);"> Administration</div>
    </div>

    <div style="background:var(--white);border-radius:var(--radius-xl);padding:2.5rem;box-shadow:0 24px 64px rgba(0,0,0,0.3);">
      <h2 style="margin-bottom:0.3rem;font-size:1.5rem;">Connexion admin</h2>
      <p style="color:var(--muted);font-size:0.875rem;margin-bottom:1.75rem;">Accès réservé aux administrateurs</p>

      <form action="/admin/login" method="POST" novalidate>
        <div class="form-group">
          <label class="form-label" for="admin-email">Identifiant</label>
          <input type="email" id="admin-email" name="email" class="form-control-takalo" value="admin@takalo.mg" required autocomplete="username">
          <p class="form-hint">Identifiant par défaut : <code style="background:var(--sand);padding:1px 6px;border-radius:4px;">admin@takalo.mg</code></p>
        </div>

        <div class="form-group">
          <label class="form-label" for="admin-pwd">Mot de passe</label>
          <input type="password" id="admin-pwd" name="password" class="form-control-takalo" placeholder="••••••••" required autocomplete="current-password">
          <p class="form-hint">Mot de passe par défaut : <code style="background:var(--sand);padding:1px 6px;border-radius:4px;">admin1234</code></p>
        </div>

        <button type="submit" class="btn-takalo btn-primary-takalo btn-lg-takalo" style="width:100%;justify-content:center;margin-top:0.5rem;">Accéder au panneau →</button>
      </form>
    </div>

    <div style="text-align:center;margin-top:1.5rem;">
      <a href="/" style="color:rgba(245,240,232,0.5);font-size:0.82rem;text-decoration:none;">← Retour au site</a>
    </div>
  </div>
</body>
</html>
