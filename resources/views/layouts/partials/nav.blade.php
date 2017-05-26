<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ route('juice.index') }}"><i class="fa fa-home"></i></a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">        
        <li class="{{ set_active_route('juice.index') }}"><a href="{{ route('juice.index') }}">Jus</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Produits <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li class="{{ set_active_route('type.index') }}"><a href="{{ route('type.index') }}">Types</a></li>
            <li class="{{ set_active_route('product.index') }}"><a href="{{ route('product.index') }}">Liste</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">Login</a></li>
        <li><a href="#contact">Register</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>