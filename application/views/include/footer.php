    <!--nice scroll -->
    <?php if($this->uri->segment(1) != 'wynalazki' && $this->uri->segment(1) != 'biografia' && $this->uri->segment(1) != 'about'): ?>
        <script src="<?php echo site_url() . 'assets/js/nicescroll/jquery.nicescroll.min.js'; ?>"></script>
    <?php endif; ?>

    <script src="<?php echo site_url() . 'assets/js/scrollTo.min.js'; ?>"></script>
    <script src="<?php echo site_url() . 'assets/js/jquery.easing.min.js'; ?>"></script>
    <script src="<?php echo site_url() . 'assets/js/jquery.fullContent.min.js'; ?>"></script>

    <script type="text/javascript">
        $('#page_full').fullContent({
            stages: 'div',
            mapPosition: [{v: 1, h: 1}, {v: 1, h: 3}, {v: 1, h: 5}, {v: 2, h: 2}, {v: 2, h: 4}, {v: 3, h: 1}, {v: 3, h: 3}, {v: 3, h: 5}, {v: 4, h: 2}, {v: 4, h: 4}, {v: 5, h: 1}, {v: 5, h: 3}, {v: 5, h: 5}],
            stageStart: 1,
            idComplement: 'page_',
            ease: 'easeOutQuad'
        });
    </script>

    <script>
        var nice = false;
        $(document).ready(
          function() { 
            nice = $("html").niceScroll();
          }
        );
    </script>
    <script>
    $('[data-toggle="popover"]').popover({ trigger: "manual" , html: true,})
            .on("mouseenter", function () {
                var _this = this;
                $(this).popover("show");
                $(".popover").on("mouseleave", function () {
                    $(_this).popover('hide');
                });
            }).on("mouseleave", function () {
                var _this = this;
                setTimeout(function () {
                    if (!$(".popover:hover").length) {
                        $(_this).popover("hide");
                    }
                }, 300);
        });
    </script>
</body>
</html>