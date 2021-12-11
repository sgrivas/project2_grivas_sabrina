<style>
@import url("https://use.typekit.net/ope6eob.css");
*{
        margin: 0;
        padding: 0;
        border: 0;
        color: #16160a;
}
h1{
    font-family: commuters-sans, sans-serif;
    font-size: 80px;
    padding: 20px;
}
p{
    font-family: commuters-sans, sans-serif;
    font-weight: 300;
    font-style: normal;
    font-size: 14px;
    padding: 20px;
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
    font-family: commuters-sans, sans-serif;
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
    padding-top: 100px;
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
    <h1>Oops!</h1>  
    <p>Something went wrong with your submission. Please try again.</p>
</section>
