<!-- =========================
                   Preloader
                ============================== -->
<script>
    window.addEventListener('DOMContentLoaded', function() {
        "use strict";
        new QueryLoader2(document.querySelector("body"), {
            barColor: "#e74c3c",
            backgroundColor: "#111",
            percentage: true,
            barHeight: 1,
            minimumTime: 200,
            fadeOutTime: 1000
        });
    });
</script>