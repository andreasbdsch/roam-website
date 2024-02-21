<?php
try {
    // First check if every input got a value
    foreach ( $_POST as $value ) {
        if ( isset( $value ) ) {
            
            continue;

        } else {

            throw new Exception("Some data has not been processed correctly on the way. Please try again or contact us via e-mail.", 1);

        }
    }

    // Then sanitize the input values (get rid of some special characters, double and leading/ending white spaces)
    // ...

} catch (\Throwable $th) {

    print_r($th->getMessage());

}
?>