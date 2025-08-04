$(document).ready(function () {
  let rooms = loadData("rooms");

  function renderRooms() {
    const list = $("#roomList");
    list.empty();
    rooms.forEach((room, i) => {
      list.append(`<li class="list-group-item">
        ${room}
        <button class="btn btn-danger btn-xs pull-right delete-room" data-index="${i}">Delete</button>
      </li>`);
    });
    saveData("rooms", rooms);
  }

  $("#roomForm").on("submit", function (e) {
    e.preventDefault();
    rooms.push($("#newRoomNumber").val());
    renderRooms();
    this.reset();
  });

  $("#roomList").on("click", ".delete-room", function () {
    rooms.splice($(this).data("index"), 1);
    renderRooms();
  });

  renderRooms();
});
