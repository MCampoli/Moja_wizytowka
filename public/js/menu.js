document.addEventListener('DOMContentLoaded', function() {
    const dropdowns = document.querySelectorAll('.navbar .dropdown');

    dropdowns.forEach(function(dropdown) {
        const dropdownToggle = dropdown.querySelector('.dropdown-toggle');
        const dropdownMenu = dropdown.querySelector('.dropdown-menu');

        dropdownToggle.addEventListener('click', function(event) {
            event.preventDefault();

            if (dropdownMenu.style.display === 'block') {
                dropdownMenu.style.display = 'none';
            } else {
                dropdownMenu.style.display = 'block';
            }
        });
    });

    document.addEventListener('click', function(event) {
        dropdowns.forEach(function(dropdown) {
            const dropdownMenu = dropdown.querySelector('.dropdown-menu');
            if (!dropdown.contains(event.target)) {
                dropdownMenu.style.display = 'none';
            }
        });
    });
});
