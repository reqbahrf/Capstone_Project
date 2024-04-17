
<style>
   .sidenav {
      display: inline-flex;
      flex-direction: column;
      justify-content: flex-start;
      height: 93vh;
      width: auto;
      min-width: 4rem;
      max-width: 15rem;
      z-index: 1;
      top: 0;
      left: 0;
      background-color: #111;
      overflow-x: hidden;
      overflow-y: hidden;
      padding-top: 20px;
      transition: width 200ms ease;
    }

    .navbar-nav {
      width: auto;
      margin: 5px;
      height: 100%;
      padding-left: 10px;
    }

    .sidenav ul li:last-child {
      margin-top: auto;
    }

    .color {
      fill:#f1f1f1;
    }

    .sidenav a {
      padding: 6px 8px 6px 0px;
      text-decoration: none;
      font-size: 20px;
      color: #818181;
      display: block;
      filter: grayscale(100%) opacity(0.9);

    }

    .sidenav a:hover {
      filter: grayscale(0%) opacity(1);
      color: white;
    }

    .sidenav a:hover svg path{
      fill: #FFFFFF;
    }

    .nav-text{
      width: auto;
    }

    .hide-text {
      letter-spacing: -10px;
      display: none;
    }

    .rotate-icon {
    transform: rotate(-180deg);
    transition: transform 0.3s ease;
  }




</style>

<nav class="sidenav">
   <ul class="navbar-nav">
    <li class="nav-item mb-2">
      <a href="#" onclick="toggleSidebar()">
        <svg id="hover-link" class=" bg-secondary rounded-circle" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="30" height="30">
          <path d="M16.113281 6.2050781L13.064453 8.7949219L31.578125 32.003906L13.0625 55.308594L16.115234 57.892578L37.701172 33.9375L39.451172 31.996094L37.697266 30.056641L16.113281 6.2050781 z M 33.113281 6.2050781L30.064453 8.7949219L48.578125 32.003906L30.0625 55.308594L33.115234 57.892578L54.701172 33.9375L56.451172 31.996094L54.697266 30.056641L33.113281 6.2050781 z" fill="#FFFFFF" />
        </svg>
       <span class="nav-text">Minimize</span>
      </a>
    </li>
    <li class="nav-item mb-2">
      <a href="#">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="30" height="30">
          <path d="M26 8 A 3 3 0 0 0 23.033203 10.574219L17.054688 14.560547L19.273438 17.888672L25.251953 13.902344 A 3 3 0 0 0 26 14 A 3 3 0 0 0 26 8 z M 50 12 A 3 3 0 0 0 47.117188 14.171875L40.957031 18.488281L43.251953 21.761719L48.916016 17.794922 A 3 3 0 0 0 50 18 A 3 3 0 0 0 50 12 z M 30.992188 13.164062L28.164062 15.992188L35.007812 22.835938 A 3 3 0 0 0 38 26 A 3 3 0 0 0 38 20 A 3 3 0 0 0 37.835938 20.007812L30.992188 13.164062 z M 14 16 A 3 3 0 0 0 14 22 A 3 3 0 0 0 14 16 z M 22 27L22 52L18 52L18 35L10 35L10 52L8 52L8 56L56 56L56 52L54 52L54 31L46 31L46 52L42 52L42 39L34 39L34 52L30 52L30 27L22 27 z" fill="#5B5B5B" />
        </svg>
        <span class="nav-text">dashboard</span>
      </a>
    </li>
    <li class="nav-item mb-2">
      <a href="#">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="30" height="30">
          <path d="M10,7v52h44V7H10z M20,16h24v3H20V16z M20,36h12v3H20V36z M36,48H20v-3h16V48z M36,30H20v-3h16V30z M43.5,49c-1.381,0-2.5-1.119-2.5-2.5c0-1.381,1.119-2.5,2.5-2.5s2.5,1.119,2.5,2.5C46,47.881,44.881,49,43.5,49z M43.5,40c-1.381,0-2.5-1.119-2.5-2.5c0-1.381,1.119-2.5,2.5-2.5s2.5,1.119,2.5,2.5C46,38.881,44.881,40,43.5,40z M43.5,31c-1.381,0-2.5-1.119-2.5-2.5c0-1.381,1.119-2.5,2.5-2.5s2.5,1.119,2.5,2.5C46,29.881,44.881,31,43.5,31z" fill="#5B5B5B" />
        </svg>
        <span class="link-text">Project</span>
      </a>
    </li>
    <li class="nav-item">
      <a href="#">
      </a>
    </li>
    <li class="nav-item mb-2">
      <a href="#">
        <span class="nav-text">UserName</span>
      </a>
    </li>
   </ul>
</nav>

<script>
  function toggleSidebar() {
    //side bar minimize
    var spans = document.querySelectorAll('.sidenav a span');
    spans.forEach(function(span) {
        span.classList.toggle('hide-text');
    });
    //size bar minimize rotation

    var svgIcon = document.getElementById('hover-link');
    svgIcon.classList.toggle('rotate-icon');
  }
</script>