<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Primeira Moto Sem Errar — O Guia Definitivo Para Sua Primeira Moto</title>
  <meta name="description" content="Descubra como comprar sua primeira moto sem cometer os erros clássicos que custam caro. Guia completo com checklist, passo a passo e lista de motos recomendadas para 2026." />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />

  <!-- SEO & Social Sharing -->
  <meta property="og:title" content="Primeira Moto Sem Errar — O Guia Definitivo" />
  <meta property="og:description" content="Descubra como comprar sua primeira moto sem cometer os erros clássicos que custam caro." />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="assets/mockup-tablet.jpg" />
  <meta name="twitter:card" content="summary_large_image" />
  
  <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%23E5A020'%3E%3Cpath d='M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4z'/%3E%3C/svg%3E" />

  <style>
    /* ===== DESIGN TOKENS ===== */
    :root {
      --gold-light: #F5C842;
      --gold:       #E5A020;
      --gold-dark:  #C8860A;
      --gold-glow:  rgba(229, 160, 32, 0.35);
      --blue-deep:  #0a1628;
      --blue-mid:   #1a2a4a;
      --ink:        #08090d;
      --ink-2:      #0d0f17;
      --ink-3:      #13151f;
      --ink-4:      #1a1d2a;
      --surface:    #1e2133;
      --text-1:     #f4f5f7;
      --text-2:     #b8bcc8;
      --text-3:     #7a7f95;
      --danger:     #e74c3c;
      --success:    #27ae60;
      --radius:     12px;
      --radius-lg:  20px;
    }

    /* ===== RESET ===== */
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
    html { scroll-behavior: smooth; }
    body {
      font-family: 'Inter', system-ui, sans-serif;
      background-color: var(--ink);
      color: var(--text-1);
      line-height: 1.65;
      overflow-x: hidden;
    }
    img { max-width: 100%; display: block; }
    a { text-decoration: none; }

    /* ===== TYPOGRAPHY ===== */
    .display { font-family: 'Bebas Neue', sans-serif; letter-spacing: 0.04em; line-height: 1; }
    .gold     { color: var(--gold); }
    .gold-l   { color: var(--gold-light); }

    /* ===== LAYOUT ===== */
    .container { max-width: 900px; margin: 0 auto; padding: 0 24px; }
    .container-lg { max-width: 1140px; margin: 0 auto; padding: 0 24px; }
    section { padding: 80px 0; }

    /* ===== BUTTON ===== */
    .btn-cta {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      background: linear-gradient(135deg, var(--gold) 0%, var(--gold-light) 60%, var(--gold) 100%);
      color: #080a0f;
      font-weight: 800;
      font-size: 1.1rem;
      letter-spacing: 0.03em;
      padding: 18px 44px;
      border-radius: 6px;
      border: none;
      cursor: pointer;
      transition: transform 0.2s, box-shadow 0.2s, filter 0.2s;
      box-shadow: 0 0 30px var(--gold-glow), 0 4px 20px rgba(0,0,0,0.5);
      position: relative;
      overflow: hidden;
      text-transform: uppercase;
    }
    .btn-cta::before {
      content: '';
      position: absolute;
      top: -50%; left: -50%;
      width: 200%; height: 200%;
      background: linear-gradient(transparent, rgba(255,255,255,0.15), transparent);
      transform: rotate(45deg) translateY(-100%);
      transition: transform 0.5s;
    }
    .btn-cta:hover { transform: translateY(-3px); filter: brightness(1.1); box-shadow: 0 0 50px var(--gold-glow), 0 8px 30px rgba(0,0,0,0.6); }
    .btn-cta:hover::before { transform: rotate(45deg) translateY(100%); }
    .btn-cta:active { transform: translateY(-1px); }
    .btn-cta-lg { font-size: 1.25rem; padding: 22px 56px; border-radius: 8px; }

    /* ===== ANNOUNCEMENT BAR ===== */
    .announce {
      background: linear-gradient(90deg, var(--gold-dark), var(--gold), var(--gold-dark));
      color: #080a0f;
      text-align: center;
      padding: 10px 24px;
      font-size: 0.85rem;
      font-weight: 700;
      letter-spacing: 0.05em;
      text-transform: uppercase;
    }
    .announce span { display: inline-block; animation: pulse-text 2s ease-in-out infinite; }
    @keyframes pulse-text { 0%,100%{ opacity:1; } 50%{ opacity:.75; } }

    /* ===== HERO ===== */
    .hero {
      position: relative;
      min-height: 100vh;
      display: flex;
      align-items: center;
      background: radial-gradient(ellipse at 60% 40%, #1a2a4a 0%, var(--ink) 70%);
      overflow: hidden;
      padding: 80px 0 60px;
    }
    .hero::before {
      content: '';
      position: absolute;
      inset: 0;
      background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23E5A020' fill-opacity='0.04'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
    }
    .hero-road {
      position: absolute;
      bottom: 0; right: 0;
      width: 55%;
      height: 100%;
      background: linear-gradient(to right, var(--ink) 0%, transparent 30%),
                  linear-gradient(to top, var(--ink) 0%, transparent 20%);
      z-index: 1;
    }
    .hero-road-img {
      position: absolute;
      bottom: 0; right: 0;
      width: 55%;
      height: 100%;
      object-fit: cover;
      opacity: 0.15;
      filter: saturate(0) brightness(0.5);
      background-image: url('https://images.unsplash.com/photo-1558981403-c5f9899a28bc?q=80&w=2070&auto=format&fit=crop'); /* Imagem de estrada premium */
      background-size: cover;
    }
    .hero-glow {
      position: absolute;
      width: 600px; height: 600px;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(229,160,32,0.12) 0%, transparent 70%);
      top: 10%; left: -10%;
      pointer-events: none;
    }
    .hero-content {
      position: relative;
      z-index: 2;
    }
    .hero-badge {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: rgba(229,160,32,0.1);
      border: 1px solid rgba(229,160,32,0.3);
      color: var(--gold);
      font-size: 0.8rem;
      font-weight: 700;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      padding: 6px 16px;
      border-radius: 100px;
      margin-bottom: 28px;
    }
    .hero-badge::before { content: '🏍️'; }
    .hero-title {
      font-family: 'Bebas Neue', sans-serif;
      font-size: clamp(3rem, 7vw, 5.5rem);
      line-height: 1;
      letter-spacing: 0.02em;
      margin-bottom: 12px;
    }
    .hero-title .accent {
      display: block;
      background: linear-gradient(135deg, var(--gold) 0%, var(--gold-light) 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      filter: drop-shadow(0 0 20px rgba(229,160,32,0.4));
    }
    .hero-subtitle {
      font-size: clamp(1.1rem, 2.5vw, 1.35rem);
      color: var(--text-2);
      max-width: 560px;
      margin-bottom: 36px;
      line-height: 1.7;
    }
    .hero-subtitle strong { color: var(--text-1); }
    .hero-social-proof {
      display: flex;
      align-items: center;
      gap: 14px;
      margin-bottom: 40px;
    }
    .hero-avatars {
      display: flex;
    }
    .hero-avatars span {
      width: 36px; height: 36px;
      border-radius: 50%;
      border: 2px solid var(--ink);
      background: linear-gradient(135deg, var(--blue-mid), var(--surface));
      display: flex; align-items: center; justify-content: center;
      font-size: 1rem;
      margin-left: -8px;
    }
    .hero-avatars span:first-child { margin-left: 0; }
    .hero-social-text { font-size: 0.85rem; color: var(--text-2); }
    .hero-social-text strong { color: var(--gold); }
    .hero-cta-group { display: flex; flex-direction: column; gap: 12px; align-items: flex-start; }
    .hero-guarantee { font-size: 0.82rem; color: var(--text-3); display: flex; align-items: center; gap: 6px; }
    .hero-guarantee svg { color: var(--success); }

    /* ===== PAIN SECTION ===== */
    .pain {
      background: var(--ink-2);
      border-top: 1px solid rgba(255,255,255,0.04);
      border-bottom: 1px solid rgba(255,255,255,0.04);
    }
    .pain-intro {
      text-align: center;
      max-width: 680px;
      margin: 0 auto 56px;
    }
    .pain-intro h2 {
      font-family: 'Bebas Neue', sans-serif;
      font-size: clamp(2.2rem, 5vw, 3.5rem);
      line-height: 1;
      margin-bottom: 16px;
    }
    .pain-intro p { color: var(--text-2); font-size: 1.05rem; }
    .pain-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
      gap: 20px;
    }
    .pain-card {
      background: var(--ink-3);
      border: 1px solid rgba(255,255,255,0.06);
      border-radius: var(--radius);
      padding: 28px;
      position: relative;
      overflow: hidden;
      transition: transform 0.3s, border-color 0.3s;
    }
    .pain-card::before {
      content: '';
      position: absolute;
      top: 0; left: 0;
      width: 3px; height: 100%;
      background: linear-gradient(180deg, var(--danger), transparent);
    }
    .pain-card:hover { transform: translateY(-4px); border-color: rgba(231,76,60,0.3); }
    .pain-card-icon { font-size: 2rem; margin-bottom: 12px; }
    .pain-card h3 { font-size: 1rem; font-weight: 700; margin-bottom: 8px; color: var(--text-1); }
    .pain-card p { font-size: 0.9rem; color: var(--text-3); line-height: 1.6; }

    /* ===== SECTION TITLES ===== */
    .section-label {
      display: inline-block;
      color: var(--gold);
      font-size: 0.75rem;
      font-weight: 700;
      letter-spacing: 0.15em;
      text-transform: uppercase;
      margin-bottom: 12px;
    }
    .section-title {
      font-family: 'Bebas Neue', sans-serif;
      font-size: clamp(2rem, 4.5vw, 3.2rem);
      line-height: 1.05;
      margin-bottom: 20px;
    }
    .section-desc { color: var(--text-2); font-size: 1.05rem; max-width: 620px; }

    /* ===== BOOK SHOWCASE ===== */
    .showcase {
      background: linear-gradient(160deg, var(--ink) 0%, var(--blue-deep) 50%, var(--ink) 100%);
    }
    .showcase-inner {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 64px;
      align-items: center;
    }
    .tablet-mockup {
      position: relative;
      width: 100%;
      max-width: 380px;
      margin: 0 auto;
      filter: drop-shadow(0 20px 50px rgba(0,0,0,0.8));
      animation: float-tablet 5s ease-in-out infinite;
      transition: transform 0.4s ease;
    }
    .tablet-mockup:hover {
      transform: scale(1.03) rotate(-1deg);
    }
    .tablet-mockup img {
      width: 100%;
      height: auto;
      display: block;
      border-radius: 4px;
    }
    @keyframes float-tablet {
      0%, 100% { transform: translateY(0) rotate(0); }
      50% { transform: translateY(-15px) rotate(1deg); }
    }
    .tablet-glow {
      position: absolute;
      bottom: -30px;
      left: 50%;
      transform: translateX(-50%);
      width: 80%;
      height: 40px;
      background: radial-gradient(ellipse, rgba(229,160,32,0.3) 0%, transparent 70%);
      filter: blur(15px);
      z-index: -1;
    }
    .showcase-list { list-style: none; margin: 28px 0 36px; }
    .showcase-list li {
      display: flex;
      align-items: flex-start;
      gap: 12px;
      padding: 12px 0;
      border-bottom: 1px solid rgba(255,255,255,0.05);
      font-size: 0.975rem;
      color: var(--text-2);
    }
    .showcase-list li:last-child { border-bottom: none; }
    .showcase-list .icon {
      width: 24px; height: 24px; min-width: 24px;
      border-radius: 50%;
      background: rgba(229,160,32,0.12);
      display: flex; align-items: center; justify-content: center;
      color: var(--gold);
      font-size: 0.75rem;
      margin-top: 2px;
    }
    .showcase-list strong { color: var(--text-1); }

    /* ===== CHAPTERS ===== */
    .chapters { background: var(--ink-2); }
    .chapters-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
      gap: 16px;
      margin-top: 48px;
    }
    .chapter-card {
      background: var(--ink-3);
      border: 1px solid rgba(255,255,255,0.06);
      border-radius: var(--radius);
      padding: 24px;
      transition: transform 0.3s, border-color 0.3s, box-shadow 0.3s;
      position: relative;
      overflow: hidden;
    }
    .chapter-card::after {
      content: '';
      position: absolute;
      top: 0; left: 0; right: 0; bottom: 0;
      background: linear-gradient(135deg, rgba(229,160,32,0.05) 0%, transparent 60%);
      opacity: 0;
      transition: opacity 0.3s;
    }
    .chapter-card:hover { transform: translateY(-5px); border-color: rgba(229,160,32,0.25); box-shadow: 0 8px 30px rgba(0,0,0,0.4), 0 0 20px rgba(229,160,32,0.1); }
    .chapter-card:hover::after { opacity: 1; }
    .chapter-num {
      font-family: 'Bebas Neue', sans-serif;
      font-size: 0.85rem;
      letter-spacing: 0.15em;
      color: var(--gold-dark);
      margin-bottom: 8px;
    }
    .chapter-card h3 { font-size: 1.05rem; font-weight: 700; margin-bottom: 8px; color: var(--text-1); line-height: 1.3; }
    .chapter-card p { font-size: 0.87rem; color: var(--text-3); line-height: 1.55; }

    /* ===== FOR WHOM ===== */
    .for-whom {
      background: linear-gradient(180deg, var(--ink) 0%, var(--ink-3) 100%);
    }
    .for-whom-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 24px;
      margin-top: 48px;
    }
    .for-card {
      border-radius: var(--radius-lg);
      padding: 32px;
    }
    .for-yes {
      background: rgba(39,174,96,0.08);
      border: 1px solid rgba(39,174,96,0.2);
    }
    .for-no {
      background: rgba(231,76,60,0.08);
      border: 1px solid rgba(231,76,60,0.2);
    }
    .for-card h3 {
      font-size: 1.1rem;
      font-weight: 800;
      margin-bottom: 20px;
      display: flex;
      align-items: center;
      gap: 10px;
    }
    .for-yes h3 { color: var(--success); }
    .for-no h3 { color: var(--danger); }
    .for-list { list-style: none; }
    .for-list li {
      padding: 8px 0;
      border-bottom: 1px solid rgba(255,255,255,0.05);
      font-size: 0.93rem;
      color: var(--text-2);
      display: flex;
      gap: 10px;
      align-items: flex-start;
    }
    .for-list li:last-child { border-bottom: none; }
    .for-list .tick { font-size: 0.85rem; margin-top: 2px; }

    /* ===== AUTHOR ===== */
    .author {
      background: var(--ink-2);
    }
    .author-inner {
      display: grid;
      grid-template-columns: auto 1fr;
      gap: 48px;
      align-items: center;
    }
    .author-photo {
      width: 200px; height: 200px;
      border-radius: 50%;
      background: linear-gradient(135deg, var(--blue-mid), var(--surface));
      display: flex;
      align-items: center;
      justify-content: center;
      border: 3px solid var(--gold);
      box-shadow: 0 0 0 8px rgba(229,160,32,0.08), 0 0 40px rgba(229,160,32,0.15);
      flex-shrink: 0;
      overflow: hidden;
    }
    .author-photo img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    .author-name {
      font-family: 'Bebas Neue', sans-serif;
      font-size: 2.2rem;
      letter-spacing: 0.04em;
      color: var(--gold);
      margin-bottom: 4px;
    }
    .author-role { color: var(--text-3); font-size: 0.9rem; margin-bottom: 20px; letter-spacing: 0.05em; text-transform: uppercase; }
    .author-bio { color: var(--text-2); font-size: 0.975rem; line-height: 1.75; }
    .author-bio strong { color: var(--text-1); }

    /* ===== OBJECTIONS (FAQ) ===== */
    .objections { background: var(--ink); }
    .faq-list { margin-top: 48px; display: flex; flex-direction: column; gap: 12px; }
    .faq-item {
      background: var(--ink-3);
      border: 1px solid rgba(255,255,255,0.07);
      border-radius: var(--radius);
      overflow: hidden;
    }
    .faq-q {
      width: 100%;
      background: none;
      border: none;
      color: var(--text-1);
      text-align: left;
      padding: 22px 24px;
      font-size: 1rem;
      font-weight: 700;
      cursor: pointer;
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 16px;
      transition: color 0.2s;
    }
    .faq-q:hover { color: var(--gold); }
    .faq-q .arrow {
      font-size: 1.2rem;
      color: var(--gold);
      transition: transform 0.3s;
      flex-shrink: 0;
    }
    .faq-item.open .faq-q .arrow { transform: rotate(180deg); }
    .faq-a {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.4s ease, padding 0.3s;
      padding: 0 24px;
      color: var(--text-2);
      font-size: 0.96rem;
      line-height: 1.75;
    }
    .faq-item.open .faq-a {
      max-height: 500px;
      padding: 0 24px 24px;
    }
    .faq-a strong { color: var(--gold); }

    /* ===== BONUS ===== */
    .bonus-section {
      background: linear-gradient(135deg, var(--ink-3) 0%, var(--blue-deep) 100%);
      border-top: 1px solid rgba(229,160,32,0.1);
      border-bottom: 1px solid rgba(229,160,32,0.1);
    }
    .bonus-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
      gap: 20px;
      margin-top: 48px;
    }
    .bonus-card {
      background: rgba(255,255,255,0.03);
      border: 1px solid rgba(229,160,32,0.15);
      border-radius: var(--radius);
      padding: 28px;
      text-align: center;
      transition: transform 0.3s, box-shadow 0.3s;
    }
    .bonus-card:hover { transform: translateY(-5px); box-shadow: 0 12px 40px rgba(229,160,32,0.1); }
    .bonus-icon { font-size: 2.5rem; margin-bottom: 14px; }
    .bonus-card h3 { font-size: 1rem; font-weight: 700; margin-bottom: 8px; color: var(--gold-light); }
    .bonus-card p { font-size: 0.875rem; color: var(--text-3); }
    .bonus-tag {
      display: inline-block;
      background: rgba(229,160,32,0.15);
      color: var(--gold);
      font-size: 0.75rem;
      font-weight: 700;
      letter-spacing: 0.06em;
      text-transform: uppercase;
      padding: 3px 10px;
      border-radius: 100px;
      margin-bottom: 10px;
    }

    /* ===== PRICE SECTION ===== */
    .price-section {
      background: radial-gradient(ellipse at center, var(--blue-deep) 0%, var(--ink) 70%);
      text-align: center;
    }
    .price-card {
      max-width: 520px;
      margin: 48px auto 0;
      background: var(--ink-3);
      border: 1px solid rgba(229,160,32,0.25);
      border-radius: var(--radius-lg);
      padding: 48px 40px;
      position: relative;
      box-shadow: 0 0 60px rgba(229,160,32,0.1), 0 20px 60px rgba(0,0,0,0.6);
    }
    .price-card::before {
      content: '';
      position: absolute;
      inset: -1px;
      border-radius: var(--radius-lg);
      background: linear-gradient(135deg, rgba(229,160,32,0.4), transparent, rgba(229,160,32,0.1));
      z-index: -1;
    }
    .price-badge {
      display: inline-block;
      background: linear-gradient(135deg, var(--gold-dark), var(--gold));
      color: #080a0f;
      font-size: 0.78rem;
      font-weight: 800;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      padding: 6px 18px;
      border-radius: 100px;
      margin-bottom: 20px;
    }
    .price-old {
      color: var(--text-3);
      text-decoration: line-through;
      font-size: 1rem;
      margin-bottom: 4px;
    }
    .price-main {
      font-family: 'Bebas Neue', sans-serif;
      font-size: 5rem;
      color: var(--gold);
      line-height: 1;
      display: flex;
      align-items: flex-start;
      justify-content: center;
      gap: 4px;
      filter: drop-shadow(0 0 20px rgba(229,160,32,0.4));
    }
    .price-main .currency { font-size: 2rem; margin-top: 14px; }
    .price-main .cents { font-size: 2rem; margin-top: 14px; }
    .price-sub { color: var(--text-3); font-size: 0.9rem; margin-bottom: 28px; }
    .price-divider { border: none; border-top: 1px solid rgba(255,255,255,0.07); margin: 28px 0; }
    .price-includes { list-style: none; text-align: left; margin-bottom: 32px; }
    .price-includes li {
      display: flex;
      align-items: center;
      gap: 10px;
      padding: 9px 0;
      font-size: 0.94rem;
      color: var(--text-2);
      border-bottom: 1px solid rgba(255,255,255,0.04);
    }
    .price-includes li:last-child { border-bottom: none; }
    .price-includes .chk { color: var(--gold); font-size: 1rem; }
    .guarantee-bar {
      background: rgba(39,174,96,0.07);
      border: 1px solid rgba(39,174,96,0.2);
      border-radius: var(--radius);
      padding: 18px 20px;
      display: flex;
      align-items: center;
      gap: 14px;
      margin-top: 20px;
      text-align: left;
    }
    .guarantee-bar .g-icon { font-size: 2rem; flex-shrink: 0; }
    .guarantee-bar p { font-size: 0.875rem; color: var(--text-2); line-height: 1.5; }
    .guarantee-bar strong { color: var(--success); }

    /* ===== TESTIMONIALS ===== */
    .testimonials { background: var(--ink-2); }
    .testimonials-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 20px;
      margin-top: 48px;
    }
    .testi-card {
      background: var(--ink-3);
      border: 1px solid rgba(255,255,255,0.06);
      border-radius: var(--radius);
      padding: 28px;
      position: relative;
      transition: transform 0.3s, box-shadow 0.3s;
    }
    .testi-card::before {
      content: '"';
      position: absolute;
      top: 16px; right: 20px;
      font-family: 'Bebas Neue', sans-serif;
      font-size: 4rem;
      color: rgba(229,160,32,0.1);
      line-height: 1;
    }
    .testi-card:hover { transform: translateY(-4px); box-shadow: 0 12px 40px rgba(0,0,0,0.4); }
    .testi-stars { color: var(--gold); font-size: 0.9rem; margin-bottom: 16px; letter-spacing: 2px; }
    .testi-text { font-size: 0.95rem; color: var(--text-2); line-height: 1.7; margin-bottom: 20px; }
    .testi-author { display: flex; align-items: center; gap: 12px; }
    .testi-avatar {
      width: 44px; height: 44px;
      border-radius: 50%;
      background: linear-gradient(135deg, var(--blue-mid), var(--surface));
      display: flex; align-items: center; justify-content: center;
      font-size: 1.3rem;
      border: 2px solid rgba(229,160,32,0.3);
    }
    .testi-info .name { font-weight: 700; font-size: 0.9rem; color: var(--text-1); }
    .testi-info .desc { font-size: 0.8rem; color: var(--text-3); }

    /* ===== URGENCY ===== */
    .urgency {
      background: linear-gradient(135deg, var(--gold-dark) 0%, #8a5d07 30%, var(--ink) 100%);
      text-align: center;
      padding: 60px 0;
    }
    .urgency h2 {
      font-family: 'Bebas Neue', sans-serif;
      font-size: clamp(2rem, 5vw, 3.5rem);
      letter-spacing: 0.04em;
      margin-bottom: 16px;
    }
    .urgency p { font-size: 1.05rem; color: rgba(255,255,255,0.8); max-width: 560px; margin: 0 auto 32px; }

    /* ===== FINAL CTA ===== */
    .final-cta {
      background: var(--ink);
      text-align: center;
      padding: 100px 0;
    }
    .final-cta h2 {
      font-family: 'Bebas Neue', sans-serif;
      font-size: clamp(2.5rem, 6vw, 4.5rem);
      line-height: 1;
      margin-bottom: 20px;
    }
    .final-cta p { font-size: 1.1rem; color: var(--text-2); max-width: 580px; margin: 0 auto 40px; }

    /* ===== FOOTER ===== */
    footer {
      background: var(--ink-2);
      border-top: 1px solid rgba(255,255,255,0.06);
      padding: 32px 0;
      text-align: center;
    }
    footer p { color: var(--text-3); font-size: 0.83rem; }
    footer .logo-foot {
      font-family: 'Bebas Neue', sans-serif;
      font-size: 1.4rem;
      letter-spacing: 0.1em;
      color: var(--gold);
      margin-bottom: 12px;
    }

    /* ===== STICKY CTA ===== */
    .sticky-cta {
      position: fixed;
      bottom: 0; left: 0; right: 0;
      background: rgba(8,9,13,0.95);
      backdrop-filter: blur(16px);
      border-top: 1px solid rgba(229,160,32,0.2);
      padding: 12px 24px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 20px;
      z-index: 100;
      transform: translateY(100%);
      transition: transform 0.4s ease;
    }
    .sticky-cta.visible { transform: translateY(0); }
    .sticky-text { font-size: 0.9rem; color: var(--text-2); }
    .sticky-text strong { color: var(--gold); font-size: 1.1rem; }
    .sticky-price { font-family: 'Bebas Neue', sans-serif; font-size: 1.8rem; color: var(--gold); }
    .sticky-cta .btn-cta { padding: 12px 28px; font-size: 0.9rem; white-space: nowrap; }

    /* ===== ANIMATIONS ===== */
    .reveal {
      opacity: 0;
      transform: translateY(30px);
      transition: opacity 0.7s ease, transform 0.7s ease;
    }
    .reveal.in-view { opacity: 1; transform: translateY(0); }
    .reveal-delay-1 { transition-delay: 0.1s; }
    .reveal-delay-2 { transition-delay: 0.2s; }
    .reveal-delay-3 { transition-delay: 0.3s; }
    .reveal-delay-4 { transition-delay: 0.4s; }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 768px) {
      section { padding: 60px 0; }
      .hero { min-height: auto; padding: 100px 0 60px; }
      .hero-road-img { display: none; }
      .showcase-inner { grid-template-columns: 1fr; gap: 40px; }
      .book-3d { order: -1; }
      .book-3d-wrap { width: 200px; }
      .for-whom-grid { grid-template-columns: 1fr; }
      .author-inner { grid-template-columns: 1fr; text-align: center; }
      .author-photo { margin: 0 auto; width: 160px; height: 160px; }
      .price-card { padding: 32px 24px; }
      .price-main { font-size: 4rem; }
      .sticky-cta { flex-direction: column; gap: 8px; padding: 14px 16px; }
      .sticky-text { text-align: center; }
    }
    @media (max-width: 480px) {
      .hero-title { font-size: 2.8rem; }
      .btn-cta { width: 100%; justify-content: center; }
      .hero-cta-group { align-items: stretch; }
    }

    /* ===== UTILS ===== */
    .text-center { text-align: center; }
    .mt-8 { margin-top: 8px; }
    .mt-16 { margin-top: 16px; }
    .mt-24 { margin-top: 24px; }
    .mb-8 { margin-bottom: 8px; }
    .line-through { text-decoration: line-through; color: var(--text-3); }
  </style>
