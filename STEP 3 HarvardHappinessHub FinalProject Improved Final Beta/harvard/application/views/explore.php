<div>
<div class="left">
	<h1>Explore</h1>
</div>
<div class="right">
	<form id="search" method="GET" action="/index.php/search">
		<input type="text" id="search-videos" name="q" placeholder="Search by keywords, hashtags here ..." required><input type="submit" value="Search" id="search-button">
	</form>
</div>
<div class="clear"></div>
</div>

<input type="submit" value="Submit video for this week" id="submit-video">
<form id="submit-form" method="POST" action="/index.php/submit">

	<div class="line-entry">
		<label for="email">Email</label><input type="email" name="email" id="email" required>
	</div>
	<div class="line-entry">
		<label for="title">Title</label><input type="text" name="title" id="title" required>
	</div>
	<div class="line-entry">
		<label for="link">YouTube<br>/ Vimeo Link</label><input type="url" name="link" id="link" required>
	</div>
	<div class="line-entry">
		<label for="desc">Description</label>
		<textarea name="desc" id="desc"></textarea>
	</div>
	<div class="line-entry">
		<input type="submit" value="Submit">
	</div>	

</form>

<div class="overlay"></div>
<?php
for ($i=0; $i < count($week); $i++)
{ 
foreach ($week[$i]->result() as $row)
{
    if($row->status == 2)
    {
		echo "<h1>Featured Video of Week - ".$row->week."</h1>";
		echo '<a class="modalLink" href="#modal'.$row->link.'">';
		echo '<div class="thumbnail-wrapper">';
		echo '<div class="thumbnail best" style="background: url(/assets/videos/'.$row->link.'.png); background-size: cover;"><div class="play">'.$row->title.'</div></div>';
		echo '</div>';
		echo '</a>';
		echo "<br>";
		echo '<div id="modal'.$row->link.'" class="modal">';
		echo '<div class="modal-top-bar">';
    	echo '<h1 class="modal-title">'.$row->title.'<p class="closeBtn">X</p></h1>';
    	echo '</div>';
    	echo '<iframe width="100%" height="400" src="//www.youtube.com/embed/'.$row->link.'?autoplay=0&showinfo=0&rel=0" frameborder="0" allowfullscreen></iframe>';
		echo '</div>';
    }
    else
    {
    	echo '<a class="modalLink" href="#modal'.$row->link.'">';
		echo '<div class="thumbnail-wrapper">';
		echo '<div class="thumbnail others" style="background: url(/assets/videos/'.$row->link.'.png); background-size: cover;"><div class="play">'.$row->title.'</div></div>';
		echo '</div>';
		echo '</a>';
		echo '<div id="modal'.$row->link.'" class="modal">';
		echo '<div class="modal-top-bar">';
    	echo '<h1 class="modal-title">'.$row->title.'<p class="closeBtn">X</p></h1>';
    	echo '</div>';
    	echo '<iframe width="100%" height="400" src="//www.youtube.com/embed/'.$row->link.'?autoplay=0&showinfo=0&rel=0" frameborder="0" allowfullscreen></iframe>';
		echo '</div>';	 
    }
}
}
?>
		

<script>

$(document).ready(function(){  

	$('#submit-video').click(function(){
		if($('#submit-form').css('display') == 'none')
			$('#submit-form').slideDown("slow");	
		else
			$('#submit-form').slideUp("slow");	
	});
	
});

</script>