<head>
<title>NetGas</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style2.css" rel="stylesheet" type="text/css" media="all">
<link href="css/menu.css" rel="stylesheet" type="text/css" media="all">
<link href="css/footercss.css" rel="stylesheet" type="text/css" media="all">
<script src="js/jquerymain.js"></script>
<script src="js/script.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery-3.2.0.min.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/jquery1.js"></script> 
<script type="text/javascript" src="js/nav.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script> 
<script type="text/javascript" src="js/nav-hover.js"></script>
<link href="http://fonts.googleapis.com/css?family=Monda" rel="stylesheet" type="text/css">
<link href="fonts" rel="stylesheet" type="text/css">

<link href="http://fonts.googleapis.com/css?family=Doppio+One" rel="stylesheet" type="text/css">
<script type="text/javascript">
  $(document).ready(function($){
    $('#dc_mega-menu-orange').dcMegaMenu({rowItems:'4',speed:'fast',effect:'fade'});
  });
</script>
<script>jQuery(function($){
   $("#inputCep3").mask("99.999-999");
   $("#inputTelefone3").mask("(99) 99999-9999");
   $("#inputCpf3").mask("999.999.999-99");
   $("#ssn").mask("999-99-9999");
});

</script>
</head>

<body>
<!-- Single button -->
<div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Action <span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
</div>
  <div class="wrap">
        <div class="header_top">
            <div class="logo">
                <a href="index.php"><img src="images/logo.png" alt=""></a>
            </div>
        <div class="header_top_right">
          <div class="search_box">
            <form>
              <input type="text" value="Search for Products" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search for Products';}"><input type="submit" value="SEARCH">
            </form>
          </div>


<button type="button" class="login" data-toggle="modal" data-target="#loginModal">Login
<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
           </button> 


          <div class="shopping_cart">
          <div class="cart">
            <a href="#" title="View my shopping cart" rel="nofollow">
                <span class="cart_title">Cart</span>
                <span class="no_product">(empty)</span>
              </a>
            </div>
            </div>
       
     <div class="clear"></div>
   </div>
   <div class="clear"></div>
 </div>
<div class="menu">
    <ul id="dc_mega-menu-orange" class="dc_mm-orange">
      <li><a href="index.php">Home</a></li>
      <li><a href="produtos.php">Products</a> </li>
      <li><a href="topbrands.html">Top Brands</a></li>
      <li><a href="cart.html">Cart</a></li>
      <li><a href="contact.html">Contact</a> </li>
      <li><a href="login.php">Login</a> </li>
      <li><a href="cadastro.php">Cadastro</a> </li>

      <div class="clear"></div>
    </ul>
</div>














 <div class="modal fade" tabindex="-1" id="loginModal"
        data-keyboard="false" data-backdrop="static" style="float: right;">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    &times;
                </button>
                <h4 class="modal-title">Login</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="inputUserName">Username</label>
                        <input class="form-control" placeholder="Login Username"
                                type="text" id="inputUserName" />
                    </div>
                    <div class="form-group">
                        <label for="inputPassword">Password</label>
                        <input class="form-control" placeholder="Login Password"
                                type="password" id="inputPassword" />
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Login</button>
                <button type="button" class="btn btn-primary"
                        data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
