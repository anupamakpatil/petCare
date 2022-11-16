

<html>
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Choose Pet</title>
        <link rel="stylesheet" href="https://codepen.io/gymratpacks/pen/VKzBEp#0">
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="main.css">


    </head>
  <body>

  <html>
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Choose Pet</title>
        <link rel="stylesheet" href="https://codepen.io/gymratpacks/pen/VKzBEp#0">
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="main.css">
    </head>
  <body>

             
      <div class="child flex-child">
      <iframe name="dummyframe5" id="dummyframe5" style="display: none;"></iframe>
        <form method="post" action="chooseinsert.php" target="dummyframe5">
          <h1>Pet Information </h1>
        
          <fieldset>
          
            <legend><span class="number">1</span>Basic Info</legend>
        
            <label>Pet Type:</label>
            <select id="pettype" name='pettype'>
              <option value="Cat">Cat</option>
              <option value="Dog">Dog</option>
              <option value="Fish">Fish</option>
            </select>
       
            <label>Name:</label>
            <input type="text" name="pname" id="pname" value="" required>
        
            <label>Date of birth:</label>
            <input type="date" name="pdob" id="pdob" value=""><br>

           
          </fieldset>
        <button type="submit">Save</button>
        
        </form>
      </div>
  
      
    </body>

   

</html>


             
      <div class="child flex-child">
      <iframe name="dummyframe5" id="dummyframe5" style="display: none;"></iframe>
        <form method="post" action="./chooseinsert.php" target="dummyframe5">
          <h1>Pet Information </h1>
        
          <fieldset>
          
            <legend><span class="number">1</span>Basic Info</legend>
        
            <label>Pet Type:</label>
            <select id="pet-type" name='pet-type'>
              <option value="Cat">Cat</option>
              <option value="Dog">Dog</option>
              <option value="Fish">Fish</option>
            </select>
       
            <label>Name:</label>
            <input type="text" name="p-name" id="p-name" value="" required>
        
            <label>Date of birth:</label>
            <input type="date" name="pdob" id="pdob" value=""><br>

           
          </fieldset>
        <button type="submit">Save</button>
        
        </form>
      </div>
  
      
    </body>

   

</html>