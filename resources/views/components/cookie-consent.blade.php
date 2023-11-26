       <!-- Полупрозрачный фон -->
       <div id="overlay" class="overlay" style="display:none;"></div>

<div id="cookie-notification" class="cookie-notification" style=display:none;>
    <p>Liebe Benutzer!

        Wir möchten Sie darüber informieren, dass unsere Website Cookies verwendet. Cookies sind für das ordnungsgemäße Funktionieren der Website unerlässlich und liefern uns außerdem Informationen darüber, wie Sie unsere Website nutzen, damit wir sie verbessern können.

        Nach dem Recht der Europäischen Union sind wir verpflichtet, Ihre Einwilligung zur Verwendung von Cookies einzuholen.

        Wenn Sie der Verwendung von Cookies zustimmen, klicken Sie bitte auf „Akzeptieren“. Ansonsten können Sie Ihre Cookie-Einstellungen entsprechend Ihren Präferenzen anpassen.

        Vielen Dank für Ihr Verständnis und Ihre Unterstützung!
    </p>
    <div id="cookie-buttons">
        <button id="accept-all-cookies">Alle akzeptieren</button>
        <button id="accept-optional-cookies">Nur technisch notwendig</button>
        <button id="customize-cookies">Einstellungen</button>
    </div>
</div>


<!-- Добавьте следующий код после вашего #cookie-notification блока -->

<div id="customize-modal" class="modal" style="display:none;">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <h2>Cookie-Einstellungen</h2>
        <div class="slider-container">
            <label for="marketing-slider">Technisch erforderlich</label>
            <div class="row">
            <div class="col-sm-5">
            <button id="alwaysActiveButton" type="button" class="btn btn-lg btn-toggle active btn-cookie" data-toggle="button" aria-pressed="true" autocomplete="off" data-btn='1' disabled>
                <div class="handle"></div>
            </button>
            </div>
            </div>
            <p>Ihre Daten können verwendet werden, um betrügerische Aktivitäten zu überwachen und zu verhindern und um sicherzustellen, dass Systeme und Prozesse ordnungsgemäß und sicher funktionieren.</p>
        </div>
        <div class="slider-container">
            <label for="analytics-slider">Analyse und Statistik:</label>
            <!-- <input type="range" id="analytics-slider" min="0" max="1" step="1" value="0"> -->
            <div class="row">
            <div class="col-sm-5">
                <button type="button" class="btn btn-lg btn-toggle btn-cookie" data-toggle="button" aria-pressed="false" autocomplete="off" data-btn='2'>
                    <div class="handle"></div>
                </button>
            </div>
            </div>
            <p>Wir möchten die Benutzerfreundlichkeit und Leistung unserer Websites kontinuierlich verbessern. Aus diesem Grund nutzen wir Analysetechnologien (einschließlich Cookies), die pseudonymisiert messen und auswerten, welche Funktionen und Inhalte unserer Websites wie und wie oft genutzt werden. Auf dieser Grundlage können wir unsere Webseiten für Nutzer verbessern und nur Inhalte anzeigen, die für den durchschnittlichen Nutzer von Interesse sind.</p>
        </div>
        <div class="slider-container">
            <label for="marketing-slider">Marketing:</label>
            <div class="row">
            <div class="col-sm-5">
                <button type="button" class="btn btn-lg btn-toggle btn-cookie" data-toggle="button" aria-pressed="false" autocomplete="off" data-btn='3'>
                      <div class="handle"></div>
                </button>
            </div>
            </div>
            <p>Cookies, die Benutzeraktivitäten auf einer Informationsressource lesen, um Werbeinhalte zu generieren</p>
        </div>
        <!-- Добавьте дополнительные ползунки и тексты по аналогии -->



         <!-- Добавленные кнопки -->
         <div id="" class="cookie-buttons-modals">
            <button id="accept-selected-cookies">Ausgewählte akzeptieren</button>
            <button id="accept-all-cookies-modal">Alle akzeptieren</button>
        </div>
    </div>
</div>



