  var $target_location = null;
  var $target_module = null;
  var $clicked = true;
  var locations = [];
  var modules = [];

  $('input:checkbox').removeAttr('checked');

$(document).ready(function () {

    $('.btn-filter-location').on('click', function () {

      var $selected = jQuery.inArray($(this).data('target-location'), locations);

      if( $selected != -1 ){
      $(this).css('background-color','#e52a6f');
      $(this).css('border-color','#e52a6f');
      locations.splice($selected,1);
    } else {
      $(this).css('background-color','#675682');
      $(this).css('border-color','#675682');
      locations.push($(this).data('target-location'));
    }

    $target_location = $(this).data('target-location');

    if($("#" + $(this).data('target-location')).find("input checkbox").prevObject[0].checked) {
    $("#" + $(this).data('target-location')).find("input checkbox").prevObject[0].checked = false;
     if((modules.length == 0) && (locations.length == 0)) {
          $('.table tr').css('display', 'none');
          $('.table tr').fadeIn('slow');
      } else if((locations.length == 0) && (modules.length !== 0)) {
        $('.table tr').css('display', 'none');
        modules.forEach(function(item) {
          $('.table tr[data-module="' + item + '"]').fadeIn('slow');
          });
      } else {
        $('.table tr[data-location="' + $(this).data('target-location') + '"]').css('display', 'none');
      }
    }

    else {
    $("#" + $(this).data('target-location')).find("input checkbox").prevObject[0].checked = true;
     if((modules.length == 0) && (locations.length == 1)) {
          $('.table tr').css('display', 'none');
          $('.table tr[data-location="' + $(this).data('target-location') + '"]').fadeIn('slow');
      } else {
        if(modules.length == 0) {
        $('.table tr[data-location="' + $(this).data('target-location') + '"]').fadeIn('slow');
      } else {
 
        if(locations.length == 1) {
        $('.table tr').css('display', 'none');
        modules.forEach(function(item) {
          $('.table tr[data-module="' + item + '"][data-location="' + $target_location + '"]').fadeIn('slow');
            });
          } else {
        $('.table tr').css('display', 'none');
        modules.forEach(function(item) {
          locations.forEach(function(item2) {
          $('.table tr[data-module="' + item + '"][data-location="' + item2 + '"]').fadeIn('slow');
            });
            });
          }


        }
      }
    }

  var numOfVisibleRows = $('.table tr:visible').length;
  if(numOfVisibleRows == 1){
  $("#jobcounter").html('We have found <span class="accent">' + numOfVisibleRows + '</span> offer');
  } else{
  $("#jobcounter").html('We have found <span class="accent">' + numOfVisibleRows + '</span> offers');
  }
});


    $('.btn-filter-module').on('click', function () {

      var $selected = jQuery.inArray($(this).data('target-module'), modules);

      if( $selected != -1 ){
      $(this).css('background-color','#e52a6f');
      $(this).css('border-color','#e52a6f');
      modules.splice($selected,1);
    } else {
      $(this).css('background-color','#675682');
      $(this).css('border-color','#675682');
      modules.push($(this).data('target-module'));
    }

    $target_module = $(this).data('target-module');

    if($("#" + $(this).data('target-module')).find("input checkbox").prevObject[0].checked) {
    $("#" + $(this).data('target-module')).find("input checkbox").prevObject[0].checked = false;
     if((modules.length == 0) && (locations.length == 0)) {
          $('.table tr').css('display', 'none');
          $('.table tr').fadeIn('slow');
      } else if((modules.length == 0) && (locations.length !== 0)) {
        $('.table tr').css('display', 'none');
        locations.forEach(function(item) {
          $('.table tr[data-location="' + item + '"]').fadeIn('slow');
          });
      } else {
        $('.table tr[data-module="' + $(this).data('target-module') + '"]').css('display', 'none');
      }
    }

    else {
    $("#" + $(this).data('target-module')).find("input checkbox").prevObject[0].checked = true;
     if((modules.length == 1) && (locations.length == 0)) {
          $('.table tr').css('display', 'none');
          $('.table tr[data-module="' + $(this).data('target-module') + '"]').fadeIn('slow');
      } else {
        if(locations.length == 0) {
        $('.table tr[data-module="' + $(this).data('target-module') + '"]').fadeIn('slow');
      } else {

        if(modules.length == 1) {
        $('.table tr').css('display', 'none');
        locations.forEach(function(item) {
          $('.table tr[data-module="' + $target_module + '"][data-location="' + item + '"]').fadeIn('slow');
            });
          } else {
        $('.table tr').css('display', 'none');
        locations.forEach(function(item) {
          modules.forEach(function(item2) {
          $('.table tr[data-module="' + item2 + '"][data-location="' + item + '"]').fadeIn('slow');
            });
            });
          }
        }
      }
    }

  var numOfVisibleRows = $('.table tr:visible').length;
  if(numOfVisibleRows == 1){
  $("#jobcounter").html('We have found <span class="accent">' + numOfVisibleRows + '</span> offer');
  } else{
  $("#jobcounter").html('We have found <span class="accent">' + numOfVisibleRows + '</span> offers');
  }

  });

 });
