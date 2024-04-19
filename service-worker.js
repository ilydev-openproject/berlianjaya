// Service Worker: Instalasi
self.addEventListener('install', event => {
    event.waitUntil(
      caches.open('my-cache').then(cache => {
        return cache.addAll([
          '/',
          '/application/views/index.php',
          '/application/views/pustaka/index.php',
          '/application/views/pustaka/detail.php',
          '/application/views/request/index.php',
          '/application/views/contact/index.php',
          '/application/views/layout/footer.php',
          '/application/views/layout/header.php',
          '/application/views/layout/navbar.php',
          '/public/css/style.css',
          '/scripts/main.js',
          '/public/assets/img/logo/logo-nongchord.png'
          // Daftar file dan konten lain yang ingin Anda cache
        ]);
      })
    );
  });
  
  // Service Worker: Mengambil respons dari cache atau jaringan
  self.addEventListener('fetch', event => {
    event.respondWith(
      caches.match(event.request).then(response => {
        return response || fetch(event.request);
      })
    );
  });
  