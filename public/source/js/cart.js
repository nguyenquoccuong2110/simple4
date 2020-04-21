jQuery(document).ready(function($) {
  $(".hidestore").click(function() {
    $(this).parent().children().children('li').removeClass('branchhide');
    $(this).parent().children().children('li').addClass('branchactive');
    $(this).hide();
  });
  $('input[type="radio"][name="ship"]').click(function () {
      if ($(this).attr("value") == "1") {
        $(".detailship_home").show("100");
        $(".detailship_market").hide("100");
      }
      if ($(this).attr("value") == "2") {
        $(".detailship_home").hide("100");
        $(".detailship_market").show("100");
      }
  });
  $("#btnonline").click(function() {
    $(".box_cartonline").show();
    $("#btnoffline").hide();
    $(this).hide();
  });
  $(".repaycart").click(function() {
    $(".box_cartonline").hide();
    $("#btnoffline").show();
    $("#btnonline").show();
  });
  $("#agreevat").change(function(){
      if($("#agreevat").prop('checked')) {
        $(".capacityvat").show();
      }else{
        $(".capacityvat").hide();
      }
  });

});