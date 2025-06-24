 <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl" id="waitDialog">
            <div class="modal-content">
                <div class="modal-header">
                <!-- <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5> -->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="stopVideo()"></button>
                </div>
                <div class="modal-body">
                    <video id="MyVideo" width="100%" loop="true" autoplay="false" controls >
                        <source src="assets/video/video_asefimex2.mp4" type="video/mp4">
                    </video>
                </div>      
            </div>
            </div>
        </div>


<script type="text/javascript">
    function stopVideo() {
        document.getElementById('MyVideo').pause();
    }
</script>