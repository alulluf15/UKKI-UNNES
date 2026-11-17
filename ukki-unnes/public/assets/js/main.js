function toast(m){var t=document.getElementById('toast');if(!t)return;t.textContent=m;t.style.display='block';clearTimeout(t._t);t._t=setTimeout(function(){t.style.display='none'},2600)}
document.addEventListener('DOMContentLoaded', function(){
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
        }
    }
});
