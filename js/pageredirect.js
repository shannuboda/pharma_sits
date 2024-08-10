
document.addEventListener("DOMContentLoaded", function() {
  

function activateTabFromHash() {
 // Get the hash from the URL
 const hash = window.location.hash;

 // Get all tab content elements
 const tabs = document.getElementsByClassName("tab-pane");

 // Get all nav links
 const navLinks = document.querySelectorAll('.nav-link');

 // Deactivate all tabs and nav links
 for (let i = 0; i < tabs.length; i++) {
     tabs[i].classList.remove("active");
 }

 navLinks.forEach(link => {
     link.classList.remove('active');
 });

 // If there's a hash and it matches an element ID, activate that tab and corresponding nav link
 if (hash) {
     const activeTab = document.querySelector(hash);
     const activeNavLink = document.querySelector(`a[href="${hash}"]`);

     if (activeTab) {
         activeTab.classList.add("active");
     }

     if (activeNavLink) {
         activeNavLink.classList.add('active');
     }
 }
}

// Activate the tab on page load
activateTabFromHash();

// Activate the tab when the hash changes (if using anchor links to switch tabs)
window.addEventListener("hashchange", activateTabFromHash);

});

