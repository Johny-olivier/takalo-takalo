<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Connexion - Takalo-Takalo</title>
  <link rel="stylesheet" href="/public/assets/css/takalo.css">
  <link rel="stylesheet" href="/public/assets/css/login.css">
</head>
<body>
  <div style="min-height:100vh; display:flex; align-items:center; justify-content:center; padding:2rem 1rem; background:linear-gradient(145deg, var(--cream) 0%, var(--sand) 100%);">
    <div style="width:100%; max-width:440px;">
      <div style="text-align:center; margin-bottom:2rem;">
        <div style="width:64px;height:64px;background:var(--terracotta);border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:1.8rem;margin:0 auto 1rem;"></div>
        <h1 style="font-size:1.9rem; margin-bottom:0.3rem;">Bon retour !</h1>
        <p class="text-muted-t">Connectez-vous pour échanger vos objets</p>
      </div>

      <div class="form-card">
        <form action="/login" method="POST" novalidate>
          <div class="form-group">
            <label class="form-label" for="email">Adresse e-mail</label>
            <input type="email" id="email" name="email" class="form-control-takalo" placeholder="vous@exemple.com" required autocomplete="email">
          </div>

          <div class="form-group">
            <div class="flex-between" style="margin-bottom:0.5rem;">
              <label class="form-label" for="password" style="margin-bottom:0;">Mot de passe</label>
              <a href="/forgot-password" style="font-size:0.8rem;">Mot de passe oublié ?</a>
            </div>
            <input type="password" id="password" name="password" class="form-control-takalo" placeholder="••••••••" required autocomplete="current-password">
          </div>

          <button type="submit" class="btn-takalo btn-primary-takalo btn-lg-takalo" style="width:100%;justify-content:center;">Se connecter →</button>
        </form>

        <div class="divider"></div>
        <p style="text-align:center;font-size:0.875rem;color:var(--ink-light);">Pas encore de compte ? <a href="/register" style="font-weight:600;">Créer un compte</a></p>
      </div>
    </div>
  </div>
</body>
</html>
