jQuery(document).ready(function($){
    
    function rev_resize(){
        $('.rev-video-iframe').each(function(index) {
            var $rev_video_iframe = $(this);
            var container_width = $rev_video_iframe.parent().width();
            var video_width_perc = $rev_video_iframe.attr('revwidth').replace('%', '');
            var video_width = video_width_perc * container_width / 100;
            var iframe_ratio = $rev_video_iframe.attr('revratio').split('/');
            var iframe_ratio_w = parseInt(iframe_ratio[0]);
            var iframe_ratio_h = parseInt(iframe_ratio[1]);
            var iframe_ratio_dec = iframe_ratio_w / iframe_ratio_h;
            var video_height = video_width / iframe_ratio_dec;
            $rev_video_iframe.attr('width', video_width);
            $rev_video_iframe.attr('height', video_height);
        });
    }
    
    $(window).ready( function() {
        rev_resize();
    });
    
    $(window).on('resize', function() {
        rev_resize();
    })
    
});