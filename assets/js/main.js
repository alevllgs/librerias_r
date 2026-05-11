/* =========================================
   TechGuides — main.js
   ========================================= */

// Theme management
function toggleTheme() {
    var isLight = document.documentElement.classList.toggle('light-mode');
    localStorage.setItem('theme', isLight ? 'light' : 'dark');
    updateThemeButtons();
}

function updateThemeButtons() {
    var isLight = document.documentElement.classList.contains('light-mode');
    document.querySelectorAll('.theme-btn').forEach(function(btn) {
        btn.textContent = isLight ? '🌙' : '☀️';
    });
}

function initTheme() {
    var theme = localStorage.getItem('theme') || 'dark';
    if (theme === 'light') {
        document.documentElement.classList.add('light-mode');
    }
    updateThemeButtons();
}

// Sidebar navigation
function setActiveNav() {
    var path = window.location.pathname;
    document.querySelectorAll('.nav-item').forEach(function(link) {
        var href = link.getAttribute('href');
        if (href === path || (href && path.endsWith(href)) || (path.endsWith('/') && href && href.endsWith('index.php'))) {
            link.classList.add('active');
        } else {
            link.classList.remove('active');
        }
    });
}

// Mobile menu toggle
function initMobileMenu() {
    var toggle = document.getElementById('menu-toggle');
    var sidebar = document.querySelector('.sidebar');
    
    if (toggle && sidebar) {
        toggle.addEventListener('click', function() {
            sidebar.classList.toggle('open');
        });

        // Close sidebar when clicking outside
        document.addEventListener('click', function(e) {
            if (sidebar.classList.contains('open') && 
                !sidebar.contains(e.target) && 
                !toggle.contains(e.target)) {
                sidebar.classList.remove('open');
            }
        });
    }
}

// Copy buttons for code blocks
function initCopyButtons() {
    document.querySelectorAll('pre').forEach(function(block) {
        // Skip if already has a copy button
        if (block.querySelector('.copy-btn')) return;
        
        var btn = document.createElement('button');
        btn.textContent = 'Copiar';
        btn.className = 'copy-btn';
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
                    btn.style.color = '';
                }, 2000);
            });
        });
    });
}