</head>

<body>

<!-- ANNOUNCEMENT BAR -->
<div class="announce">
  <span>🔥 Oferta especial por tempo limitado — acesso imediato após a compra</span>
</div>

<!-- ==================== HERO ==================== -->
<section class="hero" id="top">
  <div class="hero-glow"></div>
  <div class="container">
    <div class="hero-content">
      <div class="hero-badge reveal">O guia definitivo para motociclistas iniciantes</div>

      <h1 class="hero-title reveal reveal-delay-1">
        Compre sua<br />
        <span class="accent">primeira moto</span><br />
        sem errar.
      </h1>

      <p class="hero-subtitle reveal reveal-delay-2">
        Cada erro na escolha da sua primeira moto pode te custar <strong>R$ 3.000, R$ 5.000 ou mais.</strong> Este guia existe para você não desperdiçar dinheiro e realizar esse sonho do jeito certo.
      </p>

      <div class="hero-social-proof reveal reveal-delay-3">
        <div class="hero-avatars">
          <span>🏍️</span>
          <span>🪖</span>
          <span>🔧</span>
          <span>⛽</span>
        </div>
        <p class="hero-social-text">Mais de <strong>1.200 leitores</strong> já tomaram a decisão certa</p>
      </div>

      <div class="hero-cta-group reveal reveal-delay-4">
        <a href="#preco" class="btn-cta btn-cta-lg" id="hero-cta">
          🏁 Quero minha primeira moto sem errar
        </a>
        <p class="hero-guarantee">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4z"/></svg>
          Garantia de 7 dias · Acesso imediato · 100% digital
        </p>
      </div>
    </div>
  </div>
