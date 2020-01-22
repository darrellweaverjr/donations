$(document).ready(function(){

  // Toogle Div Layer When Checked
  $("#per-month-1").click(function (e) {
    if (e.target.tagName != 'INPUT') {
      $(this).find("input").toggleCheckbox();
      $("#per-month-1").toggleClass('divChecked');
      return false;
    }
  });
  // Toogle checkbox
  $('#defaultChecked1').change(
    function() {
      $("#per-month-1").toggleClass('divChecked');
    }
  );

  // Toogle Div Layer When Checked
  $("#per-month-2").click(function (e) {
    if (e.target.tagName != 'INPUT') {
      $(this).find("input").toggleCheckbox();
      $("#per-month-2").toggleClass('divChecked');
      return false;
    }
  });
  // Toogle checkbox
  $('#defaultChecked2').change(
    function() {
      $("#per-month-2").toggleClass('divChecked');
    }
  );

  // Toogle Div Layer When Checked
  $("#per-month-3").click(function (e) {
    if (e.target.tagName != 'INPUT') {
      $(this).find("input").toggleCheckbox();
      $("#per-month-3").toggleClass('divChecked');
      return false;
    }
  });
  // Toogle checkbox
  $('#defaultChecked3').change(
    function() {
      $("#per-month-3").toggleClass('divChecked');
    }
  );

  // Toogle Div Layer When Checked
  $("#per-month-4").click(function (e) {
    if (e.target.tagName != 'INPUT') {
      $(this).find("input").toggleCheckbox();
      $("#per-month-4").toggleClass('divChecked');
      return false;
    }
  });
  // Toogle checkbox
  $('#defaultChecked4').change(
    function() {
      $("#per-month-4").toggleClass('divChecked');
    }
  );

  $.fn.toggleCheckbox = function() {
    this.attr('checked', !this.attr('checked'));
  }

});
