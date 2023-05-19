<div class="main-search-form-horizontal-wrapper">
    <div class="menu-horizontal-wrapper-05">
        <div class="container ida-vuelta">
        </div>
    </div>
    <div id="content" name="content" class="container">
        <div id="tab-content" name="tab-content" class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="formSearchMain-02">
                <div class="tab-inner menu-horizontal-content">
                    <div class="main-search-form-horizontal">
                        <iframe name="iframe-booking" id="iframe-booking" width="100%" height="530px" src="
							<?php
                            if ($_SESSION['pagina']['web'] == 'Spanish') {
                                echo "https://web.satena.com/booking/widget?carrier=9r&lang=es";
                            } else {
                                echo "https://web.satena.com/booking/widget?carrier=9r&lang=en";
                            }
                            ?>
							" title="BookingSATENA" alt="BookingSATENA">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>