</section>

<!-- ==================== PAIN POINTS ==================== -->
<section class="pain">
  <div class="container">
    <div class="pain-intro reveal">
      <span class="section-label">A realidade que ninguém te conta</span>
      <h2 class="section-title">Você já se viu em alguma dessas situações?</h2>
      <p>Quase todo iniciante comete os mesmos erros. Não porque é burro — mas porque ninguém ensinou o caminho certo antes da compra.</p>
    </div>

    <div class="pain-grid">
      <div class="pain-card reveal reveal-delay-1">
        <div class="pain-card-icon">😰</div>
        <h3>"Comprei no impulso e me arrependi"</h3>
        <p>A moto era bonita, o vendedor era simpático, mas a parcela pesou e a manutenção foi um susto. Clássico.</p>
      </div>
      <div class="pain-card reveal reveal-delay-2">
        <div class="pain-card-icon">🔍</div>
        <h3>"Não sei por onde começar"</h3>
        <p>125cc? 300cc? Nova ou usada? Honda, Yamaha ou importada? Tanta informação que paralisa mais do que ajuda.</p>
      </div>
      <div class="pain-card reveal reveal-delay-3">
        <div class="pain-card-icon">💸</div>
        <h3>"Pensei que seria mais barato"</h3>
        <p>A moto custava R$ 10k mas o IPVA, seguro, manutenção e combustível custaram mais R$ 4k no primeiro ano. Ninguém avisou.</p>
      </div>
      <div class="pain-card reveal reveal-delay-4">
        <div class="pain-card-icon">⚠️</div>
        <h3>"Comprei uma moto com problema escondido"</h3>
        <p>Quilometragem adulterada, histórico de queda omitido, pendências na documentação. Prejuízo garantido.</p>
      </div>
      <div class="pain-card reveal">
        <div class="pain-card-icon">😟</div>
        <h3>"Escolhi uma acima do meu nível"</h3>
        <p>Moto potente demais para iniciante = medo, insegurança e risco de acidente ainda nos primeiros dias.</p>
      </div>
      <div class="pain-card reveal reveal-delay-1">
        <div class="pain-card-icon">🤷</div>
        <h3>"Fui fiado no conselho do amigo"</h3>
        <p>O amigo entende de motos, mas não conhece sua realidade financeira, seu nível de experiência nem seu uso diário.</p>
      </div>
    </div>
  </div>