<!-- resources/views/main.blade.php -->
                        <!-- //cookie -->

                        <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Показываем уведомление о куки через 3 секунды
            setTimeout(function() {
                var cookieNotification = document.getElementById('cookie-notification');
                var overlay = document.getElementById('overlay');

                fadeIn(cookieNotification);
                fadeIn(overlay);
            }, 3000);
        });
            //плавное появление анимации
        function fadeIn(element) {
        var opacity = 0;
        element.style.opacity = opacity;
        element.style.display = 'flex';

        var fadeInInterval = setInterval(function() {
            if (opacity < 1) {
                opacity += 0.1;
                element.style.opacity = opacity;
            } else {
                clearInterval(fadeInInterval);
            }
        }, 100);
      }
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {

           

            var cookieNotification = document.getElementById('cookie-notification');

            function hideCookieNotification() {
                cookieNotification.style.display = 'none';
                // Устанавливаем куку согласия
                var cookieConsent = document.cookie = 'cookieConsent=true; expires=' + new Date(new Date().getTime() + 365 * 24 * 60 * 60 * 1000).toUTCString() + '; path=/;';

                var csrfToken = $('meta[name="csrf-token"]').attr('content');
               
                $.ajax({
                    url: '/set-cookie',
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    data: {
                        cookieConsent: true,
                    },
                    success: function(response) {
                        console.log(response);
                    }
                });
            }

            function hideOverlay() {
                var overlay = document.getElementById('overlay');
                overlay.style.display = 'none';
            }

             //Проверяем, было ли уже дано согласие (например, при обновлении страницы)
                // if (localStorage.getItem('cookieConsent') || document.cookie.includes('cookieConsent=true')) {
                //     hideCookieNotification();
                // } else {
                //     cookieNotification.style.display = 'flex';
                // }


            document.getElementById('accept-all-cookies').addEventListener('click', function() {
                // Обработка принятия всех куки
                // Здесь можно добавить логику для установки всех кук, например, через localStorage
                localStorage.setItem('cookieConsent', true);

                hideCookieNotification();
                hideOverlay();
            });

            document.getElementById('accept-all-cookies-modal').addEventListener('click', function() {
                // Обработка принятия всех куки
                // Здесь можно добавить логику для установки всех кук, например, через localStorage
                localStorage.setItem('cookieConsent', true);
                
                closeModal();
                hideCookieNotification();
                hideOverlay();
            });

            document.getElementById('accept-optional-cookies').addEventListener('click', function() {
                // Обработка принятия необязательных куки
                // Здесь можно добавить логику для установки необязательных кук
                localStorage.setItem('cookieConsent', true);

                hideCookieNotification();
                hideOverlay();
            });

            document.getElementById('customize-cookies').addEventListener('click', function() {
                // Обработка настройки кук
                // Открываем модальное окно или выполняем другие действия по вашему желанию
                // ...
                openModal();
            });

            document.getElementById('accept-selected-cookies').addEventListener('click', function() {

                    // Get the state of each button and save it
                var alwaysActiveButtonState = document.getElementById('alwaysActiveButton').classList.contains('active');
                var analyticsButtonState = document.querySelector('.btn-toggle[data-btn="2"]').classList.contains('active');
                var marketingButtonState = document.querySelector('.btn-toggle[data-btn="3"]').classList.contains('active');

                         // Устанавливаем куку согласия
                document.cookie = 'cookieAlwaysActiveButtonState=' + alwaysActiveButtonState + 'expires=' + new Date(new Date().getTime() + 365 * 24 * 60 * 60 * 1000).toUTCString() + '; path=/;';
                document.cookie = 'cookieAnalyticsButtonState=' + analyticsButtonState + '; expires=' + new Date(new Date().getTime() + 365 * 24 * 60 * 60 * 1000).toUTCString() + '; path=/;';
                document.cookie = 'cookieMarketingButtonState=' + marketingButtonState + '; expires=' + new Date(new Date().getTime() + 365 * 24 * 60 * 60 * 1000).toUTCString() + '; path=/;';


                    // Save the states to localStorage or perform any other necessary action
                localStorage.setItem('alwaysActiveButtonState', alwaysActiveButtonState);
                localStorage.setItem('analyticsButtonState', analyticsButtonState);
                localStorage.setItem('marketingButtonState', marketingButtonState);

                closeModal();
                hideCookieNotification();
                hideOverlay();
            });


        });
    </script>

<script>
    // Открытие модального окна
    function openModal() {
        var modal = document.getElementById('customize-modal');
        modal.style.display = 'block';
    }

    // Закрытие модального окна
    function closeModal() {
        var modal = document.getElementById('customize-modal');
        modal.style.display = 'none';
    }

    // Закрывать модальное окно при клике вне его
    window.onclick = function(event) {
        var modal = document.getElementById('customize-modal');
        if (event.target === modal) {
            modal.style.display = 'none';
        }
    }
</script>
                   <!-- for always on button.  Button technische cookie  no WORKING!!!! -->
<script>
    // document.addEventListener('DOMContentLoaded', function () {
    //     var alwaysActiveButton = document.getElementById('alwaysActiveButton');

    //     alwaysActiveButton.addEventListener('click', function (event) {
    //         // Предотвращаем изменение состояния кнопки при клике
    //         event.preventDefault();
    //     });
    // });
</script>