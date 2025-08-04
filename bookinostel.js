$(document).ready(function () {
  function renderBookings() {
    const students = loadData("students");
    const tbody = $("#bookingTable tbody");
    tbody.empty();
    students.forEach((s) => {
      tbody.append(`<tr>
        <td>${s.name}</td>
        <td>${s.room}</td>
        <td>${new Date().toLocaleDateString()}</td>
      </tr>`);
    });
  }

  renderBookings();
  $(document).on("submit", "#studentForm", () => {
    setTimeout(renderBookings, 500);
  });
});
