<?php
    const BASE_URL = 'http://localhost/komikuku-web/index.php';
    const ASSET_URL = 'http://localhost/komikuku-web/';
    $GLOBALS['uri_segment'] = explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

//    echo $_SERVER['REQUEST_URI'];exit;
    function modal($title = '', $content = '') {
        echo '
        <div id="register-modal" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">'.$title.'</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>'.$content.'</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        ';
    }