

/* Set the width of the side navigation to 250px */
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
  }
  
  /* Set the width of the side navigation to 0 */
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }
  
  function myFunction() {
      document.getElementById("myDropdown").classList.toggle("show");
    }
    
    // Close the dropdown menu if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }
  /* carosol */
  let slideIndex = 1;
  showSlides(slideIndex);
  
  // Next/previous controls
  function plusSlides(n) {
    showSlides(slideIndex += n);
  }
  
  // Thumbnail image controls
  function currentSlide(n) {
    showSlides(slideIndex = n);
  }
  
  function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
  }
  
  
  function decrease() {
      var aa= parseInt(document.getElementById('p').textContent);
      if(aa>1){
      var ab=aa-1;
      document.getElementById('p').textContent=ab;
   }
      }
   function increase() {
      var bb= parseInt(document.getElementById('p').textContent) ;
      var ba=bb+1;
      document.getElementById('p').textContent=ba;
  
   }
  function buynow() {
      var quantity = parseInt(document.getElementById('p').innerHTML);
      var brand = document.getElementById('h').innerHTML;
      var company = document.getElementById('p1').innerHTML;
      var model = document.getElementById('p2').innerHTML;
      var price = 100; // Assuming the price is fixed at $100
      
      var total = quantity * price;
  
      var orderInfo = document.createElement('p');
      var orderInfo1 = document.createElement('p');
      var orderInfo2 = document.createElement('p');
      var orderInfo3 = document.createElement('p');
      var hr = document.createElement('hr');
  
      orderInfo.innerHTML =brand;
      orderInfo1.innerHTML =company;
      orderInfo2.innerHTML =model;
      orderInfo3.innerHTML = 'Quantity: ' + quantity + '- Total Price: $' + total;
  
      var orderSection = document.getElementById('order');
      orderSection.appendChild(orderInfo);
      orderSection.appendChild(orderInfo1);
      orderSection.appendChild(orderInfo2);
      orderSection.appendChild(orderInfo3);
      orderSection.appendChild(hr);
      alert("Item bought successfully");
  }
  
  function addToCart() {
      var brand = document.getElementById("h").innerText;
      var company = document.getElementById("p1").innerText;
      var model = document.getElementById("p2").innerText;
      var origin = document.getElementById("p3").innerText;
     
      var price = document.querySelector(".rightt-div h1").innerText;
  
      // Create an object to store the details
      var productDetails = {
          brand: brand,
          company: company,
          model: model,
          origin: origin,
          
          price: price
      };
  
      // Convert the object to a JSON string
      var productDetailsJSON = JSON.stringify(productDetails);
  
      // Store the details in localStorage or send it to the server, etc.
      localStorage.setItem("cartItem", productDetailsJSON);
  
      // Redirect to another webpage (replace 'nextPage.html' with the actual page URL)
      window.location.href = "cart.html";
      alert("product added successfully!")
  }
  
  