</section>

<!-- ==================== BOOK SHOWCASE ==================== -->
<section class="showcase" id="ebook">
  <div class="container-lg">
    <div class="showcase-inner">
      <div class="reveal">
        <div class="tablet-mockup">
          <img src="assets/mockup-tablet.jpg" alt="Ebook Primeira Moto Sem Errar" />
          <div class="tablet-glow"></div>
        </div>
      </div>

      <div class="reveal reveal-delay-2">
        <span class="section-label">O que você vai aprender</span>
        <h2 class="section-title">66 páginas que podem te <span class="gold">poupar anos de erros</span></h2>
        <p class="section-desc">Um guia direto ao ponto, sem enrolação e sem linguagem técnica complicada. Do zero à sua primeira moto, com segurança e inteligência financeira.</p>

        <ul class="showcase-list">
          <li>
            <span class="icon">✓</span>
            <span><strong>Checklist completo</strong> para comprar moto usada sem levar gato por lebre</span>
          </li>
          <li>
            <span class="icon">✓</span>
            <span><strong>Custo real</strong> de manter uma moto (o que ninguém calcula antes de comprar)</span>
          </li>
          <li>
            <span class="icon">✓</span>
            <span><strong>7 erros fatais</strong> que fazem iniciantes perder dinheiro — e como evitar cada um</span>
          </li>
          <li>
            <span class="icon">✓</span>
            <span><strong>Passo a passo</strong> para sair do zero e conquistar sua moto com planejamento</span>
          </li>
          <li>
            <span class="icon">✓</span>
            <span><strong>Lista exclusiva</strong> das melhores motos para iniciantes em 2026</span>
          </li>
          <li>
            <span class="icon">✓</span>
            <span><strong>Mentalidade</strong> de quem conquista sua moto sem se endividar</span>
          </li>
        </ul>

        <a href="#preco" class="btn-cta" id="showcase-cta">Quero acessar agora →</a>
      </div>
    </div>
  </div>
