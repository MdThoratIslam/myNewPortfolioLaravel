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
        typewriter.typeString('Welcome to my website')
        .pauseFor(2500)
        .deleteAll()

        .typeString('I am a <strong>Web Designer</strong>')
        .pauseFor(2500)
        .deleteChars(8)

        .typeString('<strong>Developer</strong>')
            // how ro typestring langht count
        .pauseFor(2500)
        .deleteChars(20)

        .typeString('<strong>I use the technology Vue JS</strong>')
        .pauseFor(2500)
        .deleteChars(6)

        .typeString('<strong>Laravel</strong>')
        .pauseFor(2500)
        .deleteChars(28)


        .typeString('<strong>I am Full Stack Developer</strong>')
        .pauseFor(2500)
        .start();


    // var app = document.getElementById('web_title_name');
    // var typewriter = new Typewriter(app, {
    //     loop: true
    // });
    //
    // // Define your array of strings
    // var stringsArray = [
    //     'Welcome to my website',
    //     'I am a <strong>Web Designer</strong>',
    //     '<strong>Developer</strong>',
    //     '<strong>I use the technology Vue JS</strong>',
    //     '<strong>Laravel</strong>',
    //     '<strong>I am Full Stack Developer</strong>'
    // ];
    //
    // // Loop through the strings array
    // stringsArray.forEach((string, index) =>
    // {
    //     typewriter.typeString(string)
    //         .pauseFor(2500)
    //         if(string == 'i am a <strong>Web Designer</strong>')
    //         {
    //             .deleteChars(string.length - 8)
    //         }else if(string == '<strong>Developer</strong>')
    //         {
    //             .deleteChars(string.length - 20)
    //         }else if(string == '<strong>I use the technology Vue JS</strong>')
    //         {
    //             .deleteChars(string.length - 6)
    //         }else if(string == '<strong>Laravel</strong>')
    //         {
    //             .deleteChars(string.length - 28)
    //         }else if(string == '<strong>I am Full Stack Developer</strong>')
    //         {
    //             .deleteChars(string.length)
    //         }else
    //         {
    //             .deleteAll()
    //         }
    // });
    //
    // typewriter.start();
</script>
