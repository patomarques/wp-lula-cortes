<style>
  @import url(https://fonts.googleapis.com/css?family=Open+Sans);

  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body {
    font-family: 'Open Sans', sans-serif;
  }

  /* Navigation */

  nav {
    width: 100%;
    height: 60px;
    position: fixed;
    top: 0;
    background: #1ABC9C;
  }

  nav ul {
    padding: 20px;
    margin: 0 auto;
    list-style: none;
    text-align: center;
  }

  nav ul li {
    display: inline-block;
    margin: 0 10px;
  }

  nav ul li a {
    padding: 10px 0;
    color: #fff;
    font-size: 1rem;
    text-decoration: none;
    font-weight: bold;
    transition: all 0.2s ease;
  }

  nav ul li a:hover {
    color: #34495E;
  }

  a.active {
    border-bottom: 2px solid #ecf0f1;
  }

  /* Headings */

  h1 {
    font-size: 5rem;
    color: #34495E;
  }

  /* Sections */

  section {
    width: 100%;
    padding: 50px;
    background: #fff;
    border-bottom: 1px solid #ccc;
    height: 500px;
    text-align: center;
  }

  section:nth-child(even) {
    background: #ecf0f1;
  }

  section:nth-child(odd) {
    background: #bdc3c7;
  }

  .sections section:first-child {
    margin-top: 60px;
  }

  section.active {}

  footer {
    height: 500px;
    background: #34495e;
  }
</style>
<nav>
  <ul>
    <li><a href="#1">First</a></li>
    <li><a href="#2">Second</a></li>
    <li><a href="#3">Third</a></li>
    <li><a href="#4">Fourth</a></li>
    <li><a href="#5">Fifth</a></li>
  </ul>
</nav>

<div class="sections">
  <section id="1">
    <h1>First</h1>
  </section>
  <section id="2">
    <h1>Second</h1>
  </section>
  <section id="3">
    <h1>Third</h1>
  </section>
  <section id="4">
    <h1>Fourth</h1>
  </section>
  <section id="5">
    <h1>Fifth</h1>
  </section>
</div>

<footer></footer>

<script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script>
  let sections = $('section');
  let menuFixedNav = $('nav');

  let nav_height = menuFixedNav.outerHeight();

  $(window).on('scroll', function () {
    console.log('scrolling...');
    let cur_pos = $(this).scrollTop();

    sections.each(function () {
      let top = $(this).offset().top - nav_height,
        bottom = top + $(this).outerHeight();

      if (cur_pos >= top && cur_pos <= bottom) {
        menuFixedNav.find('a').removeClass('active');
        sections.removeClass('active');

        $(this).addClass('active');
        menuFixedNav.find('a[href="#' + $(this).attr('id') + '"]').addClass('active');
      }
    });
  });

  menuFixedNav.find('a').on('click', function () {
    let $el = $(this);
    let id = $el.attr('href');

    $('html, body').animate({
      scrollTop: $(id).offset().top - nav_height
    }, 500);

    return false;
  });
</script>
