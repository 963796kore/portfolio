$(document).ready(function () {
  let students = loadData("students");

  function renderStudents() {
    const tbody = $("#studentTable tbody");
    tbody.empty();
    students.forEach((student, index) => {
      tbody.append(`<tr>
        <td>${student.name}</td>
        <td>${student.age}</td>
        <td>${student.room}</td>
        <td>
          <button class='btn btn-warning btn-sm edit-btn' data-index='${index}'>Edit</button>
          <button class='btn btn-danger btn-sm delete-btn' data-index='${index}'>Delete</button>
        </td>
      </tr>`);
    });
    saveData("students", students);
  }

  $("#studentForm").on("submit", function (e) {
    e.preventDefault();
    const name = $("#studentName").val();
    const age = $("#studentAge").val();
    const room = $("#roomNumber").val();

    students.push({ name, age, room });
    renderStudents();
    this.reset();
  });

  $("#studentTable").on("click", ".delete-btn", function () {
    students.splice($(this).data("index"), 1);
    renderStudents();
  });

  $("#studentTable").on("click", ".edit-btn", function () {
    const i = $(this).data("index");
    const s = students[i];
    $("#studentName").val(s.name);
    $("#studentAge").val(s.age);
    $("#roomNumber").val(s.room);
    students.splice(i, 1);
    renderStudents();
  });

  renderStudents();
});