</section>

<!-- ==================== CHAPTERS ==================== -->
<section class="chapters">
  <div class="container">
    <div class="text-center reveal">
      <span class="section-label">Conteúdo completo</span>
      <h2 class="section-title">O que está dentro do guia</h2>
      <p class="section-desc" style="margin: 0 auto;">9 capítulos + bônus construídos para transformar sua decisão de quem nunca teve moto em quem sabe exatamente o que está comprando.</p>
    </div>

    <div class="chapters-grid">
      <div class="chapter-card reveal reveal-delay-1">
        <div class="chapter-num">Capítulo 01</div>
        <h3>Por que a escolha da primeira moto define tudo</h3>
        <p>A primeira experiência determina se você vai amar ou odiar motos. Entenda por que a decisão certa muda sua trajetória.</p>
      </div>
      <div class="chapter-card reveal reveal-delay-2">
        <div class="chapter-num">Capítulo 02</div>
        <h3>O erro nº1: olhar só o preço da moto</h3>
        <p>O preço da moto é só a entrada. Descubra os custos invisíveis que a maioria ignora e acaba pagando caro depois.</p>
      </div>
      <div class="chapter-card reveal reveal-delay-3">
        <div class="chapter-num">Capítulo 03</div>
        <h3>7 erros que fazem iniciantes perder dinheiro</h3>
        <p>Moto potente demais, compra por impulso, ignorar histórico, não pesquisar manutenção… Todos mapeados e explicados.</p>
      </div>
      <div class="chapter-card reveal">
        <div class="chapter-num">Capítulo 04</div>
        <h3>Como escolher a moto ideal (passo a passo)</h3>
        <p>Objetivo, cilindrada, nova vs. usada, marca confiável — um roteiro completo para você decidir com clareza.</p>
      </div>
      <div class="chapter-card reveal reveal-delay-1">
        <div class="chapter-num">Capítulo 05</div>
        <h3>Checklist antes de comprar</h3>
        <p>Documentação, motor, histórico de quedas, quilometragem real — tudo o que você precisa checar antes de assinar.</p>
      </div>
      <div class="chapter-card reveal reveal-delay-2">
        <div class="chapter-num">Capítulo 06</div>
        <h3>Quanto custa ter uma moto de verdade</h3>
        <p>Seguro, combustível, IPVA, manutenção, documentação. O guia apresenta os números reais para você não ser pego de surpresa.</p>
      </div>
      <div class="chapter-card reveal reveal-delay-3">
        <div class="chapter-num">Capítulo 07</div>
        <h3>A importância de dar uma boa entrada</h3>
        <p>Como um bom planejamento de entrada pode te livrar de anos de parcelas altas e juros que consomem seu bolso.</p>
      </div>
      <div class="chapter-card reveal">
        <div class="chapter-num">Capítulo 08</div>
        <h3>Mentalidade de quem conquista sua moto</h3>
        <p>A diferença entre quem realiza o sonho e quem fica só falando dele. Mindset, foco e disciplina financeira.</p>
      </div>
      <div class="chapter-card reveal reveal-delay-1">
        <div class="chapter-num">Capítulo Final</div>
        <h3>Seu plano do zero até a sua moto</h3>
        <p>Meta, poupança, renda extra, escolha certa. Um plano prático em 4 passos para você sair do zero e chegar lá.</p>
      </div>
    </div>
  </div>
