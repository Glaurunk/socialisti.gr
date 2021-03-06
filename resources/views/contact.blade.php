@extends('layout')
@section('title', 'Επικοινωνία')


@section('content')


  <div class="card mb-3">
    <div class="card-body">
      <h1 class="card-title mb-3">Επικοινωνία</h1>
    </div> <!-- here ends card body -->
  </div> <!-- here ends card -->

  <div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          <h3 class="card-title">Βιογραφικά Στοιχεία</h3>
          <img src = "{{ asset('/images/VasAs.jpg') }}" class="img-fluid rounded mx-auto mt-5 mb-5 d-block"/>
          <p class="card-text text-justify hyphen">Ο Βασίλης Ασημακόπουλος γεννήθηκε στην Αθήνα το 1976. Σπούδασε Νομικά στη Νομική Σχολή Αθηνών, Κοινωνιολογία στο Πάντειο Πανεπιστήμιο, Πολιτική Επιστήμη και Ιστορία (μεταπτυχιακές σπουδές) στο Πάντειο Πανεπιστήμιο. Είναι διδάκτωρ Πολιτικής Κοινωνιολογίας. Μετείχε ενεργά στο φοιτητικό κίνημα, μέσα από τις γραμμές της ΠΑΣΠ, σε κινήσεις πολιτών για μια Πολυκεντρική Ελλάδα, ενάντια στους Ολυμπιακούς Αγώνες Αθήνα 2004, ενάντια στο Σχέδιο Ανάν, ενάντια στην αναθεώρηση του άρθρου 16 του Συντάγματος, στο αντιπολεμικό και αντιπαγκοσμιοποιητικό κίνημα, σε πρωτοβουλίες αντιιμπεριαλιστικής- διεθνιστικής αλληλεγγύης στους λαούς της Ανατολικής Μεσογείου στο πλαίσιο της Διεθνούς Ένωσης για τα Δικαιώματα και την Απελευθέρωση των Λαών, στο αντιμνημονιακό κίνημα. Προερχόμενος από το χώρο του ΠΑΣΟΚ, μέλος της συλλογικότητας Νέος Αγωνιστής, ήταν αιρετό μέλος της ΚΕ ΣΥΡΙΖΑ-ΕΚΜ την περίοδο 2012-2013. Αποχώρησε από τον ΣΥΡΙΖΑ το 2015. Εργάζεται ως μαχόμενος δικηγόρος ασχολούμενος με το Εργατικό Δίκαιο και διετέλεσε μέλος του Δ.Σ. του Δικηγορικού Συλλόγου Αθήνας την περίοδο 2015-2016, ενώ είναι μέλος της Σ.Ε. του Εθνικού Συμβουλίου Διεκδίκησης Γερμανικών Οφειλών. Μετέχει στη Σ.Ε. του περιοδικού <a href="https://tetradiamagazine.gr">Τετράδια, Πολιτικού Διαλόγου, Έρευνας και Κριτικής</a>. Έχει δημοσιεύσει κείμενα, παρεμβάσεις, ομιλίες, σε εφημερίδες, περιοδικά και ιστοσελίδες.
          </p>
        </div> <!-- here ends card body -->
      </div> <!-- here ends card -->
    </div> <!-- here ends col-sm-6 -->

    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          <h3 class="card-title mb-5">Στοιχεία επικοινωνίας</h3>
          <p class="card-text">Email: <a href="mailto:#">asimak@yahoo.com</a></p>
          <p class="card-text">Τηλέφωνο: 210 XXYYZZZ</p>
          <p class="card-text">Facebook: <a href="https://www.facebook.com/vasilis.asimakopoulos.56">Vasilis Asimakopoulos</a></p>
          <p class="card-text">Twitter: <a href="https://twitter.com/V_Asimakopoulos">V_Asimakopoulos</a></p>
        </div> <!-- here ends card body -->
      </div> <!-- here ends card -->
    </div> <!-- here ends col-sm-6 -->
  </div> <!-- here ends row -->

@endsection
