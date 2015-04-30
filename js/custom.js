$(document).ready(function(){

  autoloadCompany();
  autoloadCompanyID();


  $(".submenu > a").click(function(e) {
    e.preventDefault();
    var $li = $(this).parent("li");
    var $ul = $(this).next("ul");

    if($li.hasClass("open")) {
      $ul.slideUp(350);
      $li.removeClass("open");
    } else {
      $(".nav > li > ul").slideUp(350);
      $(".nav > li").removeClass("open");
      $ul.slideDown(350);
      $li.addClass("open");
    }
  });

  $("[name='companySwitcher']").on('change',function() {
    switchCompany($(this).val());
  });

  function switchCompany(cid) {

    $.post("/company/change", {company_id:cid})
      .done(function(data) {
        if(data != '') {
          $('#activeCompany').html(data);
        }
      })

    /*$.ajax({
      url:'/switch-company',
      type:'POST',
      data:{company_id:cid}
    }).done(function(data)) {
      if(data != '') {
        $('#activeCompany').html(data);
      }
    }*/
  }

  function autoloadCompany() {
    $.get("/company/get_name", function(data) {
      if(data != "") {
        $("#activeCompany").html(data);
      }
    })
  }

  function autoloadCompanyID() {
    $.get("/company/get_id", function(data) {
      if(data != "") {
        $("[name='companySwitcher'] option").each(function() {
          if($(this).val() == data) {
            $(this).prop('selected',true);
            $("[name='companySwitcher']").selectpicker('render');
          }
        })
      }
    })
  }
  
});