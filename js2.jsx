function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and reveal those that match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[0].style.display = "table-row";
        tr[i].style.display = "table-row";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}

var today = new Date();
var time = today.getHours();
var greet;

if (time > 18) {
  greet = 'Good evening!';
} else if (time > 12) {
  greet = 'Good afternoon!';
} else if (time >= 6) {
  greet = 'Good morning!';
} else {
  greet = 'Good morning, you must be an early bird!';
}

var show = document.getElementById('timeOfDay');
show.textContent = greet;