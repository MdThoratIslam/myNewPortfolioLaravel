<footer class="footer mt-auto" >
    <div class="copyright bg-white">
        <p>
            &copy; <span id="copy-year"></span>
            Copyright Mono Dashboard Bootstrap Template by
            <a class="text-primary" href="" target="_blank" >Md Thorat Islam</a>.
        </p>
    </div>
    <script>
        var d = new Date();
        var year = d.getFullYear();
        // var date = new Date().getDate();
        // months is full name show
         var month = d.toLocaleString('default', { month: 'long' });
        var date = d.getDate() +" - "+ month +" - "+ d.getFullYear();
        document.getElementById("copy-year").innerHTML = date;
    </script>
</footer>
</div>
</div>
