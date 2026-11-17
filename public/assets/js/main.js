function toast(m){
    var t = document.getElementById('toast');
    if(!t) return;
    t.textContent = m;
    t.style.display = 'block';
    clearTimeout(t._t);
    t._t = setTimeout(function(){ t.style.display = 'none'; }, 2600);
}

document.addEventListener('DOMContentLoaded', function(){
    const htmlEl = document.documentElement;

    // =========================================================================
    // 1. Theme Management (Footer & Mobile Drawer Switcher)
    // =========================================================================
    function applyTheme(theme) {
        htmlEl.setAttribute('data-theme', theme);
        localStorage.setItem('theme', theme);

        const themeText = document.getElementById('themeToggleText');
        const themeIcon = document.getElementById('themeBtnIcon');

        if(themeText) {
            themeText.textContent = theme === 'dark' ? 'Mode Gelap' : 'Mode Terang';
        }
        if(themeIcon) {
            themeIcon.textContent = theme === 'dark' ? '🌙' : '☀️';
        }
    }

    const savedTheme = localStorage.getItem('theme') || 'light';
    applyTheme(savedTheme);

    function toggleTheme() {
        const currentTheme = htmlEl.getAttribute('data-theme') || 'light';
        const nextTheme = currentTheme === 'dark' ? 'light' : 'dark';
        applyTheme(nextTheme);
    }

    const footerThemeBtn = document.getElementById('footerThemeToggle');
    if(footerThemeBtn){
        footerThemeBtn.addEventListener('click', toggleTheme);
    }

    const mobileThemeBtn = document.getElementById('mobileThemeToggle');
    if(mobileThemeBtn){
        mobileThemeBtn.addEventListener('click', function(){
            toggleTheme();
            toast('Tema berhasil diubah');
        });
    }

    // =========================================================================
    // 2. Realistic Dynamic Prayer Time System (Semarang / WIB)
    // =========================================================================
    const FIVE_PRAYERS = [
        { name: 'Subuh', time: '04:15', minutes: 255 },
        { name: 'Dzuhur', time: '11:45', minutes: 705 },
        { name: 'Ashar', time: '15:05', minutes: 905 },
        { name: 'Maghrib', time: '17:55', minutes: 1075 },
        { name: 'Isya', time: '19:05', minutes: 1145 }
    ];

    function calculateNextPrayer() {
        const now = new Date();
        const nowMinutes = now.getHours() * 60 + now.getMinutes();

        let next = FIVE_PRAYERS[0]; // default Subuh (esok hari)
        for (let i = 0; i < FIVE_PRAYERS.length; i++) {
            if (nowMinutes <= FIVE_PRAYERS[i].minutes) {
                next = FIVE_PRAYERS[i];
                break;
            }
        }
        return next;
    }

    function refreshPrayerUI() {
        const next = calculateNextPrayer();
        const prayerNameEl = document.getElementById('prayerName');
        const prayerTimeEl = document.getElementById('prayerTime');

        if (prayerNameEl) prayerNameEl.textContent = next.name;
        if (prayerTimeEl) prayerTimeEl.textContent = next.time;

        // Highlight next prayer in popover list
        document.querySelectorAll('.prayer-item').forEach(function(item){
            if (item.getAttribute('data-name') === next.name) {
                item.classList.add('is-next');
            } else {
                item.classList.remove('is-next');
            }
        });
    }

    refreshPrayerUI();
    // Update automatically every 60 seconds
    setInterval(refreshPrayerUI, 60000);

    // Prayer Popover Toggle
    const prayerWrap = document.querySelector('.prayer-widget-wrap');
    const prayerBtn = document.getElementById('pr');

    if(prayerBtn && prayerWrap){
        prayerBtn.addEventListener('click', function(e){
            e.stopPropagation();
            prayerWrap.classList.toggle('is-open');
        });
    }

    // =========================================================================
    // 3. Mobile Navigation Drawer Toggle
    // =========================================================================
    const burgerBtn = document.getElementById('bg');
    const mobileDrawer = document.getElementById('mobileDrawer');
    const closeDrawerBtn = document.getElementById('closeDrawer');

    if(burgerBtn && mobileDrawer){
        burgerBtn.addEventListener('click', function(e){
            e.stopPropagation();
            mobileDrawer.classList.toggle('active');
        });

        if(closeDrawerBtn){
            closeDrawerBtn.addEventListener('click', function(){
                mobileDrawer.classList.remove('active');
            });
        }

        // Close when clicking outside content (on backdrop)
        mobileDrawer.addEventListener('click', function(e){
            if(e.target === mobileDrawer){
                mobileDrawer.classList.remove('active');
            }
        });
    }

    // =========================================================================
    // 4. Desktop NavigationMenu Trigger Click Toggle
    // =========================================================================
    const triggers = document.querySelectorAll('.nav-trigger');
    triggers.forEach(function(trigger){
        trigger.addEventListener('click', function(e){
            e.preventDefault();
            e.stopPropagation();
            const parentItem = trigger.closest('.nav-menu-item');
            const isOpen = parentItem.classList.contains('is-open');

            // Close all nav popovers
            document.querySelectorAll('.nav-menu-item').forEach(function(item){
                item.classList.remove('is-open');
            });
            if(prayerWrap) prayerWrap.classList.remove('is-open');

            // Toggle current item
            if(!isOpen){
                parentItem.classList.add('is-open');
            }
        });
    });

    // Close any open popovers when clicking outside
    document.addEventListener('click', function(e){
        if(!e.target.closest('.nav-menu-item')){
            document.querySelectorAll('.nav-menu-item').forEach(function(item){
                item.classList.remove('is-open');
            });
        }
        if(!e.target.closest('.prayer-widget-wrap')){
            if(prayerWrap) prayerWrap.classList.remove('is-open');
        }
    });

    // Close with Escape key
    document.addEventListener('keydown', function(e){
        if(e.key === 'Escape'){
            if(mobileDrawer) mobileDrawer.classList.remove('active');
            if(prayerWrap) prayerWrap.classList.remove('is-open');
            document.querySelectorAll('.nav-menu-item').forEach(function(item){
                item.classList.remove('is-open');
            });
        }
    });
});