</section>

<!-- ==================== FOR WHOM ==================== -->
<section class="for-whom">
  <div class="container">
    <div class="text-center reveal">
      <span class="section-label">Para quem é</span>
      <h2 class="section-title">Este guia foi feito <span class="gold">para você?</span></h2>
    </div>

    <div class="for-whom-grid">
      <div class="for-card for-yes reveal reveal-delay-1">
        <h3><span>✅</span> Sim, é pra você se…</h3>
        <ul class="for-list">
          <li><span class="tick">🟢</span> Você quer comprar sua primeira moto e tem medo de errar</li>
          <li><span class="tick">🟢</span> Não sabe qual modelo escolher e está confuso com opções</li>
          <li><span class="tick">🟢</span> Quer economizar e fazer uma escolha inteligente</li>
          <li><span class="tick">🟢</span> Está pensando em comprar uma moto usada e teme levar gato por lebre</li>
          <li><span class="tick">🟢</span> Quer entender os custos reais antes de fechar negócio</li>
          <li><span class="tick">🟢</span> Está planejando tirar a habilitação e quer se preparar</li>
        </ul>
      </div>
      <div class="for-card for-no reveal reveal-delay-2">
        <h3><span>❌</span> Não é pra você se…</h3>
        <ul class="for-list">
          <li><span class="tick">🔴</span> Você já tem experiência extensa com motos</li>
          <li><span class="tick">🔴</span> Não quer aprender, só quer comprar no impulso</li>
          <li><span class="tick">🔴</span> Prefere aprender na prática pagando caro pelos erros</li>
          <li><span class="tick">🔴</span> Acha que "qualquer conselho de amigo" já é suficiente</li>
          <li><span class="tick">🔴</span> Não se importa com planejamento financeiro</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ==================== TESTIMONIALS ==================== -->
<section class="testimonials">
  <div class="container">
    <div class="text-center reveal">
      <span class="section-label">Quem já leu</span>
      <h2 class="section-title">Resultados reais de quem <span class="gold">tomou a decisão certa</span></h2>
    </div>

    <div class="testimonials-grid">
      <div class="testi-card reveal reveal-delay-1">
        <div class="testi-stars">★★★★★</div>
        <p class="testi-text">"Estava prestes a comprar uma moto 300cc por impulso. Depois de ler o guia, entendi que aquilo seria um erro enorme para o meu nível. Comprei uma 150cc, estou pilotando com confiança e sem medo."</p>
        <div class="testi-author">
          <div class="testi-avatar">👨</div>
          <div class="testi-info">
            <div class="name">Rodrigo M.</div>
            <div class="desc">São Paulo, SP · Comprou Honda CG 160</div>
          </div>
        </div>
      </div>

      <div class="testi-card reveal reveal-delay-2">
        <div class="testi-stars">★★★★★</div>
        <p class="testi-text">"O checklist do capítulo 5 salvou minha vida! Ia comprar uma moto usada que tinha histórico de queda omitido. Usei o roteiro do guia e descobri antes de fechar. Evitei um prejuízo de quase R$ 4 mil."</p>
        <div class="testi-author">
          <div class="testi-avatar">👩</div>
          <div class="testi-info">
            <div class="name">Marina C.</div>
            <div class="desc">Curitiba, PR · 1ª moto: Yamaha Factor 125</div>
          </div>
        </div>
      </div>

      <div class="testi-card reveal reveal-delay-3">
        <div class="testi-stars">★★★★★</div>
        <p class="testi-text">"Nunca tinha calculado os custos reais de manter uma moto. O capítulo 6 abriu meu olho. Ajustei meu planejamento, dei uma entrada maior e hoje a parcela não aperta no final do mês."</p>
        <div class="testi-author">
          <div class="testi-avatar">👨</div>
          <div class="testi-info">
            <div class="name">Lucas F.</div>
            <div class="desc">Belo Horizonte, MG · Financiou com 40% de entrada</div>
          </div>
        </div>
      </div>

      <div class="testi-card reveal">
        <div class="testi-stars">★★★★★</div>
        <p class="testi-text">"Muito objetivo e direto. Sem aquela enrolação de outros conteúdos de internet. Em 2 tardes li tudo, aprendi o que precisava e alguns dias depois já estava comprando minha moto com total segurança."</p>
        <div class="testi-author">
          <div class="testi-avatar">👨</div>
          <div class="testi-info">
            <div class="name">Felipe A.</div>
            <div class="desc">Brasília, DF · Hoje pilota Honda Biz 125</div>
          </div>
        </div>
      </div>

      <div class="testi-card reveal reveal-delay-1">
        <div class="testi-stars">★★★★★</div>
        <p class="testi-text">"Comprei como presente para meu irmão que estava louco para comprar a primeira moto. Ele leu tudo em dois dias e hoje fala que foi o melhor investimento que fiz por ele. Valeu cada centavo."</p>
        <div class="testi-author">
          <div class="testi-avatar">👩</div>
          <div class="testi-info">
            <div class="name">Ana Paula S.</div>
            <div class="desc">Recife, PE · Presente para o irmão iniciante</div>
          </div>
        </div>
      </div>

      <div class="testi-card reveal reveal-delay-2">
        <div class="testi-stars">★★★★★</div>
        <p class="testi-text">"O Cleber escreve como quem realmente viveu isso. Não é teoria. Cada capítulo tem situações que eu já tinha passado ou ia passar. Aprendi mais aqui do que em meses pesquisando no YouTube."</p>
        <div class="testi-author">
          <div class="testi-avatar">👨</div>
          <div class="testi-info">
            <div class="name">Thiago B.</div>
            <div class="desc">Porto Alegre, RS · Aguardando entrega da moto</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==================== AUTHOR ==================== -->
