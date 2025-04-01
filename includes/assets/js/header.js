/*=============== SHOW MENU ===============*/
const showMenu = (toggleId, navId) => {
    const toggle = document.getElementById(toggleId),
          nav = document.getElementById(navId)
    
    toggle.addEventListener('click', () => {
        // Add show-menu class to nav menu
        nav.classList.toggle('show-menu')
        
        // Add show-icon to show and hide the menu icon
        toggle.classList.toggle('show-icon')
    })
}

showMenu('nav-toggle', 'nav-menu')

/*=============== SAFARI IOS FIX FOR DROPDOWNS ===============*/
document.addEventListener('DOMContentLoaded', function() {
    // Check if the device is iOS Safari
    const isIOS = /iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream;
    
    if (isIOS) {
        const dropdownItems = document.querySelectorAll('.dropdown__item');
        const dropdownSubitems = document.querySelectorAll('.dropdown__subitem');
        
        // Handle main dropdown items for iOS
        dropdownItems.forEach(item => {
            const dropdownLink = item.querySelector('.nav__link');
            
            if (dropdownLink) {
                dropdownLink.addEventListener('touchstart', function(e) {
                    // Prevent default behavior only if this element has a dropdown
                    if (item.querySelector('.dropdown__menu')) {
                        e.preventDefault();
                        e.stopPropagation();
                        
                        // Close other dropdowns
                        dropdownItems.forEach(otherItem => {
                            if (otherItem !== item && otherItem.classList.contains('dropdown-active')) {
                                otherItem.classList.remove('dropdown-active');
                            }
                        });
                        
                        // Toggle active class
                        item.classList.toggle('dropdown-active');
                    }
                }, { passive: false });
            }
        });
        
        // Handle submenus for iOS
        dropdownSubitems.forEach(subitem => {
            const submenuLink = subitem.querySelector('.dropdown__link');
            
            if (submenuLink) {
                submenuLink.addEventListener('touchstart', function(e) {
                    // Only prevent default if there's a submenu
                    if (subitem.querySelector('.dropdown__submenu')) {
                        e.preventDefault();
                        e.stopPropagation();
                        
                        // Close other open subdropdowns
                        dropdownSubitems.forEach(otherSubitem => {
                            if (otherSubitem !== subitem && otherSubitem.classList.contains('dropdown-subactive')) {
                                otherSubitem.classList.remove('dropdown-subactive');
                            }
                        });
                        
                        // Toggle submenu
                        subitem.classList.toggle('dropdown-subactive');
                    }
                }, { passive: false });
            }
        });
        
        // Close dropdowns when touching outside
        document.addEventListener('touchstart', function(e) {
            // If click is outside any dropdown
            if (!e.target.closest('.dropdown__item')) {
                dropdownItems.forEach(item => {
                    item.classList.remove('dropdown-active');
                });
            }
            
            // If click is outside any subdropdown
            if (!e.target.closest('.dropdown__subitem')) {
                dropdownSubitems.forEach(subitem => {
                    subitem.classList.remove('dropdown-subactive');
                });
            }
        }, { passive: true });
    }
});