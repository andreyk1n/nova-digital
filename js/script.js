function initBurgerMenu() {
    document.addEventListener("DOMContentLoaded", () => {
        let t = document.querySelector(".header__burger"),
            c = document.querySelector(".header__nav"),
            s = document.body,
            n = () => {
                t.classList.remove("active"),
                c.classList.remove("active"),
                s.classList.remove("no-scroll")
            };

        t.addEventListener("click", e => {
            e.stopPropagation();
            t.classList.toggle("active");
            c.classList.toggle("active");

            if (t.classList.contains("active")) {
                s.classList.add("no-scroll");
            } else {
                s.classList.remove("no-scroll");
            }
        });

        document.addEventListener("click", e => {
            if (!c.contains(e.target) && !t.contains(e.target)) n();
        });

        c.querySelectorAll("a").forEach(e => {
            e.addEventListener("click", n);
        });
    });
}

// просто виклик
initBurgerMenu();

const themeToggle = document.querySelector('.theme-toggle');
const html = document.documentElement;
const updateThemeIcon = (theme) => {
    themeToggle.textContent = theme === 'dark' ? '☀' : '☾';
};
const savedTheme = localStorage.getItem('theme');
if (savedTheme) {
    html.setAttribute('data-theme', savedTheme);
    updateThemeIcon(savedTheme);
} else {
    const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
    const systemTheme = prefersDark ? 'dark' : 'light';
    html.setAttribute('data-theme', systemTheme);
    updateThemeIcon(systemTheme);
}

themeToggle.addEventListener('click', () => {
    const currentTheme = html.getAttribute('data-theme');
    const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
    html.setAttribute('data-theme', newTheme);
    localStorage.setItem('theme', newTheme);
    updateThemeIcon(newTheme);
});

const revealElements = document.querySelectorAll('.reveal');
const observer = new IntersectionObserver(
    entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('reveal--active');
            }
        });
    },
    {
        threshold: 0.15,
    }
);

revealElements.forEach(element => {
    observer.observe(element);
});

const body = document.body;

function toggleScrollLock() {
    if (window.location.hash === '#contacts') {
        body.classList.add('no-scroll');
    } else {
        body.classList.remove('no-scroll');
    }
}

window.addEventListener('hashchange', toggleScrollLock);
window.addEventListener('load', toggleScrollLock);

window.addEventListener('load', () => {
    setTimeout(() => {
        document.querySelector('.wrapper').classList.add('loaded');
    }, 2500);
});

