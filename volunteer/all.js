$(document).ready(function () {
  $("#selectAllCheck").on("change", function () {
    if ($(this).is(":checked")) {
      $(".checkSelect").prop("checked", true);
    } else {
      $(".checkSelect").prop("checked", false);
    }
    handleEUStatus(false);
  });

  $(".checkSelect").on("change", function () {
    handleEUStatus($(this));
  });
});

function handleEUStatus(handler) {
  var dataId;
  if (handler == false) {
    handler = ".checkSelect";
    var dataId = $(handler).data("id");
    dataId = $(".checkSelect")
      .map((_, el) => $(el).data("id"))
      .get()
      .toString();
  } else {
    dataId = $(handler).data("id");
  }
  if ($(handler).is(":checked")) {
    if ($(".btn-false").is(":visible") == false) {
      var enableButton =
        "<a class='btn-false-link' href='?processEU=" +
        dataId +
        "'>" +
        "<button class='btn btn-primary btn-false ml-1 mr-1'>Approve</button>" +
        "</a>";
      var disableButton =
        "<a class='btn-false-link' href='?processDU=" +
        dataId +
        "'>" +
        "<button class='btn btn-danger btn-false ml-1 mr-1'>Disapprove</button>" +
        "</a>";
      $(".dt-buttons").append(enableButton + disableButton);
    } else {
      var existing_href = $(".btn-false-link").attr("href");
      var new_href = existing_href + "," + dataId;

      $(".btn-false-link").attr("href", new_href);
    }
  } else {
    if ($(".checkSelect").is(":checked") == false) {
      $(".btn-false").hide();
    }
  }
}
