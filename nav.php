
<style>
   .sidenav {
      display: inline-flex;
      flex-direction: column;
      justify-content: flex-start;
      height: 93vh;
      width: auto;
      min-width: 4rem;
      max-width: 10rem;
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
      filter: grayscale(100%) opacity(0.7);

    }

    .sidenav a:hover {
      filter: grayscale(0%) opacity(1);
      color: white;
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
    <li class="nav-item">
      <a href="#" onclick="toggleSidebar()">
        <svg id="hover-link" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26" width="20" height="20">
          <path class="color" d="M18.976563 23L22 20.984375L16.480469 13L22 5.015625L18.976563 3L11.980469 13 Z M 10.960938 23L14.019531 20.984375L8.5 13L14.019531 5.015625L10.960938 3L4 13Z" fill="#5B5B5B" />
        </svg>
       <span class="nav-text">Minimize</span> 
      </a>
    </li>
    <li class="nav-item">
      <a href="#">
        <svg id="hover-link" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26" width="20" height="20">
          <path class="color" d="M23 1.1875C22 1.1875 21.1875 2 21.1875 3C21.1875 3.125 21.195313 3.257813 21.21875 3.375L18.78125 5.375C18.546875 5.261719 18.277344 5.1875 18 5.1875C17.40625 5.1875 16.894531 5.496094 16.5625 5.9375L14.75 5.5625C14.554688 4.769531 13.851563 4.1875 13 4.1875C12 4.1875 11.1875 5 11.1875 6C11.1875 6.148438 11.214844 6.300781 11.25 6.4375L8.78125 8.375C8.546875 8.261719 8.277344 8.1875 8 8.1875C7 8.1875 6.1875 9 6.1875 10C6.1875 10.050781 6.183594 10.105469 6.1875 10.15625L3.9375 11.46875C3.660156 11.296875 3.347656 11.1875 3 11.1875C2 11.1875 1.1875 12 1.1875 13C1.1875 14 2 14.8125 3 14.8125C4 14.8125 4.8125 14 4.8125 13C4.8125 12.925781 4.789063 12.851563 4.78125 12.78125L7.03125 11.5C7.316406 11.683594 7.636719 11.8125 8 11.8125C9 11.8125 9.8125 11 9.8125 10C9.8125 9.875 9.804688 9.742188 9.78125 9.625L12.28125 7.65625C12.5 7.746094 12.75 7.8125 13 7.8125C13.570313 7.8125 14.074219 7.539063 14.40625 7.125L16.25 7.5C16.464844 8.265625 17.167969 8.8125 18 8.8125C19 8.8125 19.8125 8 19.8125 7C19.8125 6.875 19.804688 6.742188 19.78125 6.625L22.21875 4.625C22.453125 4.738281 22.722656 4.8125 23 4.8125C24 4.8125 24.8125 4 24.8125 3C24.8125 2 24 1.1875 23 1.1875 Z M 22 11C21.449219 11 21 11.449219 21 12L21 25C21 25.550781 21.449219 26 22 26L24 26C24.550781 26 25 25.550781 25 25L25 12C25 11.449219 24.550781 11 24 11 Z M 12 13C11.449219 13 11 13.449219 11 14L11 25C11 25.550781 11.449219 26 12 26L14 26C14.550781 26 15 25.550781 15 25L15 14C15 13.449219 14.550781 13 14 13 Z M 17 15C16.449219 15 16 15.449219 16 16L16 25C16 25.550781 16.449219 26 17 26L19 26C19.550781 26 20 25.550781 20 25L20 16C20 15.449219 19.550781 15 19 15 Z M 7 16C6.449219 16 6 16.449219 6 17L6 25C6 25.550781 6.449219 26 7 26L9 26C9.550781 26 10 25.550781 10 25L10 17C10 16.449219 9.550781 16 9 16 Z M 2 18C1.449219 18 1 18.449219 1 19L1 25C1 25.550781 1.449219 26 2 26L4 26C4.550781 26 5 25.550781 5 25L5 19C5 18.449219 4.550781 18 4 18Z" fill="#5B5B5B" />
        </svg>
        <span class="nav-text">dashboard</span> 
      </a>
    </li>
    <li class="nav-item">
      <a href="#">
        <svg id="hover-link" width="20" height="20" viewBox="0 0 26 26" xmlns="http://www.w3.org/2000/svg" mirror-in-rtl="true">
          <path class="color" fill="#5B5B5B" stroke="#5B5B5B" stroke-width="1" d="M8 6H5c-.553 0-1-.448-1-1s.447-1 1-1h3c.553 0 1 .448 1 1s-.447 1-1 1zM13 10H5c-.553 0-1-.448-1-1s.447-1 1-1h8c.553 0 1 .448 1 1s-.447 1-1 1zM13 14H5c-.553 0-1-.448-1-1s.447-1 1-1h8c.553 0 1 .448 1 1s-.447 1-1 1z"/>
          <path class="color" fill="#5B5B5B" stroke="#5B5B5B" stroke-width="1" d="M18 2v8c0 .55-.45 1-1 1s-1-.45-1-1V2.5c0-.28-.22-.5-.5-.5h-13c-.28 0-.5.22-.5.5v19c0 .28.22.5.5.5h13c.28 0 .5-.22.5-.5V21c0-.55.45-1 1-1s1 .45 1 1v1c0 1.1-.9 2-2 2H2c-1.1 0-2-.9-2-2V2C0 .9.9 0 2 0h14c1.1 0 2 .9 2 2z"/>
          <path class="color" fill="#5B5B5B" stroke="#5B5B5B" stroke-width="1" d="M23.87 11.882c.31.54.045 1.273-.595 1.643l-9.65 5.57c-.084.05-.176.086-.265.11l-2.656.66c-.37.092-.72-.035-.88-.314-.162-.278-.09-.65.17-.913l1.907-1.958c.063-.072.137-.123.214-.167.004-.01.012-.015.012-.015l9.65-5.57c.64-.37 1.408-.234 1.72.305l.374.65z"/>
        </svg>
        <span class="link-text">Project</span>
      </a>
    </li>
    <li class="nav-item">
      <a href="#">
      </a>
    </li>
    <li class="nav-item">
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