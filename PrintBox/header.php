<?php
if (!isset($page_title)) $page_title = 'PrintBox';
?>
<!DOCTYPE html>
<html lang="uk">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title><?php echo htmlspecialchars($page_title); ?></title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
  <style>
    .cart-animation { position: fixed; top: 0; left: 0; width: 100%; height: 100%; pointer-events: none; z-index: 9999; }
    .flying-item { position: absolute; width: 60px; height: 60px; background: #121212; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 24px; animation: flyToCart 1s ease-in-out forwards; box-shadow: 0 4px 20px rgba(0,0,0,0.3); }
    @keyframes flyToCart { 0% { transform: scale(1) rotate(0deg); opacity: 1; } 50% { transform: scale(0.5) rotate(180deg); opacity: 0.8; } 100% { transform: scale(0.1) rotate(360deg); opacity: 0; } }
    .cart-btn-highlight { animation: cartPulse 0.5s ease-in-out; }
    @keyframes cartPulse { 0% { transform: scale(1); } 50% { transform: scale(1.2); } 100% { transform: scale(1); } }
  </style>
</head>
<body class="bg-milk text-gray-900">
  <header class="header-minimal fixed-header">
    <div class="container header-bar">
      <nav class="header-nav">
        <a href="catalog.php" class="nav-link">Каталог</a>
        <a href="gallery.php" class="nav-link">Галерея</a>
        <a href="services.php" class="nav-link">Послуги</a>
        <a href="upload.php" class="nav-link">Завантажити</a>
      </nav>
      <div class="logo">
        <a href="index.php" style="text-decoration: none; color: inherit;">PrintBox</a>
      </div>
      <div style="display: flex; gap: 1rem; align-items: center;">
        <button class="profile-btn" aria-label="Кошик" onclick="window.location.href='cart.php'">
          <svg width="28" height="28" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
            <circle cx="9" cy="21" r="1"/>
            <circle cx="20" cy="21" r="1"/>
            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/>
          </svg>
        </button>
        <button class="profile-btn" aria-label="Обліковий запис" onclick="window.location.href='profile.php'">
          <svg width="28" height="28" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
            <circle cx="12" cy="8" r="5"/>
            <path d="M4 20c0-2.5 4-4.5 8-4.5s8 2 8 4.5"/>
          </svg>
        </button>
      </div>
    </div>
  </header>

</body>
</html> 