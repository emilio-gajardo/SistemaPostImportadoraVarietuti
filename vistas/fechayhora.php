<div class="row">
    <div class="text-center" style="color:">
        <p style="float:center;">
            <script type="text/javascript">
                //<![CDATA[
                var today = new Date();
                var m = today.getMonth() + 1;
                var mes = (m < 10) ? '0' + m : m;
                var anio = today.getFullYear();
                //document.write('Fecha: ' + today.getDate(), '-' + mes, '-' + today.getYear("YYYY"));
                document.write('Fecha: ' + today.getDate(), '-' + mes, '-' + anio);
            </script>
        </p>
    </div>
</div>

<div class="row">
    <div class="text-center" style="color:">
        <script type="text/javascript">
            function startTime() {
                today = new Date();
                h = today.getHours();
                m = today.getMinutes();
                s = today.getSeconds();
                m = checkTime(m);
                s = checkTime(s);
                document.getElementById('reloj').innerHTML = h + ":" + m + ":" + s;
                t = setTimeout('startTime()', 500);
            }

            function checkTime(i) {
                if (i < 10) {
                    i = "0" + i;
                }
                return i;
            }
            window.onload = function() {
                startTime();
            }
        </script>
        <p id="reloj" style="font-size:15px;"></p>
    </div>
</div>