<section class="author">
  <div class="container">
    <div class="author-inner reveal">
      <div class="author-photo">
        <img src="assets/cleber-pacheco.jpg" alt="Cleber Pacheco - Especialista em Motos">
      </div>
      <div>
        <div class="author-name">Cleber Pacheco</div>
        <div class="author-role">Especialista em primeiras motos · Motociclista há mais de 20 anos</div>
        <div class="author-bio">
          <p>Minha relação com motos começou na adolescência, com uma Mobylette que eu pilotava com o amigo sem nenhum cuidado — e sem capacete. <strong>Desde então, passei por dezenas de motos, cometi os erros clássicos e aprendi na prática o que funciona e o que não funciona.</strong></p>
          <br/>
          <p>Depois de anos ajudando amigos e familiares a escolherem a primeira moto, percebi que <strong>todo iniciante caía nas mesmas armadilhas</strong> — compra por impulso, moto acima do nível, custos ocultos, documentação problemática — simplesmente por falta de informação organizada e confiável.</p>
          <br/>
          <p>Criei esse guia porque não quero que você pague para aprender o que eu já aprendi. <strong>Sua primeira moto não pode ser um erro. Ela precisa ser o início de uma história incrível.</strong></p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==================== BONUS ==================== -->
<section class="bonus-section">
  <div class="container">
    <div class="text-center reveal">
      <span class="section-label">Bônus incluídos</span>
      <h2 class="section-title">Além do guia, você ganha <span class="gold">esses bônus</span></h2>
      <p class="section-desc" style="margin:0 auto;">100% grátis para quem adquire o guia completo.</p>
    </div>

    <div class="bonus-grid">
      <div class="bonus-card reveal reveal-delay-1">
        <div class="bonus-tag">Bônus #1</div>
        <div class="bonus-icon">📋</div>
        <h3>Checklist de Compra em PDF</h3>
        <p>Lista prática para levar na hora de avaliar qualquer moto usada. <a href="ebook-primeira-moto.pdf" style="color:var(--gold);text-decoration:underline;">Baixar Agora</a></p>
      </div>
      <div class="bonus-card reveal reveal-delay-2">
        <div class="bonus-tag">Bônus #2</div>
        <div class="bonus-icon">🏍️</div>
        <h3>Lista de Motos para Iniciantes 2026</h3>
        <p>As melhores opções por faixa de preço e uso. Curadas especialmente para quem está começando.</p>
      </div>
      <div class="bonus-card reveal reveal-delay-3">
        <div class="bonus-tag">Bônus #3</div>
        <div class="bonus-icon">💰</div>
        <h3>Calculadora de Custo Mensal</h3>
        <p>Simule o custo real mensal da sua moto antes de comprar e chegue preparado para as despesas.</p>
      </div>
    </div>
  </div>
</section>

<!-- ==================== OBJECTIONS ==================== -->
<section class="objections">
  <div class="container">
    <div class="text-center reveal">
      <span class="section-label">Dúvidas frequentes</span>
      <h2 class="section-title">Respondendo suas principais <span class="gold">objeções</span></h2>
    </div>

    <div class="faq-list">
      <div class="faq-item reveal">
        <button class="faq-q" onclick="toggleFaq(this)">
          "Ainda não sei se vou comprar moto. Vale a pena ler o guia?"
          <span class="arrow">▾</span>
        </button>
        <div class="faq-a">
          <strong>Especialmente para você.</strong> Se você está indeciso, é exatamente o momento certo para se preparar. O guia vai te dar a clareza que falta — seja para tomar a decisão de comprar com confiança, ou para entender que ainda não é o momento ideal. Saber isso antes evita um erro caro.
        </div>
      </div>

      <div class="faq-item reveal reveal-delay-1">
        <button class="faq-q" onclick="toggleFaq(this)">
          "Acho que já sei o suficiente — pesquisei muito na internet"
          <span class="arrow">▾</span>
        </button>
        <div class="faq-a">
          Pesquisar na internet é bom, mas você provavelmente encontrou informações fragmentadas, contraditórias e sem contexto para iniciantes. <strong>O guia organiza tudo em uma sequência lógica, do básico ao avançado, sem você precisar filtrar conteúdo ruim.</strong> A maioria dos leitores que pesquisou muito antes diz que encontrou informações novas e importantes que não havia visto em lugar algum.
        </div>
      </div>

      <div class="faq-item reveal reveal-delay-2">
        <button class="faq-q" onclick="toggleFaq(this)">
          "Isso é só mais um ebook que não vai me ajudar na prática"
          <span class="arrow">▾</span>
        </button>
        <div class="faq-a">
          A diferença está no conteúdo e na abordagem. <strong>Cada capítulo tem aplicação direta</strong> — o checklist você usa literalmente na concessionária ou com o vendedor de moto usada. A calculadora de custos você preenche antes de assinar qualquer contrato. Não é teoria: é um roteiro que você segue na vida real.
        </div>
      </div>

      <div class="faq-item reveal reveal-delay-3">
        <button class="faq-q" onclick="toggleFaq(this)">
          "Não tenho tempo para ler"
          <span class="arrow">▾</span>
        </button>
        <div class="faq-a">
          São 66 páginas escritas de forma direta e objetiva, sem enrolação. <strong>A maioria dos leitores termina em 2 a 3 tardes.</strong> E você pode ler no celular, tablet ou computador, onde e quando for melhor para você. O tempo que você investe aqui pode te poupar meses de dor de cabeça depois da compra errada.
        </div>
      </div>

      <div class="faq-item reveal">
        <button class="faq-q" onclick="toggleFaq(this)">
          "E se eu comprar e não gostar? Vou perder meu dinheiro?"
          <span class="arrow">▾</span>
        </button>
        <div class="faq-a">
          Não. Você tem <strong>7 dias de garantia total e incondicional.</strong> Se por qualquer motivo você achar que o guia não valeu o investimento, é só entrar em contato e devolver 100% do seu dinheiro. Sem questionamentos, sem burocracia. O risco é completamente zero do seu lado.
        </div>
      </div>

      <div class="faq-item reveal reveal-delay-1">
        <button class="faq-q" onclick="toggleFaq(this)">
          "O preço parece alto para um ebook"
          <span class="arrow">▾</span>
        </button>
        <div class="faq-a">
          O preço do guia é uma fração mínima do que você pode <em>economizar</em> ao evitar um único erro. <strong>Uma moto com documentação problemática, uma queda por moto inadequada, ou uma parcela que aperta cada mês</strong> — cada um desses erros custa muito mais do que este guia. Veja como um seguro baratíssimo para a sua decisão de compra.
        </div>
      </div>

      <div class="faq-item reveal reveal-delay-2">
        <button class="faq-q" onclick="toggleFaq(this)">
          "Funciona para qualquer tipo de moto que eu quero comprar?"
          <span class="arrow">▾</span>
        </button>
        <div class="faq-a">
          Sim. O guia cobre os princípios que se aplicam a qualquer tipo de moto para iniciante — street, naked, trail, scooter, 125cc até 300cc, nova ou usada. O conteúdo te dá as ferramentas de análise que funcionam independentemente do modelo que você tem em mente.
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==================== PRICE ==================== -->
<section class="price-section" id="preco">
  <div class="container">
    <div class="text-center reveal">
      <span class="section-label">Invista no caminho certo</span>
      <h2 class="section-title">Acesse agora por um <span class="gold">valor simbólico</span></h2>
      <p class="section-desc" style="margin: 0 auto;">Considere o quanto você gastaria em apenas um erro de compra. Este guia é o menor investimento que você pode fazer antes da maior.</p>
    </div>

    <div class="price-card reveal reveal-delay-1">
      <div class="price-badge">🏁 Oferta de lançamento</div>

      <div class="price-old">De R$ 79,90</div>
      <div class="price-main">
        <span class="currency">R$</span>
        <span>27</span>
        <span class="cents">,00</span>
      </div>
      <p class="price-sub">Pagamento único · Acesso imediato · Para sempre</p>

      <hr class="price-divider" />

      <ul class="price-includes">
        <li><span class="chk">✦</span> Guia completo "Primeira Moto Sem Errar" (66 páginas)</li>
        <li><span class="chk">✦</span> Capítulo Bônus: Lista de motos para iniciantes 2026</li>
        <li><span class="chk">✦</span> Checklist de compra imprimível em PDF</li>
        <li><span class="chk">✦</span> Calculadora de custo mensal real</li>
        <li><span class="chk">✦</span> Acesso em qualquer dispositivo (celular, tablet, PC)</li>
        <li><span class="chk">✦</span> Atualizações gratuitas para sempre</li>
      </ul>

      <!-- INTEGRACAO: Substitua o '#' pelo seu link da Hotmart, Kiwify, etc. -->
      <a href="#" class="btn-cta btn-cta-lg" style="width:100%;justify-content:center;" id="price-cta" rel="noopener noreferrer">
        🏍️ Quero comprar agora — R$ 27,00
      </a>

      <div class="guarantee-bar">
        <span class="g-icon">🛡️</span>
        <p><strong>Garantia incondicional de 7 dias.</strong> Se por qualquer motivo você não ficar satisfeito, devolvemos 100% do seu investimento. Sem perguntas.</p>
      </div>
    </div>
  </div>
