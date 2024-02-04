<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Toggle Todo List</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <!-- Add your other CSS links here -->

  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f8f9fa;
    }

    .tab-container {
      position: fixed;
      bottom:300px; /* Adjusted to 10px from 200px */
      right: 10px;
      border-radius: 10px;
      background-color: #f8f8f8;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
      font-family: 'Montserrat', sans-serif;
      font-size: 14px;
      color: #333333;
      width: -350px;
      z-index: 9999;
      transition: right 0.5s;
      
    }
    .toggle-btn {
  background-color: #007bff;
  font-family: "Open Sans", sans-serif;
  position: fixed;
  bottom: 180px; /* Adjusted to 10px from 100px */
  right: 20px;
  z-index: 9999;
  border-radius: 50%;
  width: 60px;
  height: 60px;
  box-shadow: 0px 0px 0px #284269;
  color: white;
  font-weight: lighter;
  font-size: 11px;
  display: flex;
  justify-content: center;
  align-items: center;
  cursor: pointer;
  opacity: 0.95;

  /* Combine the two transition properties into one */
  transition: right 0.5s, background-color 0.3s ease-in-out;
}


    .add-items {
      margin-bottom: 20px;
    }

    .form-group {
      margin-bottom: 0;
    }

    .form-control {
      border-radius: 4px;
    }

    .todo-list {
      list-style-type: none;
      padding: 0;
    }

    .todo-list li {
      background-color: #f8f9fa;
      border-radius: 4px;
      margin-bottom: 8px;
      padding: 10px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .checkbox {
      margin-right: 8px;
    }

    .remove {
      cursor: pointer;
      color: #ff6363;
    }

    .remove:hover {
      color: #d33a3a;
    }

    .todo-list-section {
      display: none; /* initially hidden */
    }
  </style>
</head>
<body>
<div class="tab-container" id="setting-content">
  <button class="toggle-btn" onclick="toggleTodo()">Toggle Todo List</button>
  <div class="tab-pane fade show active scroll-wrapper todo-list-section" id="todo-section" role="tabpanel" aria-labelledby="todo-section">

    <div class="add-items d-flex px-3 mb-0">
     
    </div>
    <div class="list-wrapper px-3">
      <ul class="d-flex flex-column-reverse todo-list">
        <!-- Your todo list items go here -->
      </ul>
    </div>
    <form class="form w-100">
        <div class="form-group d-flex">
          <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
          <button type="button" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
        </div>
      </form>
  </div>
  <!-- To do section tab ends -->
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Add your other script links here -->

<script>
function toggleTodo() {
    $(".todo-list-section").toggle();
  }

  $(document).ready(function() {
    // Initial hide
    $(".todo-list-section").hide();
    $("#add-task").click(function(e) {
      e.preventDefault();
      var todoInput = $(".todo-list-input").val();

      if (todoInput.trim() !== "") {
        $(".todo-list").prepend('<li><div class="form-check"><label class="form-check-label"><input class="checkbox" type="checkbox">' + todoInput + '</label></div><i class="remove ti-close"></i></li>');
        $(".todo-list-input").val("");
      }
    });

    $(".toggle-todo").click(function() {
      $(".todo-list-section").toggle();
    });
  });
</script>

</body>
</html>
