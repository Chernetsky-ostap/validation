<?php

Route::set('/validate', function() {
    MainController::validateCard();
});