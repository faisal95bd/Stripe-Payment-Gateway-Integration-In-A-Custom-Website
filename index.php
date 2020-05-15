<?php require_once('./config.php'); ?>

<h1 style = "text-align: center;">My Website</h1>
<hr><br>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti quibusdam magnam, nihil tempore maxime quod, repellat tenetur non perspiciatis fugit, saepe rerum vero quam quo voluptatibus consequuntur voluptatem eum accusamus!</p>
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure asperiores quo nisi odio dolor facere rerum a aspernatur illo aliquam, sapiente possimus ad ipsam expedita, alias ex hic dolore fugiat? </p><br>

<div style="margin: auto; width: 15%; text-align: center;">   
 
<form action="charge.php" method="post">
  <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
          data-key="<?php echo $stripe['publishable_key']; ?>"
          data-description="Access for a month"
          data-amount="5000"
          data-locale="auto">
  </script>
</form>
</div>
