require('./bootstrap');

$(document).ready(function() {
  $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });
  $("#submit").click(function () {
      const url = "/user/chat/create";
      $.ajax({
          url: url,
          data: {
            user_chat: $("#user_id").val(),
            manufacture_chat: $("#manufacture_id").val(),
            text: $("#text").val()
          },
          method: "POST"
      });
      return false;
  });
  window.Echo.channel('chat')
      .listen('Chated', (e) => {
          $("#board").append('<li>' + e.chat.text + '</li>');
      });
});