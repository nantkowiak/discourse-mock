
$(document).ready(function() {
    var html = `<li><div id="weltensprung">
        <div id="weltensprung-button">
          <div id="weltensprung-button-inside">
            <svg aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
              <path fill="currentColor"
                d="M192 176c0 26.5-21.5 48-48 48H48c-26.51 0-48-21.5-48-48V80c0-26.51 21.49-48 48-48h96c26.5 0 48 21.49 48 48v96Zm0 256c0 26.5-21.5 48-48 48H48c-26.51 0-48-21.5-48-48v-96c0-26.5 21.49-48 48-48h96c26.5 0 48 21.5 48 48v96Zm64-352c0-26.51 21.5-48 48-48h96c26.5 0 48 21.49 48 48v96c0 26.5-21.5 48-48 48h-96c-26.5 0-48-21.5-48-48V80Zm192 352c0 26.5-21.5 48-48 48h-96c-26.5 0-48-21.5-48-48v-96c0-26.5 21.5-48 48-48h96c26.5 0 48 21.5 48 48v96Z">
              </path>
            </svg>
          </div>
        </div>
        <div id="weltensprung-menu">
          <a href="https://www.maklerinfo.biz/maklerportal" target="_blank" class="weltensprung-item">
            <img src="https://integrations.ameiseapis.com/icons/8a9198d6-174c-423e-885a-e76a717f942c.svg" alt="Ameise Logo">
            <span>Ameise</span>
          </a>
          <a href="https://investifant.depotplattform.de" target="_blank" class="weltensprung-item">
            <img src="https://integrations.ameiseapis.com/icons/70d308d6-2997-4e18-8029-2fa3ed2e6a66.svg" alt="Investifant Logo">
            <span>Investifant</span>
          </a>
          <a href="https://portal.bisure.de" target="_blank" class="weltensprung-item">
            <img src="https://integrations.ameiseapis.com/icons/6ca8e031-0757-49c8-8e9c-689810afc9f9.svg" alt="Panda Logo">
            <span>Panda</span>
          </a>
          <a href="https://support.blaudirekt.de" target="_blank" class="weltensprung-item">
            <img src="https://integrations.ameiseapis.com/icons/dcbcb422-9649-4a12-a52c-3ed19a6c346b.svg" alt="Support Logo">
            <span>Support</span>
          </a>
          <a href="https://community.blaudirekt.de" target="_blank" class="weltensprung-item">
            <img src="https://integrations.ameiseapis.com/icons/f53cc984-cc0f-47c2-9c3e-5f745c70c4ec.svg" alt="Community Logo">
            <span>Community</span>
          </a>
          <a href="https://marketplace.blaudirekt.de" target="_blank" class="weltensprung-item">
            <img src="https://integrations.ameiseapis.com/icons/2158a98c-fd97-446a-9815-27d4ce7c22ea.svg" alt="Marketplace Logo">
            <span>Marketplace</span>
          </a>
          <a href="https://octi.blaudirekt.de" target="_blank" class="weltensprung-item">
            <img src="https://integrations.ameiseapis.com/icons/e4634285-17d4-4f04-b026-5195700f7b28.svg" alt="Octi Logo">
            <span>Octi</span>
          </a>
          <a href="https://academy.blaudirekt.de/" target="_blank" class="weltensprung-item">
            <img src="https://integrations.ameiseapis.com/icons/b1c22954-55ae-4e11-8634-b67c50fcf428.svg" alt="Academy Logo">
            <span>Academy</span>
          </a>
          <a href="https://app.deeplico.de/oauth/ameise/login" target="_blank" class="weltensprung-item">
            <img src="https://integrations.ameiseapis.com/icons/5143596d-bd98-424b-af86-d40b7b60a793.svg" alt="deeplico Logo">
            <span>deeplico</span>
          </a>
          <a href="https://analytics.blaudirekt.de" target="_blank" class="weltensprung-item">
            <img src="https://integrations.ameiseapis.com/icons/f5480982-4398-457b-8e86-5029821b0196.svg" alt="Analytics Logo">
            <span>Analytics</span>
          </a>
        </div></li>`;
    $('.icons.d-header-icons').prepend(html);
    
    var $weltensprungMenu = $('#weltensprung-menu').on('click.weltensprung', function(e){ e.stopPropagation(); }),
    menuOpenClass = 'weltensprung-menu--open',
    showMenu = function() {
        $weltensprungMenu.addClass(menuOpenClass);
        $('body').on('click.weltensprung', hideMenu);
    },
    hideMenu = function() {
        $weltensprungMenu.removeClass(menuOpenClass);
        $('body').off('click.weltensprung');
    };
    $('#weltensprung-button-inside').on('click.weltensprung', function(e) {
        e.stopPropagation();
        if ($weltensprungMenu.hasClass(menuOpenClass)) {
            hideMenu();
        } else {
            showMenu();
        }
    });
});

