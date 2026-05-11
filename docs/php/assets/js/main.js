/* =========================================
   XAMPP Guide — main.js
   ========================================= */

function setActiveNav() {
    var page = window.location.pathname.split('/').pop();
    document.querySelectorAll('.nav-item').forEach(function(link) {
        var href = link.getAttribute('href');
        if (href === page || (href && href.endsWith('/' + page)) || (page === '' && href && href.endsWith('index.php'))) {
            link.classList.add('active');
        } else {
            link.classList.remove('active');
        }
    });
}

function initCopyButtons() {
    document.querySelectorAll('pre').forEach(function(block) {
        var btn = document.createElement('button');
        btn.textContent = 'Copiar';
        btn.className = 'copy-btn';
        btn.style.cssText = 'position:absolute;top:8px;right:8px;background:var(--copy-btn-bg);border:1px solid var(--copy-btn-border);color:var(--copy-btn-color);font-size:11px;padding:2px 8px;border-radius:4px;cursor:pointer;font-family:inherit;transition:all 0.15s';
        block.style.position = 'relative';
        block.appendChild(btn);
        btn.addEventListener('click', function() {
            var clone = block.cloneNode(true);
            var cb = clone.querySelector('.copy-btn');
            if (cb) cb.remove();
            var text = clone.innerText.trim();
            navigator.clipboard.writeText(text).then(function() {
                btn.textContent = 'Copiado ✓';
                btn.style.color = 'var(--copy-ok)';
                setTimeout(function() {
                    btn.textContent = 'Copiar';
                    btn.style.color = 'var(--copy-btn-color)';
                }, 2000);
            });
        });
    });
}

function toggleTheme() {
    var isLight = document.documentElement.classList.toggle('light-mode');
    localStorage.setItem('theme', isLight ? 'light' : 'dark');
    var btn = document.getElementById('theme-toggle');
    if (btn) btn.textContent = isLight ? '🌙' : '☀️';
}

function initPreferences() {
    var theme = localStorage.getItem('theme') || 'dark';
    if (theme === 'light') document.documentElement.classList.add('light-mode');
    var btn = document.getElementById('theme-toggle');
    if (btn) btn.textContent = theme === 'light' ? '🌙' : '☀️';
}

document.addEventListener('DOMContentLoaded', function() {
    setActiveNav();
    initCopyButtons();
    initPreferences();
});