</section>

<!-- ==================== URGENCY ==================== -->
<section class="urgency">
  <div class="container">
    <h2 class="reveal">Cada dia que você espera é um dia a mais <span style="text-decoration:underline;text-decoration-color:rgba(255,255,255,0.4);">correndo o risco de errar</span></h2>
    <p class="reveal reveal-delay-1">O sonho da sua primeira moto está mais perto do que parece. O único ingrediente que falta é a informação certa — e ela está aqui, por menos do que uma tank de combustível.</p>
    <a href="#preco" class="btn-cta btn-cta-lg reveal reveal-delay-2" id="urgency-cta" style="background:linear-gradient(135deg,#fff,#f0f0f0);color:#080a0f;">
      🏁 Acelere para a escolha certa agora
    </a>
  </div>
</section>

<!-- ==================== FINAL CTA ==================== -->
<section class="final-cta">
  <div class="container">
    <div class="reveal">
      <span class="display" style="font-size:5rem;color:var(--gold);opacity:0.08;display:block;margin-bottom:-20px;">🏍️</span>
    </div>
    <h2 class="reveal">
      Sua primeira moto não pode<br />
      ser <span class="gold">um erro.</span>
    </h2>
    <p class="reveal reveal-delay-1">Você merece começar do jeito certo. Com segurança, com planejamento e com a confiança de quem sabe exatamente o que está fazendo.</p>
    <a href="#preco" class="btn-cta btn-cta-lg reveal reveal-delay-2" id="final-cta">
      🏍️ Quero minha moto sem errar — R$ 27,00
    </a>
    <p class="reveal reveal-delay-3" style="margin-top:20px;font-size:0.83rem;color:var(--text-3);">
      Acesso imediato · 100% digital · Garantia de 7 dias · Pagamento seguro
    </p>
  </div>
</section>

<!-- ==================== FOOTER ==================== -->
<footer>
  <div class="container">
    <div class="logo-foot">PRIMEIRA MOTO SEM ERRAR</div>
    <p>© 2026 Cleber Pacheco — Todos os direitos reservados.</p>
    <p style="margin-top:6px;">Este produto é 100% digital. Após a compra, você receberá acesso imediato ao conteúdo.</p>
    <p style="margin-top:6px;"><a href="#" style="color:var(--text-3);border-bottom:1px solid rgba(255,255,255,0.1);">Política de Privacidade</a> · <a href="#" style="color:var(--text-3);border-bottom:1px solid rgba(255,255,255,0.1);">Termos de Uso</a></p>
  </div>
</footer>

<!-- ==================== STICKY CTA ==================== -->
<div class="sticky-cta" id="sticky-cta">
  <div class="sticky-text">
    <div><strong>Primeira Moto Sem Errar</strong></div>
    <div>Guia completo + 3 bônus</div>
  </div>
  <div class="sticky-price">R$ 27</div>
  <a href="#preco" class="btn-cta" id="sticky-btn">Comprar agora →</a>
</div>

<!-- ==================== SCRIPTS ==================== -->
<script>
  // Scroll reveal
  const reveals = document.querySelectorAll('.reveal');
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('in-view');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
  reveals.forEach(el => observer.observe(el));

  // Sticky CTA
  const stickyCta = document.getElementById('sticky-cta');
  window.addEventListener('scroll', () => {
    stickyCta.classList.toggle('visible', window.scrollY > 700);
  }, { passive: true });

  // FAQ accordion
  function toggleFaq(btn) {
    const item = btn.closest('.faq-item');
    const isOpen = item.classList.contains('open');
    document.querySelectorAll('.faq-item.open').forEach(el => el.classList.remove('open'));
    if (!isOpen) item.classList.add('open');
  }

  // Trigger reveal for hero (above fold)
  setTimeout(() => {
    document.querySelectorAll('.hero .reveal').forEach(el => el.classList.add('in-view'));
  }, 100);
</script>

</body>
</html>
