function getRealTime() {
  // retrieve the DOM objects to place the content
  var domcategories = document.getElementById("categorycount");
  var domproducts = document.getElementById("productcount");
  var domlistpricetotal = document.getElementById("listpricetotal");
  var domwholesalepricetotal = document.getElementById("wholesalepricetotal");
  //send the GET request to retrieve the data
  var request = new XMLHttpRequest();
  request.open("GET", "realtime.php", true);
  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      //parse the XML document to get each data element
      var xmldoc = request.responseXML;
      var xmlcategories = xmldoc.getElementsByTagName("categories")[0];
      var categories = xmlcategories.childNodes[0].nodeValue;
      var xmlproducts = xmldoc.getElementsByTagName("products")[0];
      var products = xmlproducts.childNodes[0].nodeValue;
      var xmllistpricetotal = xmldoc.getElementsByTagName("listpricetotal")[0];
      var listpricetotal = xmllistpricetotal.childNodes[0].nodeValue;
      var xmlwholesalepricetotal = xmldoc.getElementsByTagName("wholesalepricetotal")[0];
      var wholesalepricetotal = xmlwholesalepricetotal.childNodes[0].nodeValue;
      domcategories.innerHTML = categories;
      domproducts.innerHTML = products;
      domlistpricetotal.innerHTML = listpricetotal;
      domwholesalepricetotal.innerHTML = wholesalepricetotal;
    }
  };
  request.send();
}
