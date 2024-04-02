<section id="hero" class="d-flex flex-column align-items-lg-center justify-content-center">
    <div class="hero-container" data-aos="fade-in" style=" float: left;">
        <h1 id="web_title_name" style="
        background: -webkit-linear-gradient(whitesmoke, #ffffdd, #ff6b40);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        ">
        </h1>
    </div>
    <a href="#about" class="btn-get-started scrollto" style=" align-items: center;">
        <i class="bi bi-chevron-double-down"></i>
    </a>
</section>
<script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
<script>
    var app = document.getElementById('web_title_name');
    var typewriter = new Typewriter(app, {
        loop: true
    });

    // now i want to typeString value a variable value from database or from controller
        typewriter.typeString('Welcome to my website')
        .pauseFor(2500)
        .deleteAll()

        .typeString('I am a <strong>Web Designer</strong>')
        .pauseFor(2500)
        .deleteChars(8)

        .typeString('<strong>Developer</strong>')
        .pauseFor(2500)
        .deleteChars(13)

        .typeString('<strong>Technology Used to Vue.js</strong>')
        .pauseFor(2500)
        .deleteChars(6)

        .typeString('<strong>Laravel</strong>')
        .pauseFor(2500)
        .deleteChars(26)


        .typeString('<strong>Full Stack Developer</strong>')
        .pauseFor(2500)
        .start();
</script>
