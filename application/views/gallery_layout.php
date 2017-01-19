<?php $this->load->view('include/header'); ?>
<div class="container-fluid no_space">
    <div class="row no_space">
        <div class="col-lg-2">
            <?php $this->load->view('inc/menu_gall'); ?>
        </div>
        <div class="col-lg-10">
            <h1 class="page_bar_head text-center">
                Galeria
            </h1>
            <div class="space50"></div>
            <form class="form-inline pull-right">
                        <!-- <div class="form-group">
                            <button id="video-gallery-button" type="button" class="btn btn-success btn-lg">
                                <i class="glyphicon glyphicon-film"></i>
                                Launch Video Gallery
                            </button>
                        </div> -->
                        <div class="form-group">
                            <button id="image-gallery-button" type="button" class="btn btn-primary btn-lg no_border_radius">
                                <i class="glyphicon glyphicon-picture"></i>
                                Uruchom galerię
                            </button>
                        </div>
                        <div class="btn-group" data-toggle="buttons">
                          <label class="btn btn-success btn-lg no_border_radius">
                            <i class="glyphicon glyphicon-leaf"></i>
                            <input id="borderless-checkbox" type="checkbox"> Bez krawędzi
                          </label>
                          <label class="btn btn-primary btn-lg no_border_radius">
                            <i class="glyphicon glyphicon-fullscreen"></i>
                            <input id="fullscreen-checkbox" type="checkbox"> Pełny ekran
                          </label>
                        </div>
                    </form>
            <div class="space100"></div>
            <div id="links">
                        <?php if(isset($images) && count($images)):  
                        foreach($images as $image): ?>
                                <a class="" href="<?php echo $image['img_url']; ?>" title="<?php echo $image['img_title']; ?>" data-gallery>
                                    <img class="no_border_radius" src="<?php echo $image['thumb_url']; ?>" alt="<?php echo $image['img_title']; ?>">
                                </a> 
                        <?php endforeach; else: ?>
                            <div id="blank_gallery">Galeria tymczasowo jest pusta</div>
                        <?php endif; ?>
                    </div>

        </div>
    </div>
</div>    
    <!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->
    <div class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body next"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left prev">
                        <i class="glyphicon glyphicon-chevron-left"></i>
                        Previous
                    </button>
                    <button type="button" class="btn btn-primary next">
                        Next
                        <i class="glyphicon glyphicon-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>  
<script>
    $("body").css("background","url(<?php echo site_url('images/photography.png'); ?>)");
</script>
<?php $this->load->view('include/footer'); ?>