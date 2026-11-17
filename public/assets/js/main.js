function toast(m){
    var t = document.getElementById('toast');
    if(!t) return;
    t.textContent = m;
    t.style.display = 'block';
    clearTimeout(t._t);
    t._t = setTimeout(function(){ t.style.display = 'none'; }, 2600);
}

document.addEventListener('DOMContentLoaded', function(){
    // 1. Theme Management (Light / Dark)
    const th = document.getElementById('th');
    const htmlEl = document.documentElement;
    const savedTheme = localStorage.getItem('theme') || 'light';
    htmlEl.setAttribute('data-theme', savedTheme);

    if(th){
        th.onclick = function(){
            const currentTheme = htmlEl.getAttribute('data-theme');
            const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
            htmlEl.setAttribute('data-theme', newTheme);
            localStorage.setItem('theme', newTheme);
        };
    }

    // 2. Mobile Navigation Drawer Toggle
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

    // 3. Desktop NavigationMenu Trigger Click Toggle (for touchscreens / clicks)
    const triggers = document.querySelectorAll('.nav-trigger');
    triggers.forEach(function(trigger){
        trigger.addEventListener('click', function(e){
            e.preventDefault();
            e.stopPropagation();
            const parentItem = trigger.closest('.nav-menu-item');
            const isOpen = parentItem.classList.contains('is-open');

            // Close all items
            document.querySelectorAll('.nav-menu-item').forEach(function(item){
                item.classList.remove('is-open');
            });

            // Toggle current item
            if(!isOpen){
                parentItem.classList.add('is-open');
            }
        });
    });

    // Close open menus when clicking anywhere outside
    document.addEventListener('click', function(e){
        if(!e.target.closest('.nav-menu-item')){
            document.querySelectorAll('.nav-menu-item').forEach(function(item){
                item.classList.remove('is-open');
            });
        }
    });

    // Close mobile drawer on Escape key
    document.addEventListener('keydown', function(e){
        if(e.key === 'Escape'){
            if(mobileDrawer) mobileDrawer.classList.remove('active');
            document.querySelectorAll('.nav-menu-item').forEach(function(item){
                item.classList.remove('is-open');
            });
        }
    });
});
