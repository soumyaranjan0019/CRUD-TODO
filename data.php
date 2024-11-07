<?php

include "conn.php";

session_start();

  if(!isset($_SESSION["full_name"]))
  {
    header("Location: login.php");
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To do list</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<style>
    body {
        background-color: #f8f9fa;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .todo-container {
        max-width: 600px;
        margin: 50px auto;
        padding: 20px;
        background: #fff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        transition: transform 0.2s, box-shadow 0.2s;
    }
    .todo-container:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }
    .input-group {
        margin-bottom: 20px;
    }
    .todo-list {
        list-style-type: none;
        padding-left: 0;
        font-weight:bolder;
    }
    .todo-list li {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px;
        margin-bottom: 5px;
        background: #e9ecef;
        border-radius: 5px;
        transition: background 0.3s, transform 0.2s;
    }
    .todo-list li:hover {
        transform: translateY(-3px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .todo-list li.done {
        background: #d4edda;
        text-decoration: line-through;
    }
</style>

</head>
<body>

        <h2 style="color:dark; background-color:tan;" align="right">Hello 
            <?= $_SESSION['full_name']; ?>,
            <a href="logout.php" style="text-decoration:none; color:green;">Logout</a>
        </h2>


        <div class="container mt-5">
    <h1 class="text-center">To-Do List</h1>

    <div class="row">

        <div class="col-lg-6 col-md-6 col-sm-11 col-12 todo-container">
                <div class="input-group">
                    <input type="text" class="form-control" id="todoInput" placeholder="Add a new task" required>
                    <div class="input-group-append">
                        <button class="btn btn-dark" type="button" onclick="addTodo()">Add</button>
                    </div>
                </div>
            <ul class="todo-list" id="todoList"></ul>
        </div>



    <script>
        function addTodo() {
            const todoInput = document.getElementById('todoInput');
            const todoList = document.getElementById('todoList');

            const todoText = todoInput.value.trim();
            if (todoText === '') return;

            const listItem = document.createElement('li');
            listItem.innerHTML = `
                <span>${todoText}</span>
                <div>
                    <button class="btn btn-success btn-sm" onclick="markDone(this)">Done</button>
                    <button class="btn btn-danger btn-sm" onclick="deleteTodo(this)">Delete</button>
                </div>
            `;

            todoList.appendChild(listItem);
            todoInput.value = '';
        }

        function deleteTodo(button) {
            const listItem = button.parentElement.parentElement;
            listItem.remove();
        }

        function markDone(button) {
            const listItem = button.parentElement.parentElement;
            listItem.classList.toggle('done');
        }
    </script><br><br><br>

    

</body>
</html>
