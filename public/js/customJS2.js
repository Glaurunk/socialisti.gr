// Custom function to highlight the current page in nav

window.onload = function() {

  var page_title = document.title;


  switch (page_title) {

  case "Socialisti.gr - Αρχική Σελίδα":

        var el = document.getElementById('list1');
        el.classList.add("active");
        break;

    case "Socialisti.gr - Επικοινωνία":

        var el = document.getElementById('list2');
        el.classList.add("active");
        break;

    case "Socialisti.gr - Αρχείο Κειμένων":

        var el = document.getElementById('list3');
        el.classList.add("active");
        break;

    default:
         var el = document.getElementsByClassName("nav-item");
         var i;
         for (i = 0; i < el.length; i++ ) {
           el[i].classList.remove("active");
         }
    }
}
