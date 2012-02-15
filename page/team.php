<?php 
$pagetitle = 'Das Team';
	  

if(isset($_GET['subpage'])) {
	$subpage = $_GET["subpage"];
		} else { 
	$subpage = 'admins'; }
$admins = '
<div class="post-title">
            <h2>Das Game-Lauch.de-Team</h2>
          </div>
          <!--/post-title -->
          <div class="post-date">Letzte Aktualisierung : 11.02.2012 13:33</div>
          <!--/social-links -->
          <div class="clr"></div>
          <div class="pic fl"><a href="#" rel="bookmark" title="Permanent Link to Using jQuery To Create A OSX Dock Effect"><img src="images/img_1.jpg" alt="Post Pic" width="226" height="149" /></a></div>
          <!--/post-pic -->
          <div class="post-excerpt">
            <p><strong>Nico Vogt</strong><br />
             Programmierer und Verwaltung des Internetauftrittes.</p>
          </div>
          <!--/post-excerpt -->
          <div class="clr"></div>
		  <br><br>
		  
		  <div class="pic fl"><a href="#" rel="bookmark" title="Permanent Link to Using jQuery To Create A OSX Dock Effect"><img src="images/img_1.jpg" alt="Post Pic" width="226" height="149" /></a></div>
          <!--/post-pic -->
          <div class="post-excerpt">
            <p><strong>Florian Meyer</strong><br />
             Designer des Internetauftrittes.</p>
          </div>
          <!--/post-excerpt -->
          <div class="clr"></div>
        </div>
        <!--/content -->
      </div>
      <!--/box -->
      <div class="clr"></div>
	  ';

$mods = '
<div class="post-title">
            <h2>Das Game-Lauch.de-Team</h2>
          </div>
          <!--/post-title -->
          <div class="post-date">Letzte Aktualisierung : 11.02.2012 13:33</div>
          <!--/social-links -->
          <div class="clr"></div>
          <div class="pic fl"><a href="#" rel="bookmark" title="Permanent Link to Using jQuery To Create A OSX Dock Effect"><img src="images/img_1.jpg" alt="Post Pic" width="226" height="149" /></a></div>
          <!--/post-pic -->
          <div class="post-excerpt">
            <p><strong>Yannik Nitschki</strong><br />
             Programmierer und Verwaltung des Internetauftrittes.</p>
          </div>
          <!--/post-excerpt -->
          <div class="clr"></div>
		  <br><br>
		  
		  <div class="pic fl"><a href="#" rel="bookmark" title="Permanent Link to Using jQuery To Create A OSX Dock Effect"><img src="images/img_1.jpg" alt="Post Pic" width="226" height="149" /></a></div>
          <!--/post-pic -->
          <div class="post-excerpt">
            <p><strong>Maximillian Reichert</strong><br />
             Designer des Internetauftrittes.</p>
          </div>
          <!--/post-excerpt -->
          <div class="clr"></div>
        </div>
        <!--/content -->
      </div>
      <!--/box -->
      <div class="clr"></div>
	  ';
	 

if($subpage = 'admins') {
	$content = $admins;
} else {
	$content = $subpage;
}

?>