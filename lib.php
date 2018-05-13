<?php

function productTile($title, $description, $productUrl, $imgUrl, $company, $productId)
{
  $description = trim(preg_replace('/\s+/', ' ', $description));
  print ("
    
    <div class=\"col-sm-6 col-md-3 col-lg-3 $company\">
      <div class=\"portfolio-item\">
        <div class=\"hover-bg\"> 
          <a onclick='toProductPage(\"$title\", \"$description\", \"$productUrl\", \"$imgUrl\", \"$productId\")'>
            <div class=\"hover-text\">
              <h4>$title</h4>
              <small>$description</small> </div>
            <img src=$imgUrl class=\"img-responsive\" alt=\"Project Title\"> </a> </div>
      </div>
    </div>
    ");
}

function setLoginCookie($username)
{
  setcookie("USER", $username);
}

function isLogin()
{
  if ( isset($_COOKIE["USER"]))
    return true;
  else
    return false;
}

function getUsername()
{
  if ( isset($_COOKIE["USER"]))
    return $_COOKIE["USER"];
  else
    return null;
}
?>

<script type="text/javascript">
  function toProductPage(title, desc, productUrl, imgUrl, productId) {
    const form = document.createElement('form');
    const titleElem = document.createElement('input');
    const descElem = document.createElement('input');
    const productUrlElem = document.createElement('input');
    const imgUrlElem = document.createElement('input');
    const prodIdElem = document.createElement('input');

    form.style.display = "none";
    form.action ='product.php';
    form.method = 'post';

    titleElem.value = title;
    titleElem.name = 'title';
    descElem.value = desc;
    descElem.name = 'desc';
    productUrlElem.value = productUrl;
    productUrlElem.name = 'productUrl';
    imgUrlElem.value = imgUrl;
    imgUrlElem.name = 'imgUrl';
    prodIdElem.value = productId;
    prodIdElem.name = 'productId';

    form.appendChild(titleElem);
    form.appendChild(descElem);
    form.appendChild(productUrlElem);
    form.appendChild(imgUrlElem);
    form.appendChild(prodIdElem);

    document.body.appendChild(form);

    console.log(form);
    form.submit();
  }

  function changeStars(id)
  {
    var cname="star";
    var ab=document.getElementById(id+"_hidden").value;
    document.getElementById("rating").value=ab;

    for(var i=ab;i>=1;i--)
    {
      document.getElementById(cname+i).src="img/star2.png";
    }
    id=parseInt(ab)+1;
    for(var j=id;j<=5;j++)
    {
      document.getElementById(cname+j).src="img/star1.png";
    }
  }

</script>



