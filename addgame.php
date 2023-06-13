<?php

require_once('includes/database.php');
$page_title = "Add Game";
require_once ('includes/header.php');

?>
  <div class="container wrapper">
  <ul class="breadcrumb">
    <li><a href="index.php">Home</a></li>
    <li class="active">Add Game</li>
  </ul>

  <h1 class="text-center">ADD GAME</h1>
  <p class="lead text-center">Please add your desired game</p>
  <div class="col-xs-8 col-xs-offset-2">
    <form class="form-horizontal" role="form" action="processgame.php" method="get" enctype="text/plain">
      <div class="form-group">
        <label for="newGameName" class="col-sm-3 control-label">Title</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="newGameName" name="game_name" placeholder="Game Title" required>
        </div>
      </div>
      <div class="form-group">
        <label for="gameYear" class="col-sm-3 control-label">Year</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="gameYear" name="game_year" placeholder="Year" required>
        </div>
      </div>
      <div class="form-group">
        <label for="gameBio" class="col-sm-3 control-label">Storyline</label>
        <div class="col-sm-9">
          <textarea type="email" class="form-control" id="gameBio" name="bio" rows="4" placeholder="Enter Storyline" required></textarea>
        </div>
      </div>
      <div class="form-group">
        <label for="newImage" class="col-sm-3 control-label">Game Cover URL</label>
        <div class="col-sm-9">
          <input type="text" id="newImage" class="form-control" name="image" placeholder="Enter URL" required>
        </div>
      </div>
      <div class="form-group">
        <label for="gameRating" class="col-sm-3 control-label">Rating</label>
        <div class="col-sm-9">
          <select id="gameRating" name="rating" class="form-control" required>
            <option value="G">G</option>
            <option value="PG">PG</option>
            <option value="PG-13">PG-13</option>
            <option value="R">R</option>
            <option value="NR">NR (Not Rated)</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
          <button type="submit" class="btn btn-success">Add Game</button>
        </div>
      </div>
    </form>
  </div>
</div>

<?php
  include('includes/footer.php');
?>