$(document).ready(function(){
  var skillnum = 0;
  $('[data-toggle="tooltip"]').tooltip();
  var actions = '<a class="add" title="Add"><i class="material-icons">&#xE03B;</i></a>' +
                '<a class="delete"><i class="material-icons">&#xE872;</i></a>';
  // Append table with add row form on add new button click
    $(".add-new").click(function(){
    $(this).attr("disabled", "disabled");
    var index = $("table tbody tr:last-child").index();
        skillnum += 1;
        var row = '<tr>' +
            '<td><input type="text" class="form-control" name="skill_name" id="skill_name" required></td>' +
            '<td>' +
            '<fieldset class="rating">' +
      '<input type="radio" id="' + skillnum + '_' + 'star5" name="' + skillnum + '_' + 'rating" value="5" /><label class = "full" for="' + skillnum + '_' + 'star5" title="Expert"></label>' +
      '<input type="radio" id="' + skillnum + '_' + 'star4half" name="' + skillnum + '_' + 'rating" value="4 and a half" /><label class="half" for="' + skillnum + '_' + 'star4half" title="Expert"></label>' +
      '<input type="radio" id="' + skillnum + '_' + 'star4" name="' + skillnum + '_' + 'rating" value="4" /><label class = "full" for="' + skillnum + '_' + 'star4" title="Senior"></label>' +
      '<input type="radio" id="' + skillnum + '_' + 'star3half" name="' + skillnum + '_' + 'rating" value="3 and a half" /><label class="half" for="' + skillnum + '_' + 'star3half" title="Senior"></label>' +
      '<input type="radio" id="' + skillnum + '_' + 'star3" name="' + skillnum + '_' + 'rating" value="3" /><label class = "full" for="' + skillnum + '_' + 'star3" title="Regular"></label>' +
      '<input type="radio" id="' + skillnum + '_' + 'star2half" name="' + skillnum + '_' + 'rating" value="2 and a half" /><label class="half" for="' + skillnum + '_' + 'star2half" title="Regular"></label>' +
      '<input type="radio" id="' + skillnum + '_' + 'star2" name="' + skillnum + '_' + 'rating" value="2" /><label class = "full" for="' + skillnum + '_' + 'star2" title="Junior"></label>' +
      '<input type="radio" id="' + skillnum + '_' + 'star1half" name="' + skillnum + '_' + 'rating" value="1 and a half" /><label class="half" for="' + skillnum + '_' + 'star1half" title="Junior"></label>' +
      '<input type="radio" id="' + skillnum + '_' + 'star1" name="' + skillnum + '_' + 'rating" value="1" /><label class = "full" for="' + skillnum + '_' + 'star1" title="Junior"></label>' +
      '<input type="radio" id="' + skillnum + '_' + 'starhalf" name="' + skillnum + '_' + 'rating" value="half" /><label class="half" for="' + skillnum + '_' + 'starhalf" title="Junior"></label>' +
      '</fieldset>' +
            '</td>' +
      '<td>' + actions + '</td>' +
        '</tr>';
      $("table").append(row);
    $("table tbody tr").eq(index + 1).find(".add, .edit").toggle();
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
        $(this).parent("td").html($(this).val() + ' <input type="hidden" name="' + skillnum + '_' + 'skill_name" class="form-control id="' + skillnum + '_' + 'skill_name" value="' + $(this).val() + '">');
      });
      $(this).parents("tr").find(".add, .edit").toggle();
      $(".add-new").removeAttr("disabled");
    }
    });
  // Delete row on delete button click
  $(document).on("click", ".delete", function(){
        $(this).parents("tr").remove();
    $(".add-new").removeAttr("disabled");
    });
});
