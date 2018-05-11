<?php

  function productTile($title, $desc, $img, $company){
    print ("
    <div class=\"col-sm-6 col-md-3 col-lg-3 $company\">
      <div class=\"portfolio-item\">
        <div class=\"hover-bg\"> <a href=\"img/portfolio/01-large.jpg\" title=\"Project description\" rel=\"prettyPhoto\">
            <div class=\"hover-text\">
              <h4>$title</h4>
              <small>$desc</small> </div>
            <img src=$img class=\"img-responsive\" alt=\"Project Title\"> </a> </div>
      </div>
    </div>
    
  ");
  }