// PDF Favorites system (for R docs)
function initFavorites() {
    var favButtons = document.querySelectorAll('.fav-btn');
    var favoritesToggle = document.getElementById('favoritesToggle');
    var favFilterBtn = document.querySelector('.fav-filter-btn');
    var searchInput = document.getElementById('searchInput');
    var cards = document.querySelectorAll('.pdf-card');
    var counter = document.getElementById('counter');
    var alphaButtons = document.querySelectorAll('.alpha-btn');
    var grid = document.getElementById('pdf-grid');
    
    if (!favButtons.length) return;
    
    var totalCards = cards.length;
    var activeLetter = 'all';
    var showFavoritesOnly = false;
    var favorites = JSON.parse(localStorage.getItem('techguides-r-favorites')) || [];
    
    function initFavoritesState() {
        favButtons.forEach(function(btn) {
            var file = btn.dataset.file;
            if (favorites.includes(file)) {
                btn.classList.add('active');
                btn.innerHTML = '<i class="fas fa-star"></i>';
                btn.closest('.pdf-card').classList.add('is-favorite');
            }
        });
        updateFavoritesCount();
    }
    
    function updateFavoritesCount() {
        var count = favorites.length;
        var favCountEl = document.querySelector('.fav-count');
        if (favCountEl) {
            favCountEl.textContent = count;
        }
    }
    
    // Toggle favorite
    favButtons.forEach(function(btn) {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            var file = this.dataset.file;
            var card = this.closest('.pdf-card');
            
            if (favorites.includes(file)) {
                favorites = favorites.filter(function(f) { return f !== file; });
                this.classList.remove('active');
                this.innerHTML = '<i class="far fa-star"></i>';
                card.classList.remove('is-favorite');
            } else {
                favorites.push(file);
                this.classList.add('active');
                this.innerHTML = '<i class="fas fa-star"></i>';
                card.classList.add('is-favorite');
            }
            
            localStorage.setItem('techguides-r-favorites', JSON.stringify(favorites));
            updateFavoritesCount();
            
            if (showFavoritesOnly) {
                var query = searchInput ? searchInput.value.toLowerCase().trim() : '';
                filterCards(query, activeLetter);
            }
        });
    });
    
    // Favorites toggle button
    if (favoritesToggle) {
        favoritesToggle.addEventListener('click', function() {
            showFavoritesOnly = !showFavoritesOnly;
            this.classList.toggle('active');
            
            if (showFavoritesOnly) {
                this.innerHTML = '<i class="fas fa-heart"></i> <span>Todos</span>';
            } else {
                this.innerHTML = '<i class="far fa-heart"></i> <span>Favoritos</span>';
            }
            
            var query = searchInput ? searchInput.value.toLowerCase().trim() : '';
            filterCards(query, activeLetter);
        });
    }
    
    // Favorites filter button in nav
    if (favFilterBtn) {
        favFilterBtn.addEventListener('click', function() {
            alphaButtons.forEach(function(b) { b.classList.remove('active'); });
            this.classList.add('active');
            
            activeLetter = 'favorites';
            showFavoritesOnly = true;
            if (favoritesToggle) {
                favoritesToggle.classList.add('active');
                favoritesToggle.innerHTML = '<i class="fas fa-heart"></i> <span>Todos</span>';
            }
            
            var query = searchInput ? searchInput.value.toLowerCase().trim() : '';
            filterCards(query, activeLetter);
        });
    }
    
    // Search functionality
    if (searchInput) {
        searchInput.addEventListener('input', function() {
            var query = this.value.toLowerCase().trim();
            filterCards(query, activeLetter);
        });
    }
    
    // Alphabet filter
    alphaButtons.forEach(function(btn) {
        if (btn.classList.contains('fav-filter-btn')) return;
        
        btn.addEventListener('click', function() {
            var letter = this.dataset.letter;
            
            alphaButtons.forEach(function(b) { b.classList.remove('active'); });
            this.classList.add('active');
            
            activeLetter = letter;
            showFavoritesOnly = false;
            if (favoritesToggle) {
                favoritesToggle.classList.remove('active');
                favoritesToggle.innerHTML = '<i class="far fa-heart"></i> <span>Favoritos</span>';
            }
            
            var query = searchInput ? searchInput.value.toLowerCase().trim() : '';
            filterCards(query, letter);
        });
    });
    
    function filterCards(query, letter) {
        var visibleCount = 0;
        
        cards.forEach(function(card) {
            var title = card.dataset.title ? card.dataset.title.toLowerCase() : '';
            var firstLetter = title.charAt(0);
            var file = card.dataset.file;
            var isFavorite = favorites.includes(file);
            
            var matchesSearch = !query || title.includes(query);
            var matchesLetter = letter === 'all' || firstLetter === letter;
            var matchesFavorites = letter === 'favorites' ? isFavorite : (!showFavoritesOnly || isFavorite);
            
            if (matchesSearch && matchesLetter && matchesFavorites) {
                card.classList.remove('hidden');
                card.style.animationDelay = (visibleCount * 0.02) + 's';
                visibleCount++;
            } else {
                card.classList.add('hidden');
            }
        });
        
        updateCounter(visibleCount);
        showEmptyState(visibleCount === 0);
    }
    
    function updateCounter(count) {
        if (!counter) return;
        var favCount = favorites.length;
        
        if (showFavoritesOnly || activeLetter === 'favorites') {
            counter.innerHTML = 'Mostrando <strong>' + count + '</strong> favorito' + (count !== 1 ? 's' : '') + ' de <strong>' + totalCards + '</strong> instructivos';
        } else if (count === totalCards) {
            counter.innerHTML = 'Mostrando los <strong>' + totalCards + '</strong> instructivos disponibles — <span class="fav-count">' + favCount + '</span> favoritos';
        } else {
            counter.innerHTML = 'Mostrando <strong>' + count + '</strong> de <strong>' + totalCards + '</strong> instructivos — <span class="fav-count">' + favCount + '</span> favoritos';
        }
    }
    
    function showEmptyState(show) {
        if (!grid) return;
        var emptyState = grid.querySelector('.empty-state');
        
        if (show) {
            if (!emptyState) {
                emptyState = document.createElement('div');
                emptyState.className = 'empty-state';
                
                if (showFavoritesOnly || activeLetter === 'favorites') {
                    emptyState.innerHTML = '<i class="far fa-star"></i><h3>No tienes favoritos</h3><p>Haz click en la estrella de cualquier tarjeta para añadirla a favoritos</p>';
                } else {
                    emptyState.innerHTML = '<i class="fas fa-search"></i><h3>No se encontraron resultados</h3><p>Intenta con otro término de búsqueda o selecciona otra letra</p>';
                }
                
                grid.appendChild(emptyState);
            }
        } else {
            if (emptyState) {
                emptyState.remove();
            }
        }
    }
    
    // Initialize
    initFavoritesState();
    updateCounter(totalCards);
    
    // Keyboard shortcuts
    document.addEventListener('keydown', function(e) {
        if (e.key === '/' && document.activeElement !== searchInput) {
            e.preventDefault();
            if (searchInput) searchInput.focus();
        }
        if (e.key === 'Escape' && searchInput) {
            searchInput.value = '';
            searchInput.blur();
            showFavoritesOnly = false;
            if (favoritesToggle) {
                favoritesToggle.classList.remove('active');
                favoritesToggle.innerHTML = '<i class="far fa-heart"></i> <span>Favoritos</span>';
            }
            filterCards('', 'all');
            alphaButtons.forEach(function(b) { b.classList.remove('active'); });
            var allBtn = document.querySelector('[data-letter="all"]');
            if (allBtn) allBtn.classList.add('active');
            activeLetter = 'all';
        }
    });
}

// Initialize everything on DOM ready
document.addEventListener('DOMContentLoaded', function() {
    initTheme();
    setActiveNav();
    initMobileMenu();
    initCopyButtons();
    initFavorites();
});
