<style @import url("css/style.css")></style>
<head>
  <script type="text/javascript" src="/js/jquery-1.12.1.min.js">
    $(document).ready(function() {
    $("button").addClass("animated bounce");
    $(".text-primary").addClass("animated shake");
  </script>

<h2 class="red-text">CatPhotoApp</h2>

<p>Click here for <a href="#">cat photos</a>.</p>
<h3 class="text-primary text-center">jQuery Playground</h3>

<a href="#"><img class="smaller-image thick-green-border" alt="A cute orange cat lying on its back" src="https://bit.ly/fcc-relaxing-cat"></a>

<div>
  <p>Things cats love:</p>
  <ul>
    <li>cat nip</li>
    <li>laser pointers</li>
    <li>lasagna</li>
  </ul>
  <p>Top 3 things cats hate:</p>
  <ol>
    <li>flea treatment</li>
    <li>thunder</li>
    <li>other cats</li>
  </ol>
  <h4>Тест добавления поля</h4>

</div>

<form method="POST">
  <label><input type="radio" name="indoor-outdoor" checked> Indoor</label>
  <label><input type="radio" name="indoor-outdoor"> Outdoor</label>
  <label><input type="checkbox" name="personality" checked> Loving</label>
  <label><input type="checkbox" name="personality"> Lazy</label>
  <label><input type="checkbox" name="personality"> Energetic</label>
  <input type="text" name="GGGG" placeholder="cat photo URL" required>
  <button type="submit" name="act">Submit</button>
  <button class="btn btn-default target" id="target1">Try it</button>  

</form>
</head>
<?php
  if(isset($_POST['act']))
  {
    echo $_POST['GGGG'];
  }
?>