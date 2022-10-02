(() => {

    /*--------------------------------------------
    *        disable paste in email field
    *---------------------------------------------*/
    window.onload = () => {
        email.onpaste = (event) => event.preventDefault();
    }

    /*--------------------------------------------
    *         Toggle log in and sign up
    *---------------------------------------------*/
    // ----- DOM elements
    // get links
    const registerLink = document.getElementById('registerLink');
    const loginLink = document.getElementById('loginLink');

    // get pages (containers)
    const registerPage = document.getElementById('register');
    const loginPage = document.getElementById('login');

    // ----- display register page
    registerLink.addEventListener('click', (e) => {

        // prevent default behavior (prevents submission and page refresh)
        e.preventDefault();

        // toggle 2 pages
        registerPage.style.display = 'block';
        loginPage.style.display = 'none';

    });

    // ----- display login page
    loginLink.addEventListener('click', (e) => {

        e.preventDefault();
        loginPage.style.display = 'block';
        registerPage.style.display = 'none';

    });

})();