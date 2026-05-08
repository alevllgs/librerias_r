document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchInput');
    const cards = document.querySelectorAll('.card');
    const counter = document.getElementById('counter');
    const alphaButtons = document.querySelectorAll('.alpha-btn');
    const grid = document.getElementById('grid');
    const favButtons = document.querySelectorAll('.fav-btn');
    const favoritesToggle = document.getElementById('favoritesToggle');
    const totalCards = cards.length;

    let activeLetter = 'all';
    let showFavoritesOnly = false;

    // Load favorites from localStorage
    let favorites = JSON.parse(localStorage.getItem('r-pdfs-favorites')) || [];

    // Initialize favorites state
    function initFavorites() {
        favButtons.forEach(btn => {
            const file = btn.dataset.file;
            if (favorites.includes(file)) {
                btn.classList.add('active');
                btn.innerHTML = '<i class="fas fa-star"></i>';
                btn.closest('.card').classList.add('is-favorite');
            }
        });
        updateFavoritesCount();
    }

    // Toggle favorite
    favButtons.forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            const file = this.dataset.file;
            const card = this.closest('.card');

            if (favorites.includes(file)) {
                favorites = favorites.filter(f => f !== file);
                this.classList.remove('active');
                this.innerHTML = '<i class="far fa-star"></i>';
                card.classList.remove('is-favorite');
            } else {
                favorites.push(file);
                this.classList.add('active');
                this.innerHTML = '<i class="fas fa-star"></i>';
                card.classList.add('is-favorite');
            }

            localStorage.setItem('r-pdfs-favorites', JSON.stringify(favorites));
            updateFavoritesCount();

            // Re-filter if showing favorites only
            if (showFavoritesOnly) {
                const query = searchInput.value.toLowerCase().trim();
                filterCards(query, activeLetter);
            }
        });
    });

    // Favorites toggle button in header
    favoritesToggle.addEventListener('click', function() {
        showFavoritesOnly = !showFavoritesOnly;
        this.classList.toggle('active');

        if (showFavoritesOnly) {
            this.innerHTML = '<i class="fas fa-heart"></i> <span>Todos</span>';
        } else {
            this.innerHTML = '<i class="far fa-heart"></i> <span>Favoritos</span>';
        }

        const query = searchInput.value.toLowerCase().trim();
        filterCards(query, activeLetter);
    });

    // Favorites filter button in nav
    const favFilterBtn = document.querySelector('.fav-filter-btn');
    if (favFilterBtn) {
        favFilterBtn.addEventListener('click', function() {
            const letter = this.dataset.letter;

            // Update active button
            alphaButtons.forEach(b => b.classList.remove('active'));
            this.classList.add('active');

            activeLetter = letter;
            showFavoritesOnly = true;
            favoritesToggle.classList.add('active');
            favoritesToggle.innerHTML = '<i class="fas fa-heart"></i> <span>Todos</span>';

            const query = searchInput.value.toLowerCase().trim();
            filterCards(query, letter);
        });
    }

    function updateFavoritesCount() {
        const count = favorites.length;
        const favCountEl = document.querySelector('.fav-count');
        if (favCountEl) {
            favCountEl.textContent = count;
        }
    }

    // Search functionality
    searchInput.addEventListener('input', function() {
        const query = this.value.toLowerCase().trim();
        filterCards(query, activeLetter);
    });

    // Alphabet filter
    alphaButtons.forEach(btn => {
        if (btn.classList.contains('fav-filter-btn')) return;

        btn.addEventListener('click', function() {
            const letter = this.dataset.letter;

            // Update active button
            alphaButtons.forEach(b => b.classList.remove('active'));
            this.classList.add('active');

            activeLetter = letter;
            showFavoritesOnly = false;
            favoritesToggle.classList.remove('active');
            favoritesToggle.innerHTML = '<i class="far fa-heart"></i> <span>Favoritos</span>';

            const query = searchInput.value.toLowerCase().trim();
            filterCards(query, letter);
        });
    });

    function filterCards(query, letter) {
        let visibleCount = 0;

        cards.forEach(card => {
            const title = card.dataset.title.toLowerCase();
            const firstLetter = title.charAt(0);
            const file = card.dataset.file;
            const isFavorite = favorites.includes(file);

            const matchesSearch = !query || title.includes(query);
            const matchesLetter = letter === 'all' || firstLetter === letter;
            const matchesFavorites = !showFavoritesOnly || isFavorite;

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
        const favCount = favorites.length;

        if (showFavoritesOnly) {
            counter.innerHTML = `Mostrando <strong>${count}</strong> favorito${count !== 1 ? 's' : ''} de <strong>${totalCards}</strong> instructivos`;
        } else if (count === totalCards) {
            counter.innerHTML = `Mostrando los <strong>${totalCards}</strong> instructivos disponibles &mdash; <span class="fav-count">${favCount}</span> favoritos`;
        } else {
            counter.innerHTML = `Mostrando <strong>${count}</strong> de <strong>${totalCards}</strong> instructivos &mdash; <span class="fav-count">${favCount}</span> favoritos`;
        }
    }

    function showEmptyState(show) {
        let emptyState = document.querySelector('.empty-state');

        if (show) {
            if (!emptyState) {
                emptyState = document.createElement('div');
                emptyState.className = 'empty-state';

                if (showFavoritesOnly) {
                    emptyState.innerHTML = `
                        <i class="far fa-star"></i>
                        <h3>No tienes favoritos</h3>
                        <p>Haz click en la estrella de cualquier tarjeta para añadirla a favoritos</p>
                    `;
                } else {
                    emptyState.innerHTML = `
                        <i class="fas fa-search"></i>
                        <h3>No se encontraron resultados</h3>
                        <p>Intenta con otro término de búsqueda o selecciona otra letra</p>
                    `;
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
    initFavorites();
    updateCounter(totalCards);

    // Keyboard shortcuts
    document.addEventListener('keydown', function(e) {
        if (e.key === '/' && document.activeElement !== searchInput) {
            e.preventDefault();
            searchInput.focus();
        }
        if (e.key === 'Escape') {
            searchInput.value = '';
            searchInput.blur();
            showFavoritesOnly = false;
            favoritesToggle.classList.remove('active');
            favoritesToggle.innerHTML = '<i class="far fa-heart"></i> <span>Favoritos</span>';
            filterCards('', 'all');
            alphaButtons.forEach(b => b.classList.remove('active'));
            document.querySelector('[data-letter="all"]').classList.add('active');
            activeLetter = 'all';
        }
    });
});
