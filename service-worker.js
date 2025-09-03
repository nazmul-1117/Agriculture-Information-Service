const CACHE_NAME = 'ais-cache-v1';
const urlsToCache = [
  '/',                 // root
  'index.html',
  'about.html',
  'services.html',
  'contact.html',
  'crops.html',
  'gallery.html',
  'assets/helper/head.html',
  'assets/helper/navbar.html',
  'assets/helper/footer.html',
  'assets/css/style.css',
  'assets/js/navbar.js',
  'assets/js/crops.js',
  'assets/images/android-chrome-512x512.png',
  'assets/images/Logo/favicon.ico'
];

// Install SW and cache assets
self.addEventListener('install', event => {
  event.waitUntil(
    caches.open(CACHE_NAME).then(cache => {
      return Promise.all(
        urlsToCache.map(url =>
          fetch(url).then(response => {
            if (response.ok) {
              return cache.put(url, response);
            }
            console.warn('Failed to cache:', url);
          }).catch(err => console.warn('Error fetching:', url, err))
        )
      );
    })
  );
  self.skipWaiting(); // Activate SW immediately
});

// Activate SW and remove old caches
self.addEventListener('activate', event => {
  event.waitUntil(
    caches.keys().then(cacheNames =>
      Promise.all(
        cacheNames
          .filter(name => name.startsWith('ais-cache-') && name !== CACHE_NAME)
          .map(name => caches.delete(name))
      )
    )
  );
  self.clients.claim(); // Take control immediately
});

// Fetch handler - serve cache first, then network
self.addEventListener('fetch', event => {
  event.respondWith(
    caches.match(event.request).then(cachedResponse => {
      if (cachedResponse) return cachedResponse;
      return fetch(event.request).then(networkResponse => {
        // Cache images dynamically
        if (event.request.destination === 'image') {
          caches.open(CACHE_NAME).then(cache => cache.put(event.request, networkResponse.clone()));
        }
        return networkResponse;
      }).catch(() => {
        // Optional: fallback for offline pages/images
        // return caches.match('offline.html');
      });
    })
  );
});
