// Custom function to highlight the current page in nav

window.onload = function() {

  var page_title = document.title;


  if (page_title == "Socialisti.gr - Αρχική Σελίδα") {

      var el = document.getElementById('list1');
      el.classList.add("active");
  }
  if (page_title == "Socialisti.gr - Επικοινωνία") {

      var el = document.getElementById('list2');
      el.classList.add("active");
  }
  if (page_title == "Socialisti.gr - Αρχείο Κειμένων") {

      var el = document.getElementById('list3');
      el.classList.add("active");
  }

}
