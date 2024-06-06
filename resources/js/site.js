import Alpine from 'alpinejs'
import precognition from 'laravel-precognition-alpine';

// Call Alpine.
window.Alpine = Alpine
Alpine.plugin([precognition])
Alpine.start()
