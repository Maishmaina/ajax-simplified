/**
 * JS/JQuery
 * Handle UI
 */
// document.write("This is plain js");
// alert("data found");
$(document).ready(function () {
  $("#target").css("color", "green");
  //   $("#action").hide();
  //   $("#action").show();

  //   $("#action").click(function () {
  //     $(".add").toggle();
  //   });

  //   $("#action").mouseenter(function () {
  //     $(".add").toggle();
  //   });

  //   $("#action").mouseleave(function () {
  //     $(".add").toggle();
  //   });

  $("#action").dblclick(function () {
    $(".add").toggle();
  });

  $("#data-focus").focus(function () {
    $(this).css("background-color", "red");
  });

  $("#action1").click(function () {
    $(".fadeData").toggle();
    $(".fadeData").fadeIn("slow");
  });

  $("#action1").click(function () {
    $(".fadeData").fadeOut("slow");
  });

  $("#action3").click(function () {
    $(".fadeslide").slideUp();
  });

  $("#action4").click(function () {
    $(".fadeToggle").slideToggle();
  });
  $("#action5").click(function () {
    $(".animateData").animate({
      right: "250px",
      opacity: "0.5",
      width: "150px",
    });
  });
  $("#action6").click(function () {
    $(".classBack").hide("slow", function () {
      alert("Some Data Was Hidden");
    });
  });

  $("#action7").click(function () {
    $(".chainig").css("color", "red").slideUp(2000).slideDown(2000);
  });

  $(".btnAction").click(function () {
    let productId = $(this).attr("productId");
    let stock = $(this).attr("stock");
    console.log("Id and Status: " + productId + " and " + stock);

    let data = new FormData();
    data.append("productId", productId);
    data.append("stock", stock);

    $.ajax({
      url: "ajax.php",
      method: "POST",
      data: data,
      catche: false,
      contentType: false,
      processData: false,
      success: function (response) {
        console.log("response " + response);
        $("#stock").val(response.stock + 1);
      },
    });
  });
});
