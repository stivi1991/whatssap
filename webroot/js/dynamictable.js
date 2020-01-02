var index = 0;

$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
  var actions = '<a class="add" title="Add"><i class="material-icons">check_circle_outline</i></a>' +
                '<a class="delete"><i class="material-icons">close</i></a>';
  // Append table with add row form on add new button click
    $(".add-new").click(function(){
    $(this).attr("disabled", "disabled");
    index += 1;
        var row = '<tr>' +
            '<td><input type="text" class="form-control" name="' + (index) + '_' + 'skill_name" id="' + (index) + '_' + 'skill_name" required></td>' +
            '<td>' +
            '<fieldset class="rating">' +
      '<input type="radio" id="' + (index) + '_' + 'star5" name="' + (index) + '_' + 'rating" value="5" /><label class = "full" for="' + (index) + '_' + 'star5" title="Expert"></label>' +
      '<input type="radio" id="' + (index) + '_' + 'star4half" name="' + (index) + '_' + 'rating" value="4.5" /><label class="half" for="' + (index) + '_' + 'star4half" title="Expert"></label>' +
      '<input type="radio" id="' + (index) + '_' + 'star4" name="' + (index) + '_' + 'rating" value="4" /><label class = "full" for="' + (index) + '_' + 'star4" title="Senior"></label>' +
      '<input type="radio" id="' + (index) + '_' + 'star3half" name="' + (index) + '_' + 'rating" value="3.5" /><label class="half" for="' + (index) + '_' + 'star3half" title="Senior"></label>' +
      '<input type="radio" id="' + (index) + '_' + 'star3" name="' + (index) + '_' + 'rating" value="3" /><label class = "full" for="' + (index) + '_' + 'star3" title="Regular"></label>' +
      '<input type="radio" id="' + (index) + '_' + 'star2half" name="' + (index) + '_' + 'rating" value="2.5" /><label class="half" for="' + (index) + '_' + 'star2half" title="Regular"></label>' +
      '<input type="radio" id="' + (index) + '_' + 'star2" name="' + (index) + '_' + 'rating" value="2" /><label class = "full" for="' + (index) + '_' + 'star2" title="Junior"></label>' +
      '<input type="radio" id="' + (index) + '_' + 'star1half" name="' + (index) + '_' + 'rating" value="1.5" /><label class="half" for="' + (index) + '_' + 'star1half" title="Junior"></label>' +
      '<input type="radio" id="' + (index) + '_' + 'star1" name="' + (index) + '_' + 'rating" value="1" /><label class = "full" for="' + (index) + '_' + 'star1" title="Junior"></label>' +
      '<input type="radio" id="' + (index) + '_' + 'starhalf" name="' + (index) + '_' + 'rating" value="0.5" /><label class="half" for="' + (index) + '_' + 'starhalf" title="Junior"></label>' +
      '</fieldset>' +
            '</td>' +
      '<td>' + actions + '</td>' +
        '</tr>';
      $("table").append(row);
    $("table tbody tr").eq($("table tbody tr:last-child").index()).find(".add").show();
        $('[data-toggle="tooltip"]').tooltip(); 
    
    });
  // Add row on add button click
  $(document).on("click", ".add", function(){
    var empty = false;
    var input = $(this).parents("tr").find('input[type="text"]');
        input.each(function(){
      if(!$(this).val()){
        $(this).addClass("error");
        empty = true;
      } else{
                $(this).removeClass("error");
            }
    });
    $(this).parents("tr").find(".error").first().focus();
    if(!empty){
      input.each(function(){
        $(this).parent("td").html($(this).val() + ' <input type="hidden" name="' + index + '_' + 'skill_name" class="form-control id="' + index + '_' + 'skill_name" value="' + $(this).val() + '">');
      });
      $(this).parents("tr").find(".add").hide();
      $(".add-new").removeAttr("disabled");
      $('#skill_number').val(index);
    }
        
    });
  // Delete row on delete button click
  $(document).on("click", ".delete", function(){
        $(this).parents("tr").remove();
    $(".add-new").removeAttr("disabled");
    
    $('#skill_number').val(index);
    });
  
  
  $( "form" ).on( "submit", function() { 

    var index = $("table tbody tr:last-child").index();
   
   if(index==-1){
      alert('Please add at least one skill!');
      return false;
    } else {
      return true;
    }
    
});
  
});
