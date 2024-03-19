<section id="hero" class="d-flex flex-column align-items-center justify-content-center" style="
background: url('{{asset('web_site/assets/img/my_cover.jpg')}}') top center no-repeat;
width: 100%;
height: 90vh;
background-size: cover;
padding: 0 15px;
display: flex;
align-items: center;
justify-content: center;
">
    <h1 id="web_title_name" style="
            /*background: -webkit-linear-gradient(#3494e6, #ec6ead);*/
            /*background: -webkit-linear-gradient(#cc95c0, #dbd4b4, #7aa1d2);*/
            background: -webkit-linear-gradient(whitesmoke, lightyellow, lightgreen);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;"></h1>
{{--    <h1>Hi, I'm Engr Muhammad Tourat Islam  (Oni)!</h1>--}}
{{--    <h2>I am a Fullstack Developer</h2>--}}
    <a href="#about" class="btn-get-started scrollto">
        <i class="bi bi-chevron-double-down"></i>
    </a>
</section>
<script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
<script>
    var app = document.getElementById('web_title_name');

    var typewriter = new Typewriter(app, {
        loop: true
    });
    typewriter.typeString('I am a Laravel Developer')
        .pauseFor(2500)
        .deleteAll()
        .typeString('I am a Vue.js Developer')
        .pauseFor(2500)
        .deleteAll()
        .typeString('<strong>Full Stack Developer</strong>')
        .pauseFor(2500)
        .start();
</script>
