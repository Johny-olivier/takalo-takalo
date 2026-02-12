<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inscription - Takalo-Takalo</title>
  <link rel="stylesheet" href="/public/assets/css/takalo.css">
  <link rel="stylesheet" href="/public/assets/css/login.css">
</head>
<body>
  <div style="min-height:100vh; display:flex; align-items:center; justify-content:center; padding:2rem 1rem; background:linear-gradient(145deg, var(--cream) 0%, var(--sand) 100%);">
    <div style="width:100%; max-width:500px;">
      <div style="text-align:center; margin-bottom:2rem;">
        <div style="width:64px;height:64px;background:var(--forest);border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:1.8rem;margin:0 auto 1rem;"></div>
        <h1 style="font-size:1.9rem; margin-bottom:0.3rem;">Rejoignez la communauté</h1>
        <p class="text-muted-t">Créez votre compte et commencez à échanger</p>
      </div>

      <div class="form-card">
        <form action="/register" method="POST" novalidate>
          <div class="form-group">
            <label class="form-label" for="nom">Nom complet</label>
            <input type="text" id="nom" name="nom" class="form-control-takalo" placeholder="Marie Dupont" required autocomplete="name">
          </div>

          <div class="form-group">
            <label class="form-label" for="email">Adresse e-mail</label>
            <input type="email" id="email" name="email" class="form-control-takalo" placeholder="vous@exemple.com" required autocomplete="email">
            <p class="form-hint">Nous ne partagerons jamais votre adresse e-mail.</p>
          </div>

          <div class="grid-2" style="gap:1rem;">
            <div class="form-group" style="margin-bottom:0;">
              <label class="form-label" for="password">Mot de passe</label>
              <input type="password" id="password" name="password" class="form-control-takalo" placeholder="Min. 8 caractères" required autocomplete="new-password">
            </div>
            <div class="form-group" style="margin-bottom:0;">
              <label class="form-label" for="password_confirm">Confirmation</label>
              <input type="password" id="password_confirm" name="password_confirm" class="form-control-takalo" placeholder="Répétez le mot de passe" required autocomplete="new-password">
            </div>
          </div>

          <div class="form-group mt-3">
            <label style="display:flex;align-items:flex-start;gap:10px;font-size:0.875rem;cursor:pointer;line-height:1.4;">
              <input type="checkbox" name="cgu" required style="accent-color:var(--terracotta);width:16px;height:16px;margin-top:2px;flex-shrink:0;">
              <span>J'accepte les <a href="/cgu">conditions générales d'utilisation</a> et la <a href="/confidentialite">politique de confidentialité</a></span>
            </label>
          </div>

          <button type="submit" class="btn-takalo btn-primary-takalo btn-lg-takalo" style="width:100%;justify-content:center;">Créer mon compte →</button>
        </form>

        <div class="divider"></div>
        <p style="text-align:center;font-size:0.875rem;color:var(--ink-light);">Déjà inscrit ? <a href="/login" style="font-weight:600;">Se connecter</a></p>
      </div>
    </div>
  </div>
</body>
</html>
