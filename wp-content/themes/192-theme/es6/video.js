import {$, w} from './constants';

w.load(() => {

    let controller = new ScrollMagic.Controller({addIndicators: false});

    $('div.youtube-autoplay').each(function(){

        let $this = $(this);

        var player = new YT.Player($this.find('div')[0], {
            height: '360',
            width: '640',
            videoId: $this.data('video-id'),
            playerVars: { 'controls': 0, 'showinfo': 0, 'rel': 0 },
            events: {
                'onReady': () => {

                    if ($this.data('autoplay')) {

                        let scene = new ScrollMagic.Scene({
                            triggerElement: this,
                			triggerHook: 1,
                			duration: $(window).innerHeight(),
                			reverse: true,
                            offset: $(this).innerHeight() / 2
                	    })
                        .on("enter", () => {
                            player.playVideo();
                		})
                		.on('leave', () => {
                            player.pauseVideo();
                		})
                        .addTo(controller);

                    }

                },
            }
        });

    });

});
