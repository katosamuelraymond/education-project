(function() {
    "use strict";

    const select =(el, all=false)=>{
        el=el.trim()
        if(all){
          return[...document.querySelectorAll(el)]
        }else{
          return document.querySelector(el)
        }
      }

      const on =(type,el, listener, all=false)=>{
        el=el.trim()
        if(all){
          select(el,all).forEach(e=>e.addEventListener(type, listener))
        }else{
          select(el,all).addEventListener(type,listener)
        }
      }
    // Sidebar toggle functionality
    if (select('.toggle-sidebar-btn')) {
        on('click', '.toggle-sidebar-btn', function(e) {
            select('body').classList.toggle('toggle-sidebar');
        });
    }

    // Function to handle the active link behavior
    const links = document.querySelectorAll('.sidebar-nav .nav-link');
    const dashboardLink = document.getElementById('dashboard-link');

    // Keep the dashboard link always active
    // dashboardLink.classList.add('active');

    links.forEach(link => {
        link.addEventListener('click', function() {
            // Remove the active class from all links
            links.forEach(l => l.classList.remove('active'));

            // Add the active class to the clicked link
            link.classList.add('active');
        });
    });
})();
