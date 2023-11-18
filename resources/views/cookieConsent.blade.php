<div id="cookieConsent" style="display: none;">
    Этот сайт использует файлы cookie. Выберите, какие куки вы хотите принять:
    <div>
        <button onclick="handleCookieConsent('all')">Принять все</button>
        <button onclick="handleCookieConsent('necessary')">Только обязательные</button>
        <button onclick="handleCookieConsent('manage')">Управление куками</button>
    </div>
    <div id="closeCookieConsent">x</div>
</div>

<script>
    const handleCookieConsent = type => {
        document.getElementById('cookieConsent').style.display = 'none';
        setCookie('cookieConsent', type, 365);

        if (type === 'manage') {
            // Дополнительная логика для управления куками
        } else {
            // Дополнительная логика для принятия куков
        }
    };

    document.getElementById('closeCookieConsent').addEventListener('click', () => {
        document.getElementById('cookieConsent').style.display = 'none';
    });

    // Добавим код для показа всплывающего окна при загрузке страницы
    window.onload = () => {
        const cookieConsent = getCookie('cookieConsent');
        if (!cookieConsent || cookieConsent === 'manage') {
            document.getElementById('cookieConsent').style.display = 'block';
        }
    };
</script>

<script>
    const setCookie = (name, value, days) => {
    const expires = days ? `; expires=${new Date(new Date().getTime() + days * 24 * 60 * 60 * 1000).toUTCString()}` : '';
    document.cookie = `${name}=${value}${expires}; path=/`;
};

const getCookie = name => {
    const nameEQ = `${name}=`;
    const ca = document.cookie.split(';');
    for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) === ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
};

</script>