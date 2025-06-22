import './bootstrap';
import './echo';

window.Echo.private('box-notif')
    .listen('.box.opened', (e) => {
        alert(`${e.title}: ${e.message}`);
    });
