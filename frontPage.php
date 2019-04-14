
<!-- Slider -->

 
<h4 class="pb-3 text-center">Please select your mood</h4>
<div class="mb-5">
<div class="row mb-4">
    <div class="col-3 text-center">
        Agitated
    </div>
    <div class=" col-6 slidecontainer">
        <input type="range" min="0" max="2" value="1" class="slider" id="myRange" onchange="getData(this.value)">
    </div>
    <div class="col-3 text-center">
        Calm
    </div>
</div>
<div class="row mb-4">
    <div class="col-3 text-center">
        Happy
    </div>
    <div class=" col-6 slidecontainer">
        <input type="range" min="3" max="5" value="4" class="slider" id="myRange" onchange="getData(this.value)">
    </div>
    <div class="col-3 text-center">
        Sad
    </div>
</div>
<div class="row mb-4">
    <div class="col-3 text-center">
        Tired
    </div>
    <div class="col-6 slidecontainer">
        <input type="range" min="6" max="8" value="7" class="slider" id="myRange" onchange="getData(this.value)">
    </div>
    <div class="col-3 text-center">
        Wide Awake
    </div>
</div>
<div class="row mb-4">
    <div class="col-3 text-center">
        Scared
    </div>
    <div class="col-6 slidecontainer">
        <input type="range" min="9" max="11" value="10" class="slider" id="myRange" onchange="getData(this.value)">
    </div>
    <div class="col-3 text-center">
        Fearless
    </div>
</div>
</div>



   
<!-- Movie List using cards rather than table -->
<h4 class="pb-3 pt-4 text-center">Here are some suggestions</h4>
<div class="card-deck">
    
                        
<div id="1" class="card" >
    <img class="card-img-top" src="..." alt="No Content" onerror="this.src='images/no_content.png'"> <!-- added onerror as without there were just broken image icons -->
  <div class="card-body text-center">
      <h5 class="card-title">No Content</h5>
  </div>
</div>
<div id="2" class="card" >
  <img class="card-img-top" src="..." alt="No Content" onerror="this.src='images/no_content.png'">
  <div class="card-body text-center">
      <h5 class="card-title">No Content</h5>
  </div>
</div>
<div id="3" class="card" >
  <img class="card-img-top" src="..." alt="No Content" onerror="this.src='images/no_content.png'">
  <div class="card-body text-center">
      <h5 class="card-title">No Content</h5>
  </div>
</div>
<div id="4" class="card" >
    <img class="card-img-top" src="..." alt="No Content" onerror="this.src='images/no_content.png'">
  <div class="card-body text-center">
      <h5 class="card-title">No Content</h5>
  </div>
</div>
<div id="5" class="card" >
  <img class="card-img-top" src="..." alt="No Content" onerror="this.src='images/no_content.png'">
  <div class="card-body text-center">
      <h5 class="card-title">No Content</h5>
  </div>
</div>
</div>