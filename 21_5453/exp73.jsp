<html>
<head>
  <style>
    .grid-container {
      display: grid;
      grid-template-columns: 1fr 1fr;
      grid-gap: 10px;
      justify-items: center;
      align-items: center;
    }

    label {
      text-align: right;
      padding-right: 10px;
    }

    input {
      width: 100%;
      padding: 5px;
    }
  </style>
</head>
<body bgcolor="magenta">
  <div style="display: flex; justify-content: center; align-items: center; height: 100vh; width: 100vw;">
    <div class="grid-container">
      <form action="exp74.jsp" method="post">
        <label>Enter Book</label>
        <input type="text" name="t1"><br>
        <label>Enter Author Name</label>
        <input type="text" name="p"><br>
        <label>Enter Price</label>
        <input type="text" name="t2"><br>
        <label>Enter Publications</label>
        <input type="text" name="t3"><br>
        <input type="submit" value="Register">
      </form>
    </div>
  </div>
</body>
</html>
