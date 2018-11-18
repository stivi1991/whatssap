  var $target_location;
  var $target_module;

$(document).ready(function () {

    $('.btn-filter-location').on('click', function () {
      $target_location = $(this).data('target-location');
      if ($target_location != 'all') {
        $('.table tr').css('display', 'none');
      if(typeof $target_module !== 'undefined'){
        $('.table tr').css('display', 'none');
        $('.table tr[data-location="' + $target_location + '"][data-module="' + $target_module + '"]').fadeIn('slow');
      } else {
        $('.table tr').css('display', 'none');
        $('.table tr[data-location="' + $target_location + '"]').fadeIn('slow');
      }
      } else {
        $('.table tr').css('display', 'none');
        $('.table tr[data-location="' + $target_location + '"]').fadeIn('slow');
      }
    });


    $('.btn-filter-module').on('click', function () {
      $target_module = $(this).data('target-module');
      if (typeof $target_location !== 'undefined') {
        $('.table tr').css('display', 'none');
        if($target_module !='all'){
        $('.table tr').css('display', 'none');
        $('.table tr[data-location="' + $target_location + '"][data-module="' + $target_module + '"]').fadeIn('slow');
      } else {
        $('.table tr').css('display', 'none');
        $('.table tr[data-module="' + $target_module + '"]').fadeIn('slow');
      }
      } else {
        $('.table tr').css('display', 'none');
        $('.table tr[data-module="' + $target_module + '"]').fadeIn('slow');
      }
    });

 });
