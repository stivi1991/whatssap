$("#idfilter").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $(".table tr").filter(function() {
      $(this).toggle($(this).find('td.id').text().toLowerCase().indexOf(value) > -1)
    });
  });

$("#emailfilter").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $(".table tr").filter(function() {
      $(this).toggle($(this).find('td.email').text().toLowerCase().indexOf(value) > -1)
    });
  });


$("#namefilter").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $(".table tr").filter(function() {
      $(this).toggle($(this).find('td.name').text().toLowerCase().indexOf(value) > -1)
    });
  });

$("#modulefilter").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $(".table tr").filter(function() {
      $(this).toggle($(this).find('td.module').text().toLowerCase().indexOf(value) > -1)
    });
  });

$("#titlefilter").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $(".table tr").filter(function() {
      $(this).toggle($(this).find('td.title').text().toLowerCase().indexOf(value) > -1)
    });
  });
