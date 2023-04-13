<?php
// Indieauth extension, https://github.com/pmoralesgarcia/indieauth-datenstrom

class YellowEdit {
    const VERSION = "0.8.71";
    public $yellow;         // access to API
    public $response;       // web response
    public $merge;          // text merge
    public $editable;       // page can be edited? (boolean)
    
?>

// Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
}


<?php echo $_SERVER['REMOTE_USER']; ?>
