<style>
    @import url("https://use.typekit.net/ope6eob.css");
    @font-face {
    font-family: beautyswing;
    src: url(../fonts/beautyswing.otf);
}
*{
        margin: 0;
        padding: 0;
        border: 0;
        color: #16160a;
}
h1{
    font-family: beautyswing, sans-serif;
    font-size: 80px;
}
p{
    font-family: commuters-sans, sans-serif;
    font-weight: 300;
    font-style: normal;
    font-size: 14px;
}
.header {
    position: fixed;
    width: 100%;
    z-index: 999;
    transition: all 0.2s ease-in-out;
    height: auto;
    background-color: transparent;  
}
.logo {
    width: 30%;
    display: inline-block;
    text-align: center;
    padding: 15px 0;
    font-family: beautyswing, sans-serif;
    text-decoration: none;
    font-size: 20px;
    color: #16160a;
}
.header nav {
    width: 65%;
    display: inline-block;
    text-align: right;
    vertical-align: top;
    position: relative;
    top: 10px;
}

.header nav li {
    display: inline-block;
}

.header nav a {
    color: #16160a;
    text-decoration: none;
    margin: 0 20px;
    transition: .3s;
    font-family: commuters-sans, sans-serif;
    font-weight: 300;
    font-style: normal;
}
.header.active {
    background: #fff;
    -webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.25);
    -moz-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.25);
    box-shadow: 0 1px 5px rgba(0, 0, 0, 0.25);
}
.header.active a {
    color: #16160a;
}
.header.active .reserve-button{
    color: #16160a;
}
.second-nav{
    width: 100%;
    padding: 20px 40px;
    background: #DEDEDE;
}
.second-nav li{
    display: inline-block;
}
.second-nav a{
    color: #16160a;
    text-decoration: none;
    padding-right: 60px;
    transition: .3s;
}
.second-nav a:hover{
    color: #8aa73d;
    transition: .3s;
}
.container{
    max-width: 900px;
    margin: auto;
    padding-top: 50px;
}
footer{
    bottom: 0;
    width: 100%;
    background-color: #16160a;
    color: white;
    height: 170px;
}
footer h2{
    font-size: 24px;
    text-align: left;
}
footer p{
    font-size: 14px;
}
.topleftfooter{
    width: 30%;
    display: inline-block;
    margin: 20px 0px 0px 20px;
}
.toprightfooter{
    width: 65%;
    display: inline-block;
    text-align: right;
    vertical-align: top;
    position: relative;
    top: 10px;
    margin: 20px 20px 0px 0px;
}
.toprightfooter img{
    width: 25px;
    padding-right: 10px;
}
.bottomleftfooter{
    width: 30%;
    display: inline-block;
    margin: 20px;
    bottom: 0px;
}
</style>
<header class="header">
    <a class="logo" href="index.html">Tranquillum</a>

    <nav>
         <ul>
            <li><a href="retreat.html">Retreat</a></li>
            <li><a href="story.html">Story</a></li>
            <li><a class="reserve-button" href="reserve.html">Reserve</a></li>
         </ul>
    </nav>
</header>
<section class="container">
	<h1>Missing fields</h1>
	<p>Sorry, you have not completed all of the required fields. Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

	<ul>
	<?php
		for($i=0; $i<count($this->missing_required_fields); $i++){
			echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
		}
	?>
	</ul>

	<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
</section>
<footer>
    <section class="topleftfooter">
        <h2>Tranquillum</h2>
    </section>
        
    <section class="toprightfooter">
        <a href="facebook.com"><img src="images/fblogo.png" alt="Facebook" title="Facebook"></a>
        <a href="twitter.com"><img src="images/tlogo.png" alt="Twitter" title="Twitter"></a>
        <a href="instagram.com"><img src="images/iglogo.png" alt="Instagram" title="Instagram"></a>
    </section>
        
    <section class="bottomleftfooter">
         <p>1234 Retreat Way<br>Northern, CA 90401<br>808-555-1224</p>
    </section>
</footer>