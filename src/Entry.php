<?php
//Class
class  Entry {
    //Properties
    public $name;
    public $mail;
    public $message;

    //Function
    function set_name($name) {
    $this->name = $name;
    }
    function get_name() {
    return $this->name;
    }
    function set_email($mail) {
        $this->mail = $mail;
    }
    function get_mail() {
        return $this->mail;
    }
    function set_message($message) {
        $this->message = $message;
    }
    function get_message() {
        return $this->message;
    }
}
// Test
$entry1 = new Entry() ;
$entry1->set_name('Ewout');
$entry1->set_email('vleermuis@live.nl');
$entry1->set_message('Hey een testpagina wat leuk zeg');
// echo
echo "Naam: " . $entry1->get_name();
echo "<br>";
echo "E-mail: " . $entry1->get_mail();
echo "<br>";
echo "Bericht: " . $entry1->get_message()
?>