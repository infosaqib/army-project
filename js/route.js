

document.addEventListener("DOMContentLoaded", () => {
    const navigateTo = url => {
        history.pushState(null, null, url);
        router();
    };

    const router = async () => {
        const routes = [
            { path: "/", view: "index.html" },
            { path: "/contact", view: "contact.html" },
            { path: "/about", view: "about.html" },
            { path: "/blog", view: "blog.html" },
        ];

        // Test each route for potential match
        const potentialMatches = routes.map(route => {
            return {
                route: route,
                isMatch: location.pathname === route.path
            };
        });

        let match = potentialMatches.find(potentialMatch => potentialMatch.isMatch);

        if (!match) {
            match = {
                route: routes[0],
                isMatch: true
            };
        }

        const html = await fetch(match.route.view).then(response => response.text());
        document.getElementById("content").innerHTML = html;
hideMenu();
    };

    window.addEventListener("popstate", router);

    document.body.addEventListener("click", e => {
        if (e.target.matches("[data-link]")) {
            e.preventDefault();
            navigateTo(e.target.href);
        }
    });

    router();
});
