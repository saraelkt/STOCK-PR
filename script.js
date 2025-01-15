document.getElementById("nextbtn").addEventListener("click", function () {
  document.querySelector(".part2").classList.remove("hidden");
  document.querySelector(".part1").classList.add("hidden");
});
document.getElementById("turnbackbtn").addEventListener("click", function () {
  document.querySelector(".part2").classList.add("hidden");
  document.querySelector(".part1").classList.remove("hidden");
});

// $("#icol").click(function () {
//   if ($("#col").val()) {
//     // Add new column header
//     $("#mtable thead tr").append($("<td>").html($("#col").val()));
//     // Add new column cells
//     $("#mtable tbody tr").each(function () {
//       $(this).append($('<td contenteditable="true">'));
//     });
//     $("#col").val(""); // Clear input field
//   }
// });

$("#icol1").click(function () {
  if ($("#col1").val()) {
    // Add new column header
    $("#mtablee thead tr").append($("<td>").html($("#col1").val()));
    // Add new column cells
    $("#mtablee tbody tr").each(function () {
      $(this).append($('<td contenteditable="true">'));
    });
    $("#col1").val(""); // Clear input field
  }
});
function addColumn(tableId, inputId) {
  if ($(inputId).val()) {
    // Add new column header
    $(tableId + " thead tr").append(
      $("<td contenteditable='true'>").html($(inputId).val())
    );
    // Add new column cells
    $(tableId + " tbody tr").each(function () {
      $(this).append($('<td contenteditable="true"></td>'));
    });
    $(inputId).val(""); // Clear input field
  }
}

$("#icol3").click(function () {
  addColumn("#mtableee", "#col3");
});

$("#icol4").click(function () {
  addColumn("#mtableeee", "#col4");
});
