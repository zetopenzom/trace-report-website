<!-- ========================= JS here ========================= -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/wow.min.js')}}"></script>
<script src="{{asset('js/tiny-slider.js')}}"></script>
<script src="{{asset('js/glightbox.min.js')}}"></script>
<script src="{{asset('js/count-up.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
<script type="text/javascript">
    //====== counter up
    var cu = new counterUp({
    start: 0,
    duration: 2000,
    intvalues: true,
    interval: 100,
    append: " ",
    });
    cu.start();

    $(document).ready(function() {
        $("#absensi").click(function() {
            $("#absensi img.top").toggleClass("transparent");
        });
        $("#kolabtim").click(function() {
            $("#kolabtim img.top").toggleClass("transparent");
        });
        $("#manajemenproyek").click(function() {
            $("#manajemenproyek img.top").toggleClass("transparent");
        });
        $("#salestracking").click(function() {
            $("#salestracking img.top").toggleClass("transparent");
        });
    });

</script>