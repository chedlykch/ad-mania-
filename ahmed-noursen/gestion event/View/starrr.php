<?php

if (isset($_POST["drone"]))
{
    if($_POST["drone"]==1)echo "aa";
}

?>


<p>Select a maintenance drone:</p>

<div>
<form action="" method="post">
  <input type="radio" id="un" name="drone" value=1 >
  <input type="radio" id="deux" name="drone" value=2>
  <input type="radio" id="trois" name="drone" value=3>
  <input type="radio" id="quatre" name="drone" value=4>
  <input type="radio" id="cinq" name="drone" value=5>
  <input type="submit" value="OK">
  </form>
</div>