<?php

include("header.php");
?><br><br>

<div class="container col-lg-6">
<h2 class="text-center">Contact Here</h2>
<hr style="width:400px;height:3px;background:rgb(212,175,55);">
<form action="sendmail.php" method="POST" class="form-group">
<input type="text" class="form-control" name="name" placeholder="Your name..." required><br>

<input type="email" class="form-control" name="mail" placeholder="Your Email Address..." required><br>

<input type="text" class="form-control" name="phone" placeholder="Your Phone Number.." required><br>

<textarea type="text" class="form-control" name="msg" placeholder="Tell me about your queries.." ></textarea><br>

<input type="submit" class="btn" name="submit" style="color:rgb(212,175,55);background: linear-gradient(to right, #fffc00, #ffffff);" value="Submit Queries">

</form>
</div>
<?php

include("footer.php");

?>