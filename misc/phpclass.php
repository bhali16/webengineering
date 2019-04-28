<style>
    
    body{
        font-family: monospace;;
        font-size: 20px;
        line-height: 30px;
    }

</style>

<?php
    class Books {
        var $price;
        Private $title;

        function setPrice($par) {
            $this->price = $par;
        }

        function getPrice() {
            echo "Price : " . $this->price."<br>";
        }
    }

    class Novel extends Books {
        var $author;
        var $pub_year;

        function setDetails($title,$author,$pub_year) {
            $this->title = $title;
            $this->author = $author;
            $this->pub_year = $pub_year;
        }

        function getDetails() {
            echo "Title : " . $this->title . "<br>";
            echo "Author : " . $this->author . "<br>";
            echo "Publish Year : " . $this->pub_year . "<br>";
        }


    }

    $physics = new Novel();
    $physics-> setPrice("$100");
    $physics-> setDetails("Physics","Ali", "2000");
    $physics->getPrice();
    $physics->getDetails();


/*

    class MyClass{
        public $public = 'Public';
        protected $protected = 'Protected';
        private $private = 'Private';

        function printHello() {
            echo $this->public;
            echo $this->protected;
            echo $this->private;
        }
    }

    $obj = new MyClass();

        echo $obj->public;
        echo $obj->protected;
        echo $obj->private;
        echo $obj->printHello();

*/

?>